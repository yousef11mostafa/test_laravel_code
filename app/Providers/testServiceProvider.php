<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class testServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
        // dump('3*   an example of created service provider ');
    }
}
