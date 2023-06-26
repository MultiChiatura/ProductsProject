<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function signup(Request $request)
    {
        $validated = $request->validate([
            "email" => "required|email|max:255|exists:users,email",
            "password" => "required|string|max:255"
        ]);
        if (!Auth::attempt($validated)) {
            return redirect()->back()->withErrors(['message' => 'User Data Incorrect']);
        }
        return redirect()->route('products.index');
    }

    public function logOut()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
