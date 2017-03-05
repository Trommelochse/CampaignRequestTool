<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Campaign extends Model
{
    public function comments()
    {
    	return $this->hasMany('App\Comment');
    }

    public function creator()
    {
    	return $this->hasOne('App\User');
    }
}
