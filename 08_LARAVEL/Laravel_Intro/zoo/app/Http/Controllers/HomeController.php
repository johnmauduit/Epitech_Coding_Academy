<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Carbon\Carbon;

class HomeController extends Controller
{
    public function home($day = null)
    {
        //$day = Carbon::now()->toRfc2822String();
        //$day = "Saturday night live";

        if ($day == null)
        {
            return view('Home',['day' => 'Monday evening <3']);
        }
        else
        {
            return view('Home',['day' => $day]);
        }
    }
}
