<?php

namespace App\Http\Controllers;

use App\Item;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show($id)
    {
        $product = Product::with('productInfo')->find($id);
        return view('item.show', compact('product'));
    }
}
