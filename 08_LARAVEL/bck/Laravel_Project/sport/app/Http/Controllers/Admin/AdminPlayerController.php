<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Middleware\IsAdmin;
use App\Http\Middleware\Language;
use App\Player;
use App\Team;

class AdminPlayerController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
		$this->middleware(IsAdmin::class);
		$this->middleware(Language::class);


    }
    
    function index()
    {
    	$players = Player::all();
    	return view("admin.players.index", array('players' => $players));
    }

    function add()
    {
    	$teams = Team::all();
    	$select = [];
    	foreach ($teams as $team) {
    		$select[$team->id] = $team->name;
    	}
    	return view("admin.players.add", array('select' => $select));
    }

    function edit($id)
    {
    	$player = Player::find($id);
    	$teams = Team::all();
    	$select = [];
    	foreach ($teams as $team) {
    		$select[$team->id] = $team->name;
    	}

    	$params = array(
    		'player' => $player,
    		'select' => $select
    	);
    	return view("admin.players.edit", $params);
    }

    function store(Request $request)
    {
    	$validatedData = $request->validate([
			'name' => 'required|max:255'
		]);

    	$player = null;
    	$action = "";
    	if(isset($request->id)){
    		$player = Player::find($request->id);
    		$action = "modifié";
    	}
    	else{
    		$player = new Player();
    		$action = "ajouté";
    	}
		$player->name = $request->name;
		$player->team_id = $request->team_id;
		$player->save();

		return redirect('admin/players')->with('status', "Player $action avec succès !");
    }

    function delete($id)
    {
    	Player::destroy($id);
    	return redirect('admin/players')->with('status', 'Player supprimé !');
    }
}
