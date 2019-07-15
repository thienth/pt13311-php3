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

use Illuminate\Http\Request;
Route::get('/', function(Request $request){
	// 1. Lấy keyword từ đường dẫn
	dd($request->keyword);
	// 2. thực hiện câu lệnh select * from posts where title like %keyword%

	$posts = App\Post::all();
	return view('homepage', [
			'dsBaiViet' => $posts
	]);
});

