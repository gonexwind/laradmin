<?php

namespace App\Http\Controllers\API;

use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        if (!auth()->attempt($request->only('username', 'password'))) {
            return ResponseFormatter::error(['message' => 'Unauthorized'], 'Authentication Failed', 500);
        }

        $user = User::where('username', $request['username'])->firstOrFail();
        $token = $user->createToken('auth_token')->plainTextToken;
        return ResponseFormatter::success([
            'access_token' => $token,
            'token_type' => 'Bearer',
            'user' => $user
        ], 'Authenticated');
    }

    public function logout()
    {
        $token = auth()->user()->tokens()->delete();
        return ResponseFormatter::success($token, 'Token Revoked');
    }
}
