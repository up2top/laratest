<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\PostsRepository;

class PostsRepositoryProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(PostsRepository::class, function() {
            return new PostsRepository(config('mail.host'));
        });
    }
}
