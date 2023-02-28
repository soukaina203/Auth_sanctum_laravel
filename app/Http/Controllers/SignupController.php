<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Hash;

class SignupController extends BaseController
{


    public function signup(Request $request)
    {
        print('i am here');
        // $request->validate([
        //     'name' => 'required',
        //     'email' => 'required|email|unique:users,email',
        //     'password' => 'required|min:6|confirmed',
        // ]);


        $user = User::create([
            "name" => $request->name,
            "email" => $request->email,
            "password" =>Hash::make( $request->password),

        ]);



    }
}


