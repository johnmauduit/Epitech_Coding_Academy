<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class IsAdmin
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
        //var_dump(Auth::check());
        
        if (Auth::check())
        {

            if (Auth::user()->admin != 1)
            {
                return redirect('home');
            }
        }
        
       return $next($request);
    }
}
