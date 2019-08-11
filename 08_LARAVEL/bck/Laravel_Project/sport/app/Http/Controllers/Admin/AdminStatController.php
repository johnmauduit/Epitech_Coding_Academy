<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Stat;
use App\Match;
use App\Player;

class AdminStatController extends Controller
{
    function index()
    {
    	$stats = Stat::all();
    	foreach($stats as $stat){
    		if(is_null($stat->player)){
    			$player = new Player;
    			$player->name = '-';
    			$stat->player = $player;
    		}
    	}
    	return view("admin.stats.index", array('stats' => $stats));
    }

    function add()
    {
    	$matches = Match::where('open', 0)->get();
    	$players = Player::all();

    	$select_match = [];
    	$select_match[0] = "Choisissez un match";
    	foreach($matches as $match){
    		$select_match[$match->id] = $match->team1->name ." - ". $match->team2->name;
    	}
    	$select_player = [];
    	$select_player[0] = "Choisissez un player";
    	foreach ($players as $player) {
    		$select_player[$player->id] = $player->name;
    	}

    	$params = array(
    		'select_match' => $select_match,
    		'select_player' => $select_player,
    	);
    	return view("admin.stats.add", $params);
    }

    function edit($id)
    {
    	$stat = Stat::find($id);
    	$matches = Match::where('open', 0)->get();
    	$players = Player::all();

    	$select_match = [];
    	$select_match[0] = "Choisissez un match";
    	foreach($matches as $match){
    		$select_match[$match->id] = $match->team1->name ." - ". $match->team2->name;
    	}
    	$select_player = [];
    	$select_player[0] = "Choisissez un player";
    	foreach ($players as $player) {
    		$select_player[$player->id] = $player->name;
    	}

    	$params = array(
    		'stat' => $stat,
    		'select_match' => $select_match,
    		'select_player' => $select_player,
    	);
    	return view("admin.stats.edit", $params);
    }

    function store(Request $request)
    {
    	/*
    	$validatedData = $request->validate([
			'team1' => 'different:team2',
			'team2' => 'different:team1',
		]);
		*/
    	
    	$stat = null;
    	$action = "";
    	if(isset($request->id)){
    		$stat = Stat::find($request->id);
    		$action = "modifiée";
    	}
    	else{
    		$stat = new Stat();
    		$action = "ajoutée";
    	}
		$stat->match_id = $request->match;
		$stat->player_id = $request->player;
		$stat->stat1 = $request->stat1;
		$stat->stat2 = $request->stat2;
		$stat->stat3 = $request->stat3;
		$stat->save();

		return redirect('admin/stats')->with('status', "Stat $action avec succès !");
    }

    function delete($id)
    {
    	Stat::destroy($id);
    	return redirect('admin/stats')->with('status', 'Stat supprimée !');
    }
}
