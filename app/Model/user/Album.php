<?php

namespace App\Model\user;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    //
    public function photos()
    {
    	return $this->hasMany('App\Model\user\Photo');
    }
}
