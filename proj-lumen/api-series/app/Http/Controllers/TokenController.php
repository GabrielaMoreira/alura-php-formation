<?php

namespace App\Http\Controllers;

use App\Usuario;
use Firebase\JWT\JWT;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class TokenController extends Controller
{
    public function gerarToken(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $usuario = Usuario::where('email', $request->email)->first();

        if(is_null($usuario)  || !Hash::check($request->password, $usuario->password)){
            return response()->json('usuario e/ou senha não localizado', 401);
        }

        //gera token
        $token = JWT::encode(
            ['email' => $request->email],
            env('JWT_KEY')
        );

        return [
                'access_token' => $token
        ];
    }
}
