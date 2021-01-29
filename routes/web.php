<?php

use Illuminate\Support\Facades\Route;
use App\Models\Product;
use App\Models\Category;

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

Route::get('home', function () {
    return view('pages.home');
});

Route::get('home/shop', function() {
    return view('pages.shop');
});

Route::get('home/shop-detail', function() {
    return view('pages.shop-detail');
});


Route::get('testdb', function () {
    $prd = Category::find(4)->Product;
    echo $prd;
});