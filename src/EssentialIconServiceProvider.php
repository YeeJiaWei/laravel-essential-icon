<?php

namespace YeeJiaWei\EssentialIcon;

use Illuminate\Support\ServiceProvider;

class EssentialIconServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any package services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'blade-icon');
    }
}
