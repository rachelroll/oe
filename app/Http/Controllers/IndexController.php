<?php

namespace App\Http\Controllers;

use App\Models\Carousel;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {

        $products = Product::where('enabled',1)->orderBy('sort','ASC')->get();
        //轮播图
        $carousels = Carousel::where('enabled',1)->orderBy('sort','ASC')->get();
        $categories = Category::where('enabled',1)->orderBy('sort','ASC')->limit(4)->get();
        return view('index.index', compact('products','carousels','categories'));
    }
}
