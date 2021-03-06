<?php

namespace App\Http\Middleware;

use Closure;

class Core
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
        $response = $next($request);
        $response->header('Access-Control-Allow-Origin', '*');
        $response->header('Access-Control-Allow-Headers', 'Origin, Content-Type, Cookie, Accept, multipart/form-data, application/json');
        //$response->header('Access-Control-Allow-Headers', 'Origin, Content-Type, Cookie, X-request-with');
        $response->header('Access-Control-Allow-Methods', 'GET, PUT, DELETE, POST, OPTIONS');
        $response->header('Access-Control-Allow-Credentials', 'false');
        return $response;
    }

}
