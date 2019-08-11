<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Player;

class PlayerController extends Controller
{
    function show($id)
    {
    	$player = Player::find($id);

    	return view('players.show', array('player' => $player));
    }
}
