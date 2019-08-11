<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Match;
use Illuminate\Support\Facades\App;
use App\Http\Middleware\Language;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware(Language::class);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($lang = null)
    {
        //dd($lang);
        if ($lang !== null)
        {
            App::setLocale($lang);
            Session::put("lang", $lang);
            Session::save();
        }
        else
        {
            App::setLocale(Session::get('lang'));
        }
      
        $matches = Match::all();
        return view('home', array('matches' => $matches));
    }
    // public function index($lang)
    // {
    //     if (isset($lang))
    //     {
    //         App::setLocale($lang);
    //     }
        
        
    //     $matches = Match::all();
    //     return view('home', array('matches' => $matches));
    // }
}