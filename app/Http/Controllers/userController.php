<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class userController extends Controller
{
    public function signup(Request $request)
    {

        $user = User::create([
            "name" => $request->name,
            "email" => $request->email,
            "password" => Hash::make($request->password),

        ]);
    }



    public function login(LoginRequest $request)
    {
        $request->validated($request->all());
        if (!Auth::attempt($request->only('email', 'password'))) {
            throw ValidationException::withMessages([
                'email' => 'Invalid credentials',
            ]);
        }
        $user = User::where('email', $request->email)->first();
        $token = $user->createToken('Api Token of ' . $user->name)->plainTextToken;
        return response()->json(['token' => $token]);
    }
    public function logout()
    {
        return Auth::logout();
    }

}
