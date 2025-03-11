<?php

use Illuminate\Support\Facades\Route;
use Webkul\Razorpay\Http\Controllers\Shop\RazorpayPaymentController;

Route::controller(RazorpayPaymentController::class)->middleware('web')->prefix('checkout/razorpay/payment')->group(function () {
    Route::get('redirect', 'redirect')->name('razorpay.payment.redirect');
    
    Route::get('success', 'paymentSuccess')->name('razorpay.payment.success');

    Route::get('fail', 'paymentFail')->name('razorpay.payment.cancel');

    Route::post('razorpay-hook','verifyPaymentHook')->name('razorpay.payment.hook');
});