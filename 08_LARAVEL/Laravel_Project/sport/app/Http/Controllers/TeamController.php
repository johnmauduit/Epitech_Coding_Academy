<?php

namespace App\Http\Controllers;

use App\Team;
use App\Match;
use App\Player;
use App\Stat;
use Illuminate\Http\Request;
use App\Http\Middleware\Language;


class TeamController extends Controller
{
        /**
     * Create a new controller instance.
     *
     * @return void
     */
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
     * Display the specified resource.
     *
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function show(Team $team)
    {
        $vd_datas = $this->get_vd_ratio($team);
        $vd_list = $this->get_vd_list($team);
        $team_stats = $this->get_global_stats($team);

        $params = array(
            'team' => $team,
            'vd_datas' => $vd_datas,
            'vd_list' => $vd_list,
            'team_stats' => $team_stats,
        );
        return view('teams.show', $params);
    }

    function get_global_stats(Team $team)
    {
        $stat1 = 0;
        $stat2 = 0;
        $stat3 = 0;

        // chope les players de la team
        $players = Player::where('team_id', '=', $team->id)->get();
        foreach ($players as $player) {
            $sum_stat1 = Stat::where('player_id', '=', $player->id)->sum('stat1');
            $sum_stat2 = Stat::where('player_id', '=', $player->id)->sum('stat2');
            $sum_stat3 = Stat::where('player_id', '=', $player->id)->sum('stat3');
            $stat1 += $sum_stat1;
            $stat2 += $sum_stat2;
            $stat3 += $sum_stat3;
            
        }
         $datas = array(
            'stat1' => $stat1,
            'stat2' => $stat2,
            'stat3' => $stat3
        );
        return $datas;
    }

    function get_vd_list(Team $team)
    {
        $last_five_matches = Match::where('open', '=', 0)
                                  ->where(function($query) use($team){
                                      $query->where('team1_id', "=", $team->id)
                                            ->orWhere('team2_id', "=", $team->id);
                                  })
                                  ->take(5)
                                  ->get();
        return $last_five_matches;
    }

    function get_vd_ratio(Team $team)
    {
        // choper le nombre total de matchs
        $nbr_matches = Match::where('open', '=', 0)
                            ->where(function($query) use($team){
                                $query->where('team1_id', "=", $team->id)
                                      ->orWhere('team2_id', "=", $team->id);
                            })
                            ->get();
        $nbr_victories = count(Match::where('winner_id', $team->id)->get());
        $nbr_defeats = count($nbr_matches) - $nbr_victories;

        // array remplis pour le graph (encodé en JSON)
        $datas = array();
        array_push($datas, array('name' => 'nbr_victories', 'y' => $nbr_victories));
        array_push($datas, array('name' => 'nbr_defeats', 'y' => $nbr_defeats));
        $datas = json_encode($datas);

        return $datas;
    }
}
