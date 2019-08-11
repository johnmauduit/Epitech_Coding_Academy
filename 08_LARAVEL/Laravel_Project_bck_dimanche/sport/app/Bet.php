<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bet extends Model
{
    protected $fillable = [
        'user_id', 'match_id', 'bet_team_winner_id', 'bet'
    ];

    function user()
    {
    	return $this->belongsTo('App\User');
    }


    function match()
    {
    	return $this->belongsTo('App\Match');
    }

    function bet_team_winner()
    {
    	return $this->belongsTo('App\Team');
    }


}
