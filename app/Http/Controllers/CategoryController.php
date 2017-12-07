<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends BaseController
{
    public function show()
    {
        return view('item.category');
    }
}
