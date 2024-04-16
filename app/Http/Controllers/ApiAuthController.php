<?php

namespace App\Http\Controllers;

use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ApiAuthController extends Controller
{
    public function register(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'roll_number' => ['required', 'string', 'max:255', 'unique:users'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'phone' => ['required', 'string', 'max:255', 'unique:users'],
            'role' => "required",
            "password" => ['required', 'min:6', 'confirmed'],
        ]);
        $user = User::create([
            "name" => $request->name,
            "roll_number" => $request->roll_number,
            "email" => $request->email,
            "phone" => $request->phone,
            "role" => $request->role,
            "password" => Hash::make($request->password),
        ]);

        if (Auth::attempt($request->only(['email', 'password']))) {
            $token = Auth::user()->createToken("PHONE")->plainTextToken;
            return response()->json($token);
        }

        return response()->json(["message" => "Register Fail"], 403);
    }

    public function login(Request $request)
    {
        if (Auth::attempt($request->only(['email', 'password']))) {
            $token = Auth::user()->createToken("PHONE")->plainTextToken;
            return response()->json(["token" => $token, "auth" => new UserResource(Auth::user())]);
        }

        return response()->json(["message" => "Login Fail"], 403);
    }
    public function logout()
    {
        Auth::user()->currentAccessToken()->delete();
        return response()->json(["message" => "Logged Out."], 403);
    }

    public function logoutAll()
    {
        Auth::user()->tokens()->delete();
        return response()->json(["message" => "Logged Out."], 403);
    }

    public function tokens()
    {
        return response()->json(Auth::user()->tokens);
    }
}
