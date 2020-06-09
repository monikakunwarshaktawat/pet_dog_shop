<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//user routes
Route::group(['namespace'=>'user'],function(){
Route::get('/', 'HomeController@index');
Route::get('post/{post}','PostController@post')->name('post');
Route::get('post/tag/{tag}','HomeController@tag')->name('tag');
Route::get('post/category/{category}','HomeController@category')->name('category');

});

//admin routes
Route::group(['namespace'=>'admin'],function(){
Route::get('admin/home', 'HomeController@index');
//post routes
Route::resource('admin/post','PostController');
//album routes

Route::get('admin/album','AlbumController@index')->name('album.index');
Route::get('admin/album/create','AlbumController@create')->name('album.create');
Route::post('admin/album/store','AlbumController@store')->name('album.store');
Route::get('admin/photo/create/{albumId}','PhotoController@create')->name('photo.create');
Route::post('admin/photo/store','PhotoController@store')->name('photo.store');
//tag routes
Route::resource('admin/tag','TagController');
//category routes
Route::resource('admin/category','CategoryController');
//user routes
Route::resource('admin/user','UserController');
//role routes
Route::resource('admin/role','RoleController');
//permission routes
Route::resource('admin/permission','PermissionController');
//Admin auth routes
Route::get('admin/login', 'Auth\LoginController@showLogin')->name('adminlogin');
Route::post('admin/login', 'Auth\LoginController@login');
//
Route::get('admin/logout', 'Auth\LoginController@logout')->name('adminlogout');

});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('comments', 'CommentController')->only([
    'store'
]);


