<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Auth;

class UserController extends Controller
{
    public function login(Request $request)
    {
        $data = [
            'email' => request()->only('email'),
            'password' => request()->only('password'),
        ];

        if (Auth::attempt($data)) {

            $user = Auth::user();

            return response()->json([
                'message' => 'Login exitoso',
                'token' => $user->createToken('authToken')->accessToken,
                'status' => 200
            ], 200);
        } else {
            return response()->json([
                'message' => 'Las credenciales son incorrectas',
                'status' => 401
            ], 401);
        }
    }
}
