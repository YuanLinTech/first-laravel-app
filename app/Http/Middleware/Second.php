<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Second
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
        // If the id is greater than 0, the application will proceed to the next request
        if ($request->id > 0){
            return $next($request);
        }

        // If the id is not greater than 0, the middleware will return an HTTP redirect to the client
        return redirect()->route('noaccess');
        // echo "I am route middleware";
        // return $next($request);
    }
}
