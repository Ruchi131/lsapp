<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\facades\schema;
//i added this
use Illuminate\Pagination\Paginator;

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
        schema::defaultStringLength(200);
        Paginator::useBootstrap();
    }
}
