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
        $this->loadViewsFrom(__DIR__.'/views/elements', 'element');

        /* Elements */ 
        Blade::component('element::button', 'button');
        Blade::component('element::button.xs', 'xs:button');
        Blade::component('element::button.sm', 'sm:button');
        Blade::component('element::button.md', 'md:button');
        Blade::component('element::button.lg', 'lg:button');
        Blade::component('element::button.xl', 'xl:button');

        Blade::component('element::button.group.button', 'group:button');
        Blade::component('element::button.group.xs', 'xs:group:button');
        Blade::component('element::button.group.sm', 'sm:group:button');
        Blade::component('element::button.group.md', 'md:group:button');
        Blade::component('element::button.group.lg', 'lg:group:button');
        Blade::component('element::button.group.xl', 'xl:group:button');
        
        
        /* Layouts */ 
        $this->loadViewsFrom(__DIR__.'/views/layouts', 'layouts');
        Blade::component('layouts::container', 'container');
        Blade::component('layouts::card', 'card');
        
        /* Display */ 
        $this->loadViewsFrom(__DIR__.'/views/display', 'display');
        Blade::component('display::stats', 'stats');
        Blade::component('display::card-stats', 'card:stats');
    }

}
