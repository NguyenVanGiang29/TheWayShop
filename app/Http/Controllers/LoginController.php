<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
   
    public function login(Request $request){
        
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])){
            return redirect('home');
        }else
            echo "sai thong tin dang nhap";
    }

    public function logout(Request $request){
        Auth::logout();
            return redirect('home');
    }

}
