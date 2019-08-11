<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'admin'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'admin', 'password', 'remember_token',
    ];

    public function profile()
    {
        return $this->hasOne('App/SocialeProfile');
    }

    function bets()
    {
    	return $this->hasMany('App\Bet');
    }


}
