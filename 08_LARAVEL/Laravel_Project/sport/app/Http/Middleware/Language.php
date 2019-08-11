<?php

namespace App\Http\Middleware;

//use App;
use Closure;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

class Language
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */

    // public function handle($request, Closure $next)
    // {
    //     if (isset(Auth::user()->locale)) {
    //         App::setLocale(Auth::user()->locale);
    //     }

    //     return $next($request);
    // }

    //public $lang = Session::get('locale');

    public function handle($request, Closure $next)
    {
        //dd(Session::get('lang'));
        if(Session::get('lang') !== null)
        {
            App::setLocale(Session::get('lang'));
        }
        return $next($request);
    }
}
