<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FencingController extends Controller
{
    public function about()
    {
        return view('fencing.about');
    }

    public function techniques()
    {
        return view('fencing.techniques');
    }

    public function equipment()
    {
        return view('fencing.equipment');
    }
}
