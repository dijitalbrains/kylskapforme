<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class BladeComponentServiceProvider extends ServiceProvider
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
        // Layouts
        Blade::component('front.layouts.app', 'app-layout');

        // SVG Icons
        Blade::component('front.components.svg.chevronDown', 'svg-chevron-down');
        Blade::component('front.components.svg.searchCircle', 'svg-search-circle');
        Blade::component('front.components.svg.heart', 'svg-heart');



        Blade::component('front.components.productCard', 'product-card');
    }
}
