<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ValidateJWT
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $header = $request->header('Authorization');
        $url_base_api_auth = env('URLBASEAPIAUTH');
        $response = Http::withHeaders([
            'Authorization' => $header
        ])->get($url_base_api_auth . '/user');

        // Para manejar la respuesta puedes hacer algo como esto:
        if($response->successful()){
            // La solicitud fue exitosa
            // $data = $response->json();
            return $next($request);
        } else {
            // Hubo un error en la solicitud
            return response()->json(['message' => 'Unauthorized'], 401);
        }
    }
}
