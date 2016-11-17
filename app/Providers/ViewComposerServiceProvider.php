<?php

namespace App\Providers;

use App\Category;
use Illuminate\Support\ServiceProvider;

class ViewComposerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->composeCategory();
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Load all compose categories variables
     */
    private function composeCategory()
    {
        view()->composer('web.atoms.selects.category', 'App\Http\Composers\CategoryComposer@all');
    }
}
