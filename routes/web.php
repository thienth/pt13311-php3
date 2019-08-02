<?php



Route::get('/', 'PostController@homepage')->middleware('auth')->name('homepage');
Route::get('post-remove/{id}', 'PostController@remove')->middleware('auth')->name('post.remove');
Route::get('post/add', 'PostController@addForm')->middleware('auth')->name('post.add');
Route::post('post/add', 'PostController@saveAdd')->middleware('auth');

Route::get('cp-login', 'Auth\LoginController@loginForm')->name('login');
Route::post('cp-login', 'Auth\LoginController@postLogin');

Route::get('logout', function(){
	Auth::logout();
	return redirect()->route('login');
})->name('logout');