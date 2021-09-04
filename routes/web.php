<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('front.home.index');
});

Route::get('/product', function () {
    return view('front.product.detail');
});

Route::get('/info', function () {
    return view('front.info.index');
});

Route::get('/contact-us', function () {
    return view('front.pages.contactUs');
});

Route::get('/search', function () {
    return view('front.search.index');
});

require __DIR__.'/auth.php';
