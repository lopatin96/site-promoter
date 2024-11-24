<?php

namespace Atin\LaravelSitePromoter;

use Illuminate\Support\ServiceProvider;

class SitePromoterProvider extends ServiceProvider
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
            __DIR__.'/../resources/views' => \Atin\LaravelSitePromoter\resource_path('views/vendor/laravel-site-promoter')
        ], 'laravel-site-promoter-views');

        $this->publishes([
            __DIR__.'/../config/config.php' => \Atin\LaravelSitePromoter\config_path('laravel-config.php')
        ], 'laravel-site-promoter-config');
    }
}