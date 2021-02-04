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

}
