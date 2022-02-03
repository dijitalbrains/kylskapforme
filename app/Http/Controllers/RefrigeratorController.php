<?php

namespace App\Http\Controllers;

use App\Models\Refrigerator;
use App\Models\UserFavoriteRefrigerator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RefrigeratorController extends Controller
{
    public function show($id)
    {
        $refrigerator = Refrigerator::with(['images', 'stores'])->findOrFail($id);
        $similar_refrigerators = Refrigerator::with('color')->take(9)->get();
        return view('front.product.detail', compact('refrigerator', 'similar_refrigerators'));
    }

    public function addFavorite(Request $request)
    {
        UserFavoriteRefrigerator::create(['user_id' => Auth::id(), 'refrigerator_id' => $request->refrigerator_id]);
    }

    public function removeFavorite(Request $request)
    {
        UserFavoriteRefrigerator::where(['user_id' => Auth::id(), 'refrigerator_id' => $request->refrigerator_id])->delete();
    }

    public function showFavorite()
    {
        $refrigerators = Refrigerator::with(['userFavoriteRefrigerator'])->whereHas('userFavoriteRefrigerator', function ($q) {
            $q->where('user_id', Auth::id());
        })->get();
        return view('front.favourite.index', compact('refrigerators'));
    }
}
