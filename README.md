<p align="center">
    <img src="https://bagisto.com/wp-content/themes/bagisto/images/logo.png" />
    <h2 align="center">OAuth Razorpay Payment Gateway</h2>
</p>


### 1. Introduction:
- This module integrates OAuth authentication with the Razorpay payment gateway for Bagisto, a Laravel-based eCommerce framework. It enables secure and seamless payment processing using Razorpay's API.


### 2. Features:
* Seamless Razorpay payment gateway integration with OAuth authentication.
* Secure payment processing with token-based authentication.
* Easy setup and configuration within the Bagisto admin panel.
* Supports multiple payment methods, including cards, UPI, and net banking.
* Real-time transaction status updates and logs.

### 3. Requirements:

* **Bagisto**: v2.2.3


### 4. Installation:

* Open app\Http\Middleware\VerifyCsrfToken.php and add this route to the exception list:

~~~
protected $except = [
    '/razorpaycheck',
];
~~~

* Run these commands below to complete the setup

~~~
composer require bagisto/oauth-razorpay-payment-gateway
~~~

~~~
composer dump-autoload
~~~

~~~
php artisan oauth-razorpay:install
~~~

> That's it, now just execute the project on your specified domain.