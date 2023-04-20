<?php

namespace Sophat\Elements;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

class ElementsServicesProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/views/elements', 'elements');
        Blade::component('elements::button', 'e:button');
    }
}
