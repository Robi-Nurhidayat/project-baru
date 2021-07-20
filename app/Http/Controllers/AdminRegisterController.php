<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\AdminModel;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AdminRegisterController extends Controller
{
    public function index(){
        return view('registerAdmin');
    }

    public function postRegister(Request $request, AdminModel $adminModel){


        $adminModel->name = $request->name;
        $adminModel->email = $request->email;
        $adminModel->password = bcrypt($request->password);
        $adminModel->remember_token = Str::random(60);

        $adminModel->save();

        return redirect()->route('adminLogin');
    }
}
