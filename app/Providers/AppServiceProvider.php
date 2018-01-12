<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\Post;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Avoid Laravel failing on php artisan migrate
        // after php artisan make:auth.
        \Schema::defaultStringLength(191);

        // Add $archives variable to layouts.sidebar layout.
        view()->composer('layouts.sidebar', function ($view) {
            $view->with('archives', Post::archives());
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
