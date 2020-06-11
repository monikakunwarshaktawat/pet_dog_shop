<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\user\Album;
class AlbumController extends Controller
{

 public function __construct()
 {
    $this->middleware('auth:admin');
}

public function index()
{
    $albums=Album::all();
    return view('admin.album.show',compact('albums'));
}

public function create()
{

    return view('admin.album.create');
}

public function store(Request $request)
{
    $this->validate($request,[
        'name'=>'required',
        'description'=>'required',
        'cover_image'=>'required|image', 
    ]);
    $filenameWithExtension =$request->file('cover_image')->getClientOriginalname();
    $filename=pathinfo( $filenameWithExtension,PATHINFO_FILENAME);
    $extension=$request->file('cover_image')->getClientOriginalExtension();
    $fileNameToStore= $filename.'_'.time().'.'.$extension;
    $request->file('cover_image')->storeAs('public/album_covers', $fileNameToStore);
    $album=new Album();
    $album->name=$request->input('name');
    $album->description=$request->input('description');
    $album->cover_image=  $fileNameToStore;
    $album->save();
    return redirect(route('album.index'));

}
public function show($id)
{
    $Album=Album::with('photos')->where('id',$id)->first();
  return view('admin.photo.show',compact('Album'));
}

}
