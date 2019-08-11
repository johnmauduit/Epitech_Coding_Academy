<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Match extends Model
{
    protected $fillable = [
        'team1_id', 'team2_id', 'open', 'winner_id', 'stats_id'
    ];

    function team1()
    {
    	return $this->belongsTo('App\Team');
    }

    function team2()
    {
    	return $this->belongsTo('App\Team');
    }

    function winner()
    {
    	return $this->belongsTo('App\Team');
    }

    function bets()
    {
    	return $this->hasMany('App\Bet');
    }
}
