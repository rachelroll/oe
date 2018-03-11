<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class SearchController extends Controller
{

    public function search()
    {
        $products = Product::where('model','like','%' . request('model') . '%')->where('enabled',1)->get();
        return view('search.search',compact('products'));
    }
}
