<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    protected $fillable = [
        'name', 'team_id'
    ];

    function team()
    {
    	return $this->belongsTo('App\Team');
    }

    function stat()
    {
    	return $this->hasMany('App\Stat');
    }
}
