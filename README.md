### 1. Introduction:
laravel-oAuth-razorpay-payment


### 2. Features:
laravel-oAuth--razorpay-payment


### 3. Requirements:

* **Bagisto**: v2.2.3


### 4. Installation:

* Run the following command

~~~
composer require bagisto/oauth-razorpay-payment-gateway
~~~

* Goto config/app.php file and add following line under 'providers'

~~~
Webkul\Razorpay\Providers\RazorpayServiceProvider::class,
~~~

* Goto composer.json file and add following line under 'psr-4'

~~~
"Webkul\\Razorpay\\": "packages/Webkul/Razorpay/src"
~~~

* Open app\Http\Middleware\VerifyCsrfToken.php and add this route to the exception list:

~~~
protected $except = [
    '/razorpaycheck',
];
~~~

* Run these commands below to complete the setup

~~~
composer require razorpay/razorpay
~~~

~~~
composer dump-autoload
~~~

~~~
php artisan migrate
~~~

~~~
php artisan optimize:clear
~~~

> That's it, now just execute the project on your specified domain.