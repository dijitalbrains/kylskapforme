<?php

namespace App\Providers;

use App\Models\Refrigerator;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
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
        $refrigerators_count = Refrigerator::count();
        View::share('refrigerators_count', $refrigerators_count);
    }
}
