<?php

namespace App\Http\Controllers;

use App\Item;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $product = Product::all();
        return view('item.index', compact('product'));
    }

    public function show($id)
    {
        $product = Product::find($id);
        return view('item.show', compact('product'));
    }
}
