<?php

namespace Modules\Auth\Http\Controllers;

use Illuminate\Http\Request;
use Modules\User\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Modules\Auth\Http\Requests\AuthFormRequest;

class AuthController extends Controller
{
    public function register(AuthFormRequest $request)
    {

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'tel' => $request->tel,
            'password' => Hash::make($request->password),
        ]);

        return response()->json([
            'message' => 'Compte créé avec succès',
            'user' => $user
        ], 201);
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (!Auth::attempt($credentials)) {
            return response()->json(['message' => 'Invalid credentials'], 401);
        }

        $user = Auth::user();

        // Le token est généré ici 👇
        $token = $user->createToken('auth_token')->plainTextToken;
        
        return response()->json([
            'access_token' => $token,
            'token_type' => 'Bearer',
        ]);

    }

    public function profile(Request $request)
    {
        return response()->json($request->user());
    }

    public function logout(Request $request)
    { 
        $request->user()->currentAccessToken()->delete();

        return response()->json(['message' => 'Logged out']);
    }

}