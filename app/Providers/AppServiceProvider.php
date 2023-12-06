<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Helper\Shop;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->singleton('shop', function ($app) {
            return new Shop(); // Replace with the actual class or service
        });

    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
