<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Middleware\IsAdmin;
use App\Http\Middleware\Language;
use App\Match;
use App\Team;

class AdminMatchController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
        $this->middleware(IsAdmin::class);
        $this->middleware(Language::class);

	}
	
    function index()
    {
    	$matches = Match::all();
    	foreach ($matches as $match) {
    		if(is_null($match->winner)){
    			$team = new Team;
    			$team->name = '-';
    			$match->winner = $team;
    		}
    	}
    	return view("admin.matches.index", array('matches' => $matches));
    }

    function add()
    {
    	$teams = Team::all();
    	$select = [];
    	$select_winner = [];
    	$select_winner[0] = "Choisissez un vainqueur";
    	foreach($teams as $team){
    		$select[$team->id] = $team->name;
    		$select_winner[$team->id] = $team->name;
    	}
    	$params = array(
    		'select' => $select,
    		'select_winner' => $select_winner,
    	);
    	return view("admin.matches.add", $params);
    }

    function edit($id)
    {
    	$match = Match::find($id);
    	$teams = Team::all();
    	$select = [];
    	$select_winner = [];
    	$select_winner[0] = "Choisissez un vainqueur";
    	foreach($teams as $team){
    		$select[$team->id] = $team->name;
    		$select_winner[$team->id] = $team->name;
    	}
    	$params = array(
    		'match' => $match,
    		'select' => $select,
    		'select_winner' => $select_winner,
    	);
    	return view("admin.matches.edit", $params);
    }

    function store(Request $request)
    {
    	$validatedData = $request->validate([
			'team1' => 'different:team2',
			'team2' => 'different:team1',
		]);

    	(is_null($request->open)) ? $open = 0 : $open = 1;

    	
    	$match = null;
    	$action = "";
    	if(isset($request->id)){
    		$match = Match::find($request->id);
    		$action = "modifié";
    	}
    	else{
    		$match = new Match();
    		$action = "ajouté";
    	}
		$match->team1_id = $request->team1;
		$match->team2_id = $request->team2;
		$match->open = $open;
		$match->winner_id = $request->winner;
		$match->save();

		return redirect('admin/matches')->with('status', "Match $action avec succès !");
    }

    function delete($id)
    {
    	Match::destroy($id);
    	return redirect('admin/matches')->with('status', 'Match supprimé !');
    }
}
