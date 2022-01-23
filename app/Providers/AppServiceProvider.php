<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\URL;

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        // Force SSL in production
if ($this->app->environment() == 'production') {
    URL::forceScheme('https');
}
class AppServiceProvider extends ServiceProvider
{
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
