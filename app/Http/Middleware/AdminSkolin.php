<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Suppport\Facades\Auth;

class AdminSkolin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = 'adminskolin')
	{
	    if (Auth::guard($guard)->check()) {
	        return redirect('skolin-panel/dashboard');
	    }

	    return $next($request);
	}
}
