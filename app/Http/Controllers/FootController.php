<?php

namespace App\Http\Controllers;

use App\Models\Carousel;
use App\Models\Foot;

class FootController extends Controller
{

    public function show($id)
    {
        $foot = Foot::find($id);
        $carousels = Carousel::where('enabled',1)->orderBy('sort','ASC')->get();
        return view('foot.show', compact('foot','carousels'));

    }
}
