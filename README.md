### 1. Introduction:
laravel-oAuth-razorpay-payment


### 2. Features:
laravel-oAuth--razorpay-payment


### 3. Requirements:

* **Bagisto**: v2.2.3


### 4. Installation:

* Unzip the respective extension zip and then merge "packages" and "public" folder into project root directory.

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

* Goto composer.json file and add following line under 'psr-4'

~~~
"Webkul\\Razorpay\\": "packages/Webkul/Razorpay/src"
~~~

* Run these commands below to complete the setup

~~~
composer require razorpay/razorpay
~~~

~~~
composer dump-autoload
~~~

~~~
php artisan optimize:clear
~~~

> That's it, now just execute the project on your specified domain.