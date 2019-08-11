<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $fillable = [
        'name', 'country', 'flag',
    ];

    function players()
    {
        return $this->hasMany('App\Player');
    }

    function matches()
    {
    	return $this->hasMany('App\Match');
    }

}
