<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Carousel;
use Illuminate\Http\Request;

class AboutController extends Controller
{

    public function show($id)
    {
        $about = About::find($id);
        $carousels = Carousel::where('enabled',1)->orderBy('sort','ASC')->get();
        return view('about.index', compact('about','carousels'));
    }
}
