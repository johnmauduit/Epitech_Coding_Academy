<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Middleware\Language;
use App\Player;
use App\Stat;


class PlayerController extends Controller
{
    public function __construct()
    {
        $this->middleware(Language::class);
    }

    function show($id)
    {
    	$player = Player::findOrFail($id);

    	//choper les stats sur les 5 derniers matches
    	$stats_list = $this->get_last_five_stats($id);

    	$params = array(
    		'player' => $player,
    		'stats_list' => $stats_list
    	);
    	return view('players.show', $params);
    }

    function get_last_five_stats($id)
    {
    	$datas = array();
    	$stats = Stat::where('player_id', $id)->take(5)->get();

    	$mini_array1 = array();
    	$mini_array2 = array();
    	$mini_array3 = array();
    	//array_push($datas, ["name" => "stat1"]);
    	foreach ($stats as $stat) {
    		array_push($mini_array1, $stat->stat1);
    		array_push($mini_array2, $stat->stat2);
    		array_push($mini_array3, $stat->stat3);
    	}
    	
    	array_push($datas, ["name" => "coups", 'data' => $mini_array1]);
    	array_push($datas, ["name" => "sang versé", 'data' => $mini_array2]);
    	array_push($datas, ["name" => "embrochements", 'data' => $mini_array3]);

    	return json_encode($datas);
    }
}
