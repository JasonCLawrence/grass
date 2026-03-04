<?php

namespace App\Http\Controllers;

use App\Services\TiloPayService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use App\Models\Booking;
use Illuminate\Support\Facades\Mail;
use App\Mail\PaymentSuccessMail;
use App\Mail\PaymentCancelledMail;
use Illuminate\Validation\Rule;

class PaymentController extends Controller
{



    public function oneTimeCheckout(Request $request)
    {


        // return $request;
        $validated = $request->validate([
            'customer_name'   => ['required', 'string', 'max:255'],
            'customer_email'  => ['required', 'email', 'max:255'],
            'services'        => ['required', 'array', 'min:1'],
            'services.*'      => ['in:bagging-disposal'], // only enabled service
            'service_type'    => ['required', Rule::in(['monthly', 'one_time'])],
            'job_date'        => ['required', 'date', 'after_or_equal:today'],
        ], [
            'total_cost' => 'required|numeric|min:0',
            'services.required' => 'Please select at least one service.',
            'job_date.after_or_equal' => 'Job date must be today or a future date.',
            // Images
            'property_images'     => 'nullable|array|max:10',
            'property_images.*'   => 'image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        $user = $request->user();
        // $user = [];

        // return $request;



        $customer_name  = $request->customer_name;
        $customer_email = $request->customer_email;
        $service        = $request->services[0];
        $frequency      = $request->service_type;
        $job_date       = $request->job_date;
        $total_cost     = str_replace("$", '', $request->total_cost);


        $servicePricing = config('stripe_services');

        if (
            !isset($servicePricing[$service]) ||
            !isset($servicePricing[$service][$frequency])
        ) {
            abort(400, 'Invalid service or frequency selected.');
        }

        $priceId = $servicePricing[$service][$frequency];

        // return $priceId;

        $imagePaths = [];

        if ($request->hasFile('property_images')) {
            foreach ($request->file('property_images') as $image) {
                $path = $image->store('property-images', 'public');
                $imagePaths[] = $path;
            }
        }
        // Create booking (PENDING)
        $booking = Booking::create([
            'user_id'          => optional($user)->id,
            'customer_name'    => $customer_name,
            'customer_email'   => $customer_email,
            'service'          => $service,
            'frequency'        => $frequency,
            'job_date'         => $job_date,
            'stripe_price_id'  => $priceId,
            'payment_status'   => 'pending',
            'total_cost'      => $total_cost,
            'property_images' => $imagePaths,
        ]);



        return $user->checkout(
            [
                $priceId => 1
            ],
            [
                'success_url' => route('payment.success', ['booking' => $booking->id,]),
                'cancel_url'  => route('payment.cancel', ['booking' => $booking->id,]),
            ]
        );
    }
    public function paymentSuccess(Booking $booking)
    {

        // return $booking
        if ($booking->payment_status == 'paid') {
            // return redirect('/');
        }
        // Mail::to($booking->customer_email)->send(new PaymentSuccessMail($booking));

        $booking->update([
            'payment_status' => 'paid',
            'paid_at'        => now(),
        ]);

        // return "Payment successful! 🎉 Your booking is confirmed.";
        return view('success_booking')->with('booking', $booking);
    }
    public function paymentCancel(Booking $booking)
    {
        $booking->update([
            'payment_status' => 'cancelled',
        ]);

        Mail::to($booking->customer_email)
            ->send(new PaymentCancelledMail($booking));

        return "Payment canceled. Your booking was not completed.";
    }
    public function pay(Request $request, TiloPayService $tilo)
    {
        $orderId = Str::uuid();
        $amount = number_format($request->input('amount'), 2, '.', '');

        $response = $tilo->createTransaction(
            $orderId,
            $amount,
            'JMD',
            [
                'identification' => $request->input('email'),
                'firstName' => $request->input('first_name'),
                'lastName' => $request->input('last_name'),
                'billingCountry' => 'JM',
                'email' => $request->input('email'),
                'ipAddress' => $request->ip(),
            ]
        );

        if (!empty($response->returnType) && $response->returnType == 'REDIRECT') {
            return redirect($response->redirectUrl);
        }

        return back()->with('error', 'Unable to process payment');
    }

    public function webhook(Request $request)
    {
        // TiloPay will POST status notifications here
        $payload = $request->getContent();
        \Log::info("TiloPay webhook: " . $payload);

        // Parse and act on status (store in DB, mark order paid, etc.)
        return response('OK', 200);
    }
}
