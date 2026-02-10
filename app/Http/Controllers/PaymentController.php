<?php

namespace App\Http\Controllers;

use App\Services\TiloPayService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class PaymentController extends Controller
{
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
