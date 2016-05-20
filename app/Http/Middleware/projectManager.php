<?php

namespace App\Http\Middleware;

use Closure;

class projectManager
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
        if( Auth::user()->job_type != 2)
    	{
    		return redirect()->back();
    	}
        return $next($request);
    }
}
