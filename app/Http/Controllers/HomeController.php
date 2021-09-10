<?php

namespace App\Http\Controllers;

use App\Models\Refrigerator;

class HomeController extends Controller
{
    public function index()
    {
        $refrigerators = Refrigerator::take(9)->get();
        return view('front.home.index', compact('refrigerators'));
    }
}
