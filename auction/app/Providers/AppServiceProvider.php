<?php

namespace App\Providers;

use Illuminate\Support\Facades\Schema as SchemaAlias;
use Illuminate\Support\ServiceProvider;

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
        //
        SchemaAlias::defaultStringLength(191);
    }
}
