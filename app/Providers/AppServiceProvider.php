<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use URL;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // kalau pakai ngrok karena https, ini di aktifkan 
        // jika tanpa ngrok, http, ini di nonaktifkan
        // if (app()->environment('local')) {
        //     URL::forceScheme('https');
        // }
    }
}
