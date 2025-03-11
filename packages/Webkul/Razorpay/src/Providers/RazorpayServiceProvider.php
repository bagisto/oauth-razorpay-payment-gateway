<?php

namespace Webkul\Razorpay\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class RazorpayServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->register(ModuleServiceProvider::class);

        $this->loadMigrationsFrom(__DIR__ . '/../Database/Migrations');

        $this->loadViewsFrom(__DIR__ . '/../Resources/views', 'razorpay');

        $this->loadTranslationsFrom(__DIR__ . '/../Resources/lang', 'razorpay');

        if (core()->getConfigData('sales.payment_methods.razorpay.active')) {
            $this->mergeConfigFrom(
                dirname(__DIR__) . '/Config/admin-menu.php', 'menu.admin'
            );
        }

        include(__DIR__ . '/../Routes/web.php');
        
        include(__DIR__ . '/../Routes/admin-routes.php');
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->registerConfig();
    }

    /**
     * Register package config.
     *
     * @return void
     */
    protected function registerConfig()
    {
       $this->mergeConfigFrom(
            dirname(__DIR__) . '/Config/system.php',
            'core'
        );

        $this->mergeConfigFrom(
            dirname(__DIR__) . '/Config/paymentmethods.php', 
            'payment_methods'
        );
    }
}