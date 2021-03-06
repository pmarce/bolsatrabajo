<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','rol'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function personal_data()
    {
        return $this->hasOne('App\Personal_data');
    }

    public function formation()
    {
        return $this->hasMany('App\Formation');
    }

    public function experience()
    {
        return $this->hasMany('App\Experience');
    }

    public function language_skill()
    {
        return $this->hasMany('App\Language_skill');
    }

    public function knowledge()
    {
        return $this->hasMany('App\Knowledge');
    }
	
	public function company()
    {
        return $this->hasOne('App\Company','user_id');
    }
}
