<?php

use Illuminate\Support\Facades\Route;
use App\Models\Product;
use App\Models\Category;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CartController;
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

Route::get('home/sale', [ShopController::class, 'sale'])->name('sale');

Route::get('home/shop/product/{id}', [ShopController::class, 'getPrdfolCate']);

Route::post('login', [LoginController::class, 'login'])->name('login');

Route::get('logout',[LoginController::class, 'logout'])->name('logout'); 

Route::get('home/cart',[CartController::class, 'index'])->name('index');

Route::post('home/addcart/{id}',[CartController::class, 'add']);

Route::get('home/deletecart/{id}',[CartController::class, 'delete']);


Route::get('home/about', function(){
    return view('pages.about');
});

Route::get('home/contact', function(){
    return view('pages.contact');
});

// Route::get('home/cart', function(){
//     return view('pages.cart');
// });


// Route::get('signin',[LoginController::class, 'index']);

// Route::post('auth',[LoginController::class, 'auth'])->name('login1');
