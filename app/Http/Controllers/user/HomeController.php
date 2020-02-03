<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\user\post;
use App\Model\user\category;
use App\Model\user\tag;

class HomeController extends Controller
{
  public function index()
  {
  	$posts=post::where('status',1)->orderBy('created_at','DESC')->paginate(1);
  	 return view('user/blogs',compact('posts'));
  } 
  public function category(category $category)
  {
  	$posts=$category->posts();
  	return view('user/blogs',compact('posts'));
  }
  public function tag(tag $tag)
  {
  	$posts=$tag->posts();
  
  	return view('user/blogs',compact('posts'));
  }
  
}
