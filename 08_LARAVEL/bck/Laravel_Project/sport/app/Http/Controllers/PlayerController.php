<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Middleware\Language;
use App\Player;

class PlayerController extends Controller
{
    public function __construct()
    {
        $this->middleware(Language::class);
    }

    function show($id)
    {
    	$player = Player::find($id);

    	return view('players.show', array('player' => $player));
    }
}
