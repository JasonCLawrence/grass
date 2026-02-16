<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class TiloPayTestController extends Controller
{
    public function index()
    {
        // Simple form to test payment
        return view('tilopay-test');
    }

    public function pay(Request $request)
    {
        $client = new Client();

        // TiloPay test API endpoint (sandbox or live)
        $url = 'https://sandbox.tilopay.com/transaction'; // replace with live when ready

        $payload = [
            'merchantId' => env('TILOPAY_MERCHANT_ID'),
            'merchantKey' => env('TILOPAY_MERCHANT_KEY'),
            'amount' => 5000, // amount in cents or as required
            'currency' => 'JMD',
            'customerName' => $request->customer_name,
            'customerEmail' => $request->customer_email,
            'description' => 'Test Payment Laravel',
            'returnUrl' => route('tilopay.pay'), // TiloPay redirects after payment
        ];

        try {
            $response = $client->post($url, [
                'form_params' => $payload
            ]);

            $body = $response->getBody()->getContents();

            return response()->json([
                'success' => true,
                'response' => $body
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'error' => $e->getMessage()
            ]);
        }
    }
}
