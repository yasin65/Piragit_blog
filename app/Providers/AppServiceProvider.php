<?php

namespace App\Providers;

use App\Category;
use App\Setting;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider {
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register() {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot() {

        Schema::defaultStringLength(191);

        $categories = Category::all();
        View::share('categories',$categories);

        $setting = Setting::first();
        View::share('setting', $setting);

    }
}
