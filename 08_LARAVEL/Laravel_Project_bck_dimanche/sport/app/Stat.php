<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stat extends Model
{
    protected $fillable = [
        'stat1', 'stat2', 'stat3', 'match_id', 'player_id'
    ];

    function player()
    {
    	return $this->belongsTo('App\Player');
    }
}
