<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Image;
use App\Models\Cart;
use App\Models\Category;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    protected $product;
    protected $image;
    protected $cart;

    public function __construct(Product $product, Image $image, Cart $cart)
    {
        $this->$product = $product;
        $this->$image = $image;
        $this->$cart = $cart;
    }

    public function index(){
        $prd_hot = DB::table('Products')->where('is_hot',1)->get();
        $image = DB::table('Products')
                ->join('Images','Products.id', '=', 'Images.prd_id')
                ->where('Products.is_hot',1)
                ->get('path');
        $cate = DB::table('Categoris')->get();

        $prd_sale = DB::table('Products')->where('is_sale',1)->get();
        return view('pages.home')->with(['prd_hot' => $prd_hot, 'image' =>$image, 'prd_sale' => $prd_sale, 'cate' => $cate]);
    }

    public function search(Request $request){
        $keyword = $request->keyword;
        $prd = Product::where('name_prd', 'like', '%'.$keyword.'%')->get();
        $countprd = $prd->count('id');
        $cate = Category::get();
        return view('pages.pagesearch')->with(['prd' => $prd, 'cate' => $cate, 'countprd' => $countprd]);
    }








    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        //      
    }
}
