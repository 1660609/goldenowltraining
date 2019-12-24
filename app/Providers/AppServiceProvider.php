<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use App\Models\Category;

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
        //
        view()->composer('layouts.sidebar_user',function($view){
            $category = Category::all();
            $view->with('category',$category);
        });
        view()->composer('user.result_product',function($view){
            $category = Category::all();
            $view->with('category',$category);
        });
    }
}
