<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function showIndex()
    {
        return view('Kidder.index');
    }

    public function showAbout()
    {
        return view('Kidder.About');
    }
}
