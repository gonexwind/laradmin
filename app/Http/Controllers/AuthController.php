<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index()
    {
        if (!Auth::user())
            return view('login');

        return match (Auth::user()->role) {
            'ADMIN' => redirect()->route('admin.dashboard')->with([
                'message' => 'Welcome Admin',
                'alert-type' => 'success',
            ]),
            default => redirect('/')->with([
                'message' => 'Please login',
                'alert-type' => 'error',
            ]),
        };
    }

    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        $credentials = request(['username', 'password']);
        if (!Auth::attempt($credentials))
            return redirect('/')->with([
                'message' => 'User and password wrong',
                'alert-type' => 'error',
            ]);

        $user = User::where('username', $request->username)->first();
        if (!hash_equals($request->password, $user->password))
            return redirect('/')->with([
                'message' => 'User and password wrong',
                'alert-type' => 'error',
            ]);

        return match (Auth::user()->role) {
            'ADMIN' => redirect()->route('admin.dashboard')->with([
                'message' => 'Welcome Admin',
                'alert-type' => 'success',
            ]),
            default => redirect('/')->with([
                'message' => 'Please Login',
                'alert-type' => 'error',
            ]),
        };
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/')->with([
            'message' => 'Success logout',
            'alert-type' => 'success',
        ]);
    }
}
