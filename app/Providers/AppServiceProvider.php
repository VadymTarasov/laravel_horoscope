<?php

namespace App\Providers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

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
        //навигация для всех страниц, унаследованных от Main
        View::composer(['Includes.Main'], function ($view){
            $view->with(['posts' => DB::table('posts')->get()->take(12)]);
        });
    }
}
