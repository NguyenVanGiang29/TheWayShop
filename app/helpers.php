<?php
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\Models\Product;
use App\Models\Category;

 function allPrdCount($id)
{
    return Product::where('cate_id', $id)->count();
}

function getCategory(){
    $cate = Category::get();
    foreach($cate as $cate){
        echo $cate->name_cate.'<br>';
    }
}

// function getTotal(){
//     $price = DB::table('carts')->where('user_id', Auth::id())->get('price_prd');
    
//         echo $price;
// }

