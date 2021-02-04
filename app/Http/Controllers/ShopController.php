<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class ShopController extends Controller
{
    //
    protected $product;
    protected $category;

    public function __construct(Product $product, Category $category){
        $this->product = $product;
        $this->category = $category;
    }
    
    public function show(){
        $cate = $this->category->get();
        $prd = $this->product->get();
        return view('pages.shop')->with(['cate' => $cate, 'prd' => $prd]);
    }

    public function sale(){
        $cate = $this->category->get();
        $prd_sale = $this->product->where('is_hot', 1)->get();
        return view('pages.pagesale')->with(['prd_sale' => $prd_sale, 'cate' => $cate]);
    }

    public function getPrdfolCate($id){
        $id_cate = $id;
        $prd = Product::where('cate_id', $id_cate)->get();
        $cate = Category::get();

        return view('pages.pagecate')->with(['prd' => $prd, 'cate' => $cate]);
    }

}
