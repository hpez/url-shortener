<?php

namespace Hpez\UrlShortener;

use Illuminate\Support\ServiceProvider;

class UrlShortenerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('Hpez\UrlShortener\UrlShortenerController');
        $this->app->bind('url-shortener', function () {
            return new UrlShortener();
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__ . '../database/migrations');
        $this->loadRoutesFrom(__DIR__ . '/routes.php');
    }
}
