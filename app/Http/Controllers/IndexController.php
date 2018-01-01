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

        $categories = Category::where('enabled',1)->orderBy('sort','ASC')->limit(6)->get();
        return view('index.index', compact('products','categories'));
    }
}
