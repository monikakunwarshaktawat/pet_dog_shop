<?php

namespace App\Model\user;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    public function tags()
    {
    	return $this->belongsToMany('App\Model\user\tag','post_tags')->withTimestamps();
    }

    public function categories()
    {
    	return $this->belongsToMany('App\Model\user\category','category_posts')->withTimestamps();
    }

    public function comments()
    {
        return $this->hasMany('App\Model\user\Comment')->whereNull('parent_id');
    }
    
    public function getRouteKeyName()
    {
    	return 'slug';
    }
}
