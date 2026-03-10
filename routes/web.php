<?php

use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\HouseController;
use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Features;
use Livewire\Volt\Volt;
use App\Http\Controllers\QuoteController;

use App\Http\Controllers\LandMeasurementController;
use App\Http\Controllers\PaymentController;
use App\Models\Booking;
use Illuminate\Support\Facades\Auth;
use Laravel\Cashier\Http\Controllers\WebhookController;

use App\Models\House;

Route::get('/api/houses', function () {
    $orderID = '5X754616U3843204Y';
    $booking =  Booking::where('paypal_order_id', $orderID)->firstOrFail();
    $booking->payment_status = 'paid';
    $booking->save();
    return $booking;
    // return [
    //     'type' => 'FeatureCollection',
    //     'features' => House::all()->map(function ($house) {
    //         return [
    //             'type' => 'Feature',
    //             'geometry' => $house->geometry,
    //             'properties' => [
    //                 'id' => $house->id,
    //                 'house_number' => $house->house_number,
    //                 'status' => $house->status
    //             ]
    //         ];
    //     })
    // ];
});


Route::middleware(['auth'])->group(function () {
    Route::get('/admin/houses', [HouseController::class, 'index']);
    Route::post('/admin/houses/upload', [HouseController::class, 'uploadGeoJson']);
});


Route::get('/select-house', function () {
    return view('select-house');
});

Route::post('/save-house-selection', [HouseController::class, 'store']);

Route::prefix('checkout')->group(function () {
    Route::post('/create-order', [CheckoutController::class, 'createOrder'])->name('checkout.create-order');
    Route::post('/capture-order', [CheckoutController::class, 'captureOrder'])->name('checkout.capture-order');
});
Route::post('/checkout/one-time', [PaymentController::class, 'createOrder'])->name('paypal-checkout');
Route::get('/payment/success/{booking}', [PaymentController::class, 'paymentSuccess'])->name('payment.success');
Route::get('/payment/cancel/{booking}', [PaymentController::class, 'paymentCancel'])->name('payment.cancel');
Route::middleware('auth')->group(function () {
    // Route::any('/checkout/one-time', [PaymentController::class, 'oneTimeCheckout'])->name('paypal-checkout');
    // Route::get('/payment/success/{booking}', [PaymentController::class, 'paymentSuccess'])->name('payment.success');
    // Route::get('/payment/cancel/{booking}', [PaymentController::class, 'paymentCancel'])->name('payment.cancel');
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

    // Short Term Permission Fix
    // only admin has access to dashboard
    $user = Auth::getUser();
    if (!$user->email == 'test@gmail.com') {;
        // return view('welcome');
        return redirect('/#contact-form');
    }
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
