<?php

namespace Atin\LaravelSitePromoter;

use Illuminate\Support\ServiceProvider;

class SitePromoterServiceProvider extends ServiceProvider
{
    public function register()
    {
        //
    }

    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'laravel-site-promoter');

        $this->loadTranslationsFrom(__DIR__.'/../lang', 'laravel-site-promoter');

        $this->mergeConfigFrom(__DIR__.'/../config/config.php', 'laravel-site-promoter');

        $this->publishes([
            __DIR__.'/../lang' => $this->app->langPath('vendor/laravel-site-promoter'),
        ], 'laravel-site-promoter-lang');

        $this->publishes([
            __DIR__.'/../resources/views' => resource_path('views/vendor/laravel-site-promoter')
        ], 'laravel-site-promoter-views');

        $this->publishes([
            __DIR__.'/../config/config.php' => config_path('laravel-site-promoter.php')
        ], 'laravel-site-promoter-config');
    }
}