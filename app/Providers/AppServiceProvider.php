<?php

namespace App\Providers;

use App\Category;
use App\Catalog;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

        view()->composer('pages._sidebar', function($view){
            $view->with('populars', Catalog::orderBy('views', 'desc')->take(3)->get());
            $view->with('recents', Catalog::orderBy('date', 'desc')->take(3)->get());
            $view->with('categories', Category::all());
        });

        Schema::defaultStringLength(191);
    }
}
