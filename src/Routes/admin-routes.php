<?php

use Illuminate\Support\Facades\Route;
use Webkul\Razorpay\Http\Controllers\Admin\RazorpayOAuthPaymentController;

Route::group(['middleware' => ['web', 'admin'], 'prefix' => config('app.admin_url'),], function () {
    Route::controller(RazorpayOAuthPaymentController::class)->prefix('razorpay')->group(function () {
        Route::get('', 'index')->name('admin.razorpay.index');
        
        Route::post('connect', 'connect')->name('razorpay.payment.connect');

        Route::get('callback', 'callback')->name('admin.razorpay.callback');

        Route::get('refresh', 'refreshToken')->name('admin.razorpay.refresh');
    });
});