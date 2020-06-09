<?php

namespace App\Model\user;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    //
    public function Album()
    {
    	return $this->belongsTo('App\Model\user\Photo');
    }
}
