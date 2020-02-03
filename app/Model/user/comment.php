<?php

namespace App\Model\user;

use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
	 /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['user_id', 'post_id', 'parent_id', 'body'];
	
   public function user()
    {
        return $this->belongsTo('App\Model\user\User');
    }

     public function replies()
    {
        return $this->hasMany('App\Model\user\Comment', 'parent_id');
    }
   
}
