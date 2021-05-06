<?php

namespace App\Http\Middleware;

use Closure;

class AuthKey
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
        $token=$request->header('App_Key');
        if($token!="helloatg"){
            return response()->json(['message'=>'Invalid API key'],401);
        }
        return $next($request);
    }
}
