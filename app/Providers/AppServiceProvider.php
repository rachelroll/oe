<?php

namespace App\Providers;

use App\Models\About;
use App\Models\Category;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $categories_link = Category::where('enabled',1)->get();
        $about_link = About::limit(6)->get();

        View::share('categories_link', $categories_link);
        View::share('about_link', $about_link);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
