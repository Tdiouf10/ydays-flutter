<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'name' => 'required|max:55',
                'email' => 'email|required|unique:users',
                'password' => 'required|confirmed',
            ]);

            $validatedData['password'] = bcrypt($request->password);

            $user = User::create($validatedData);

            return response()->json(['message' => 'Utilisateur creer avec success'], 201);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function login(Request $request)
    {
        try {
            $request->validate([
                'email' => 'email|required',
                'password' => 'required',
                'remember_me' => 'boolean'
            ]);

            $credentials = request(['email', 'password']);

            if (!Auth::attempt($credentials)) {
                return $this->unauthorizedException('Invalid credentials');
            }

            $user = $request->user();
            // auth the user
            Auth::login($user, $request->remember_me);
            // create token; expire_at = 1 week
            $tokenResult = $user->createToken('authToken', ['*'])->plainTextToken;

            return response()->json([
                'user' => $user,
                'access_token' => $tokenResult,
                'token_type' => 'Bearer',
            ]);

        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function logout()
    {
        try {
            auth()->user()->token()->revoke();
            return response()->json(['message' => 'Successfully logged out'], 200);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function refresh()
    {
    }
}
