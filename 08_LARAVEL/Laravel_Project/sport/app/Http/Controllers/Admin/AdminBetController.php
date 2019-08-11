<?php

namespace App\Http\Controllers\Admin;

use App\Bet;
use App\Team;
use App\Match;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Middleware\IsAdmin;
use App\Http\Middleware\Language;

class AdminBetController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware(IsAdmin::class);
        $this->middleware(Language::class);

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bets = Bet::get();
        $matches = Match::all()->where('open', 1);

    	foreach($matches as $match){
    		$select_match[$match->id] = ($match->id.' - '.$match->team1->name.' vs '.$match->team2->name);
        }

        return view('admin.bets.index')->with('matches', $matches)->with('bets', $bets);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $users = User::select('id', 'name')->get();
        $match = Match::find($id);

        $select_user[0] = "Choose a user";
 	    foreach($users as $user){
    		$select_user[$user->id] = ($user->id.' - '.$user->name);
        }
        
    	$params = array(
            'select_user' => $select_user,
    	);

        return view('admin.bets.add', $params)->with('match', $match);
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
            'bet' => 'required|numeric|min:1'
            
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
