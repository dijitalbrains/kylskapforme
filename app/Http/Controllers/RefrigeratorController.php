<?php

namespace App\Http\Controllers;

use App\Models\Refrigerator;

class RefrigeratorController extends Controller
{
    public function show($id)
    {
        $refrigerator = Refrigerator::with(['images', 'stores'])->findOrFail($id);
        $similar_refrigerators = Refrigerator::with('color')->take(9)->get();
        return view('front.product.detail', compact('refrigerator', 'similar_refrigerators'));
    }
}
