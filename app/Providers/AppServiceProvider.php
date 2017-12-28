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
        $categories_links = Category::with(['product'=>function($query) {
            $query->where('enabled',1)->orderBy('sort','ASC');
        }])->where('enabled',1)->orderBy('sort','ASC')->limit(7)->get();
        $about_links = About::limit(6)->get();

        View::share('categories_links', $categories_links);
        View::share('about_links', $about_links);
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
