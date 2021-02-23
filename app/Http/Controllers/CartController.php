<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
  
    public function index(){
        $user_id = Auth::id();
        $prd_cart = DB::table('carts')->where('user_id', $user_id)->get();
        // $prd = DB::table('products')->where('id', $prd_cart->prd_id);
        
        return view('pages.cart')->with(['prd_cart' => $prd_cart]);       
    }

    public function add($id,Request $req){
        $prd = Product::find($id);
        $cart = new Cart;

        $cart->user_id = Auth::id();
        $cart->prd_id = $prd->id;
        
        $cart->quality = $req->quality;
        $cart->status = 0;
        $cart->name_prd = $prd->name_prd;
        $cart->price_prd = $prd->price;
        $cart->image_prd = $prd->image;
        $cart->save();
        
       return redirect('home');
 
    }

    public function delete($id){
        $cart = Cart::find($id);
        $cart->delete();
        return redirect('home/cart');
    }
}
