<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view('login');
    }

    public function postLogin(Request $request){


        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){
            return redirect()->route('userHalaman');
        }

        return redirect()->route('userHalaman');
    }


    public function logout(){
        Auth::logout();

        return redirect()->route('login');
    }
}
