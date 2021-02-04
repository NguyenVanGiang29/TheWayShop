<?php

use Illuminate\Support\Facades\Route;
use App\Models\Product;
use App\Models\Category;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ShopController;
use Illuminate\Support\Facades\DB;

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

Route::get('home1', function () {
    return view('pages.home');
});

Route::get('home/shop-detail', function() {
    return view('pages.shop-detail');
});


Route::get('testdb', function () {
    // $prd = Product::find(4)->Image;
    // echo $prd;
    // $prd = DB::table('Products')
    //             ->join('Images','Products.id', '=', 'Images.prd_id')
    //             ->where('Products.is_hot',1)
    //             ->get();
    $coutprd = Product::where('cate_id', 4)->count();
                    
    echo $coutprd;
});

Route::get('home', [HomeController::class, 'index'])->name('home');

Route::resource('product', 'App\Http\Controllers\ProductController');

Route::get('home/shop', [ShopController::class, 'show'])->name('shop');

Route::get('search', [HomeController::class, 'search'])->name('search');