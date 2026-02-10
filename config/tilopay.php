<?php

return [
    'base_url' => env('TILOPAY_BASE_URL', 'https://gateway.tillpayments.com'),
    'api_key' => env('TILOPAY_API_KEY'),
    'api_user' => env('TILOPAY_API_USER'),
    'api_password' => env('TILOPAY_API_PASSWORD'),
    'shared_secret' => env('TILOPAY_SHARED_SECRET'),
    'callback_url' => env('TILOPAY_CALLBACK_URL'),
    'success_url' => env('TILOPAY_SUCCESS_URL'),
    'cancel_url' => env('TILOPAY_CANCEL_URL'),
];
