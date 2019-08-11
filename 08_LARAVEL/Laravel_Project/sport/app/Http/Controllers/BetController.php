<?php

namespace App\Http\Controllers;

use App\Bet;
use App\Team;
use App\Match;
use App\User;

use Illuminate\Http\Request;
use App\Http\Middleware\Language;

class BetController extends Controller
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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($user_id, $match_id)
    {

        $user =  User::find($user_id);
        $match = Match::find($match_id);


        $team1 = Team::where('id', '=', $match->team1_id )->take(1)->first();
        $team2 = Team::where('id', '=', $match->team2_id )->take(1)->first();

        return view('bets.add')
            ->with('user', $user)
            ->with('match', $match)
            ->with('team1', $team1)
            ->with('team2', $team2);
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

		return redirect('bets/user/'.$bet->user_id)->with('status', "Pari $action avec succès !");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Bet  $bet
     * @return \Illuminate\Http\Response
     */
    public function show($user_id)
    {

        $bets = Bet::where('user_id', '=', $user_id)->get();

        /*
        foreach($bets as $bet)
        {
            $team1_id = Match::where('team1_id', '=', $bet->match_id)->;
            $team2_id = ;
        }
*/      
        //dd($bets);
        return view('bets.show')->with('bets', $bets);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Bet  $bet
     * @return \Illuminate\Http\Response
     */
    public function edit(Bet $bet)
    {
        //
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
    public function destroy(Bet $bet)
    {
        //
    }
}
