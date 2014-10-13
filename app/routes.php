<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Auth::loginUsingID(1);
Route::resource('photos', 'PhotosController');

// Route::get('/', function(){

// 	$image = Image::make(file_get_contents('http://goo.gl/uDTEzv'));
// 	$file = 'sample.jpg';
// 	$path = public_path() . '/images/';

// 	$image->save($path . $file) // 画像を保存する
// 				->crop(200, 200) // 画像をクロップする
// 				->greyscale() // 画像を白黒にする
// 				->save($path . 'thumbnail-' . $file); // 加工した画像を保存する

// 	return $image->response('jpg');

// });
