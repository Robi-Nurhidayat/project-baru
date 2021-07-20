<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminLoginController extends Controller
{
    public function index(){
        return view('loginAdmin');
    }

    public function postLogin(Request $request){

        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){
            return redirect()->route('admin');
        }

        return redirect()->route('adminLogin');
    }


    public function logout(){
        Auth::logout();

        return redirect()->route('adminLogin');
    }
}
