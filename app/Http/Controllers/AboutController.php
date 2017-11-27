<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{

    public function index()
    {
        return view('about.index');
    }

    public function support()
    {
        return view('about.support');
    }
    public function contact()
    {
        return view('about.contact');
    }
}
