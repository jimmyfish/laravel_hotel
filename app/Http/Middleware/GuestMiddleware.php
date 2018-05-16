<?php

namespace App\Http\Middleware;

use Closure;

class GuestMiddleware
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
        if ($request->user() && $request->user()->roles >= 2) {
            return new Response(view('error.403')->with('role', 'MEMBER'));
        }

        return $next($request);
    }
}
