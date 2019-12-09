<?php

namespace Eguana\IEBrasil;

use Illuminate\Support\ServiceProvider;

class IEBrasilServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        // $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'eguana');
        // $this->loadViewsFrom(__DIR__.'/../resources/views', 'eguana');
        // $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        // $this->loadRoutesFrom(__DIR__.'/routes.php');

        // Publishing is only necessary when using the CLI.
        if ($this->app->runningInConsole()) {
            $this->bootForConsole();
        }
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/iebrasil.php', 'iebrasil');

        // Register the service the package provides.
        $this->app->singleton('iebrasil', function ($app) {
            return new IEBrasil;
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['iebrasil'];
    }
    
    /**
     * Console-specific booting.
     *
     * @return void
     */
    protected function bootForConsole()
    {
        // Publishing the configuration file.
        $this->publishes([
            __DIR__.'/../config/iebrasil.php' => config_path('iebrasil.php'),
        ], 'iebrasil.config');

        // Publishing the views.
        /*$this->publishes([
            __DIR__.'/../resources/views' => base_path('resources/views/vendor/eguana'),
        ], 'iebrasil.views');*/

        // Publishing assets.
        /*$this->publishes([
            __DIR__.'/../resources/assets' => public_path('vendor/eguana'),
        ], 'iebrasil.views');*/

        // Publishing the translation files.
        /*$this->publishes([
            __DIR__.'/../resources/lang' => resource_path('lang/vendor/eguana'),
        ], 'iebrasil.views');*/

        // Registering package commands.
        // $this->commands([]);
    }
}
