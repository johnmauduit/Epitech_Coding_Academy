<?php

namespace App\Http\Controllers;

use App\Team;
use App\Match;
use Illuminate\Http\Request;
use App\Http\Middleware\Language;

class TeamController extends Controller
{
    public function __construct()
    {
        $this->middleware(Language::class);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teams = Team::get();
        //dump($team);
        return view('teams.index')->with('teams' , $teams);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
   
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function show(Team $team)
    {
        //dd($team);
        $test = 1;
        // choper le nombre total de matchs
        $nbr_matches = Match::where('open', '=', 0)
                            ->where(function($query){
                                $query->where('team1_id', "=", 1)
                                      ->orWhere('team2_id', "=", 1);
                            })
                            ->get();
        $nbr_victories = count(Match::where('winner_id', 1)->get());
        $nbr_defeats = count($nbr_matches) - $nbr_victories;

        // array remplis pour le graph (encodé en JSON)
        $datas = array();
        array_push($datas, array('name' => 'nbr_victories', 'y' => $nbr_victories));
        array_push($datas, array('name' => 'nbr_defeats', 'y' => $nbr_defeats));
        $datas = json_encode($datas);
        
        return view('teams.show', array('team' => $team, 'datas' => $datas));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function edit(Team $team)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Team $team)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function destroy(Team $team)
    {
        //
    }
}
