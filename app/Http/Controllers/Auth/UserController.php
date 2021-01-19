<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\User;

use Auth;

use Hash;

class UserController extends Controller
{
    public function login(Request $request)
    {
        $data = $request->all();

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

    public function register(Request $request)
    {
        $data = $request->all();

        $user = User::create([
            'email' => $data['email'],
            'name' => $data['name'],
            'password' => Hash::make($data['password']),
        ]);

        return response()->json([
            'message' => 'Usuario registrado con éxito',
            'token' => $user->createToken('authToken')->accessToken,
            'status' => 200
        ], 200);
    }
}
