<?php

namespace App\Http\Controllers;

use App\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function show($id)
    {
        $item = '';
        return view('item.show', compact('item'));
    }
}
