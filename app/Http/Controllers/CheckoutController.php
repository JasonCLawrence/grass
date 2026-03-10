<?php

namespace App\Http\Controllers;

use App\Mail\PaymentSuccessMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Srmklive\PayPal\Services\PayPal as PayPalClient;
use App\Models\User;
use App\Models\Booking;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class CheckoutController extends Controller
{
    // 1️⃣ Create PayPal Order
    public function createOrder(Request $request)
    {
        $data = $request->all();


        $validator = Validator::make($request->all(), [
            'customer_name'   => ['required', 'string', 'max:255'],
            'customer_email'  => ['required', 'email', 'max:255'],
            'service_type'    => ['required', Rule::in(['monthly', 'one_time'])],
            'job_date'        => ['required', 'date', 'after_or_equal:today'],
            'latitude' => 'required|numeric',
            'longitude' => 'required|numeric',
            'lot_number' => 'required|string|max:5',
            'total_cost'      => 'required|numeric|min:0',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'errors' => $validator->errors()
            ], 422);
        }

        // Get or create user
        $user = Auth::user();
        if (!$user) {
            $user = User::firstOrCreate(
                ['email' => $data['customer_email']],
                [
                    'name' => $data['customer_name'],
                    'password' => Hash::make(Str::random(10))
                ]
            );
            Auth::login($user);
        }

        // Create pending booking
        $booking = Booking::create([
            'user_id' => $user->id,
            'customer_name' => $data['customer_name'],
            'customer_email' => $data['customer_email'],
            'latitude' => $data['latitude'],
            'longitude' => $data['longitude'],
            'lot_number' => $data['lot_number'],
            'service' => $data['services'][0],
            'frequency' => $data['service_type'],
            'job_date' => $data['job_date'],
            'payment_status' => 'pending',
            'total_cost' => $data['total_cost'],
        ]);

        // Create PayPal order
        $provider = new PayPalClient;
        $provider->getAccessToken();

        $order = $provider->createOrder([
            'intent' => 'CAPTURE',
            'purchase_units' => [[
                'amount' => [
                    'currency_code' => config('paypal.currency'),
                    // 'value' => number_format($booking->total_cost, 2, '.', '')
                    "value" => number_format('1.00', 2, '.', '')
                ]
            ]]
        ]);
        \Log::info(json_encode($order, JSON_PRETTY_PRINT));

        if (!isset($order['id'])) {
            return response()->json([
                'error' => 'PayPal order creation failed',
                'details' => $order
            ], 500);
        }

        // Save order ID
        $booking->paypal_order_id = $order['id'];
        $booking->save();

        return response()->json([
            'orderID' => $order['id'],
            'booking_id' => $booking->id
        ]);
    }

    // 2️⃣ Capture PayPal Order
    public function captureOrder(Request $request)
    {
        $orderID = $request->orderID;

        $booking = Booking::where('paypal_order_id', $orderID)->firstOrFail();

        $provider = new PayPalClient;
        $provider->getAccessToken();

        $response = $provider->capturePaymentOrder($orderID);

        if (isset($response['status']) && $response['status'] === 'COMPLETED') {
            $booking->payment_status = 'paid';
            $booking->save();

            Mail::to($booking->customer_email)->send(new PaymentSuccessMail($booking));

            return response()->json([
                'status' => 'success',
                'booking_id' => $booking->id
            ]);
        }

        return response()->json([
            'status' => 'failed',
            'details' => $response
        ], 400);
    }
}
