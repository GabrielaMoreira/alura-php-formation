<?php


namespace App\Http\Middleware;


use App\Usuario;
use Closure;
use Firebase\JWT\JWT;

class Autenticador
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        try{
            if (!$request->hasHeader('Authorization')) {
                return response()->json('header de autorizacao nao encontrado', 401);
                throw new \Exception();
            }
            $authorizationHeader = $request->header('Authorization');
            $token = str_replace('Bearer ', '', $authorizationHeader);
            $dadosAutenticacao = JWT::decode($token, env('JWT_KEY'), ['HS256']);


            $usuario = Usuario::where('email', $dadosAutenticacao->email)->first();
            if(is_null($usuario)){
                throw  new \Exception();
            }

            return $next($request);
        }catch (\Exception $e){
            return response()->json('Não autorizado', 401);
        }

    }
}
