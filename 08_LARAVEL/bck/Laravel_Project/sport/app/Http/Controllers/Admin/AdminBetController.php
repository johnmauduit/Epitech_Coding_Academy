<?php

namespace App\Http\Controllers\Admin;

use App\Bet;
use App\Team;
use App\Match;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminBetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bets = Bet::get();
        return view('admin.bets.index')->with('bets', $bets);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::select('id', 'name')->get();
        $matches = Match::all()->where('open', 1);

        $select = [];
    	$select_winner = [];
        $select_winner[0] = "Choisissez un vainqueur";
        
    	foreach($matches as $match){
    		$match[$match->id] = ($match->team1->name.' vs '.$match->team2->name);
            $select_team1[$match->team1_id] = $match->team1->name;
            $select_team2[$match->team2_id] = $match->team2->name;
    	}
    	$params = array(
    		'match' => $match,
    		'select_team1' => $select_team1,
    		'select_team2' => $select_team2,
    	);

        /*
    
        $select = [];
        foreach($matches as $key => $match){

            $match_id = $match->id;
            $team1 = Team::select('id','name')->where('id', '=', $match->team1_id )->take(1)->first();
            $team2 = Team::select('id','name')->where('id', '=', $match->team2_id )->take(1)->first();

            $select[$key] = array('match_id' => $match_id, 
                                'team1'=>$team1,
                                'team2'=> $team2);
        }
*/
        //dd($select);

        return view('admin.bets.add', $params);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'user_id' => 'required|numeric',
            'match_id' => 'required|numeric',
            'bet_team_winner_id' => 'required|numeric',
            'bet' => 'required|numeric'
            
        ]);
        
    	$bet = null;
    	$action = "";
    	if(isset($request->id)){
    		$bet = Bet::find($request->id);
    		$action = "modifié";
    	}
    	else{
    		$bet = new Bet();
    		$action = "ajouté";
    	}
        
        $bet->user_id = $request->user_id;
        $bet->match_id = $request->match_id;
        $bet->bet_team_winner_id = $request->bet_team_winner_id;
        $bet->bet = $request->bet;
		$bet->save();

        return redirect('/admin/bets/')
            ->with('status', "Pari $action avec succès !");
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Bet  $bet
     * @return \Illuminate\Http\Response
     */
    public function show(Bet $bet)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Bet  $bet
     * @return \Illuminate\Http\Response
     */
    public function edit(Bet $bet, $id)
    {

        //dump($id);
        $bet =  Bet::find($id);
        //dd($bet);
        return view('admin.bets.edit')->with('bet', $bet);  
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Bet  $bet
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bet $bet)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Bet  $bet
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $bet = Bet::find($id);
        $bet->delete();

        $bets = Bet::get();
        return redirect('/admin/bets/')
                ->with('status' , 'Team supprimée avec succès !');
    }
}
