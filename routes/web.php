<?php

use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Features;
use Livewire\Volt\Volt;
use App\Http\Controllers\QuoteController;

use App\Http\Controllers\LandMeasurementController;
use App\Http\Controllers\PaymentController;
use App\Models\Booking;
use Laravel\Cashier\Http\Controllers\WebhookController;


Route::middleware('auth')->group(function () {
    Route::any('/checkout/one-time', [PaymentController::class, 'oneTimeCheckout'])->name('stripe-checkout');
    Route::get('/payment/success/{booking}', [PaymentController::class, 'paymentSuccess'])->name('payment.success');
    Route::get('/payment/cancel/{booking}', [PaymentController::class, 'paymentCancel'])->name('payment.cancel');
});

Route::post('/land-area', [LandMeasurementController::class, 'getLandArea']);
Route::post('/stripe/webhook', [WebhookController::class, 'handleWebhook']);


Route::get('/', function () {
    return view('welcome');
})->name('home');

// Route::view('dashboard', 'dashboard')
//     ->middleware(['auth', 'verified'])
//     ->name('dashboard');

    
Route::get('dashboard', function () {
    return view('dashboard');
})->middleware('auth')->name('dashboard');



Route::post('/calculate-cost', [QuoteController::class, 'calculateCost'])->name('calculate-cost');
Route::post('/checkout/pay', [PaymentController::class, 'pay']);
Route::post('/api/payments/tilopay/webhook', [PaymentController::class, 'webhook']);

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Volt::route('settings/profile', 'settings.profile')->name('profile.edit');
    Volt::route('settings/password', 'settings.password')->name('user-password.edit');
    Volt::route('settings/appearance', 'settings.appearance')->name('appearance.edit');

    Volt::route('settings/two-factor', 'settings.two-factor')
        ->middleware(
            when(
                Features::canManageTwoFactorAuthentication()
                    && Features::optionEnabled(Features::twoFactorAuthentication(), 'confirmPassword'),
                ['password.confirm'],
                [],
            ),
        )
        ->name('two-factor.show');
});
