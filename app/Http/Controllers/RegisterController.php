<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class RegisterController extends Controller
{

    public function index(){
        return view('register');
    }

    public function postRegister(Request $request, User $user){


        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->remember_token = Str::random(60);

        $user->save();



        return redirect()->route('paket');
    }
}
