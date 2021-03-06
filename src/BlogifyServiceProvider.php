<?php

namespace Blogify;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class BlogifyServiceProvider extends ServiceProvider
{
    /**
     * Make config publishment optional by merging the config from the package.
     *
     * @return  void
     */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/../config/blogify.php', 'blogify'
        );
    }

    /**
     * Publishes configuration file.
     *
     * @return  void
     */
    public function boot()
    {
        if (! config('blogify.enabled')) {
            return;
        }

        Route::group($this->routeConfigs(), function () {
            $this->loadRoutesFrom(__DIR__.'/Http/routes.php');
        });

        $this->registerPublishing();

        $this->loadViewsFrom(
            __DIR__.'/../resources/views', 'blogify'
        );

        $this->loadMigrationsFrom(__DIR__.'/Database/migrations');
    }

    /**
     * Get the Blogify route group configuration.
     *
     * @return array
     */
    private function routeConfigs()
    {
        return [
            'domain' => config('blogify.domain', null),
            'prefix' => config('blogify.path'),
            'namespace' => 'Blogify\Http\Controllers',
        ];
    }

    /**
     * Register the package's publishable resources.
     *
     * @return void
     */
    private function registerPublishing()
    {
        $this->publishes([
            __DIR__.'/Database/migrations' => database_path('migrations'),
        ], 'blogify-migrations');
        $this->publishes([
            __DIR__.'/../public' => public_path('vendor/blogify'),
        ], 'blogify-assets');
        $this->publishes([
            __DIR__.'/../config/blogify.php' => config_path('blogify.php'),
        ], 'blogify-config');
    }
}
