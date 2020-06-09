<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\user\Photo;
class PhotoController extends Controller
{
    //
    public function create(int $albumId)
{

    return view('admin.photo.create',compact('albumId'));
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
    $request->file('cover_image')->storeAs('public/albums/'.$request->input('albumId'), $fileNameToStore);
    $photo=new Photo();
    $photo->title=$request->input('name');
    $photo->description=$request->input('description');
    $photo->photo=  $fileNameToStore;
    $photo->size=$request->file('cover_image')->getSize();
    $photo->album_id=$request->input('albumId');
    $photo->save();
    return redirect(route('album.index'));

}

}
