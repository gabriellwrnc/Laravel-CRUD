<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $validate = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8|confirmed'
        ]);
        $auth = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        return response([
            $auth,
            'token' => $auth->createToken('pelatihan')->plainTextToken
        ], 200);
    }
    public function login(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $auth = User::where('email', $request->email)->first();

        if (!Auth::attempt($validated)) {
            return response([
                'massage' => 'invalid credentials'
            ], 403);
        };

        return response([
            'auth' => auth()->user(),
            'token' => auth()->user()->createToken('pelatihan')->plainTextToken
        ], 200);
    }

    public function user_profile()
    {
        return response([
            'auth' => auth()->user()
        ], 200);
    }

    public function logout(Request $request)
    {
        auth()->user()->tokens()->delete();
        return response([
            'message' => 'You are logged out'
        ], 200);
    }
}
