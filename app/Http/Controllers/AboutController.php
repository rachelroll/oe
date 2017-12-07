<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{

    public function show($id)
    {
        $about = About::find($id);
        return view('about.index', compact('about'));
    }
}
