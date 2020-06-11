<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\user\Album;
class AlbumController extends Controller
{
    //
    public function show()
{
    $albums=Album::all();
    return view('user.gallery.album',compact('albums'));
}
public function photos($id)
{
    $Album=Album::with('photos')->where('id',$id)->first();
  return view('user.gallery.photo',compact('Album'));
}
}
