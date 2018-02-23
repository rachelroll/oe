<?php

namespace App\Providers;

use App\Models\About;
use App\Models\Carousel;
use App\Models\Category;
use App\Models\FootCategory;
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
        }])->where('enabled',1)->has('product')->orderBy('sort','ASC')->limit(7)->get();
        $about_links = About::limit(6)->get();
        $carousels = Carousel::where('enabled',1)->orderBy('sort','ASC')->get();
        $footCate = FootCategory::with(['foot'=>function($query) {
            $query->where('enabled',1)->orderBy('sort','ASC');
        }])->where('enabled',1)->orderBy('sort','ASC')->get();

        View::share('categories_links', $categories_links);
        View::share('about_links', $about_links);
        View::share('carousels', $carousels);
        View::share('footCate', $footCate);
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
