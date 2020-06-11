<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\user\Photo;
class PhotoController extends Controller
{
    //
    public function photos($photoId)
    {
    	$photo=Photo::where('id',$photoId)->first();
    	return view('user.gallery.singlephoto',compact('photo'));
    }
}
