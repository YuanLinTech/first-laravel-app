<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class First
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
        /* // If the token is "verified", the middleware will return an HTTP redirect to the client
        if ($request->input('token') === "verified"){
            return $next($request);
        }

        // If the given token is not "verified", the middleware will return an HTTP redirect to the client
        return redirect()->route('noaccess');*/
        echo "I am route middleware";
        return $next($request);
    }
}
