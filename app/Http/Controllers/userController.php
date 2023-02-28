<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class userController extends Controller
{
    public function signup(Request $request)
    {

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



    public function login(Request $request)
    {
        print("hello");
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (!Auth::attempt($request->only('email', 'password'))) {
            throw ValidationException::withMessages([
                'email' => 'Invalid credentials',
            ]);
        }

        $token = $request->user()->createToken('auth_token')->plainTextToken;

        return response()->json(['token' => $token]);
    }
    public function logout(){
        return Auth::logout();
    }

}
