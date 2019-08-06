<?php

Route::get('/', function(){
	return "homepage";
});

Route::get('red/{slug}', function(){
	return "doc noi dung bai viet dua vao slug";
});


Route::get('cp-login', 'Auth\LoginController@loginForm')->name('login');
Route::post('cp-login', 'Auth\LoginController@postLogin');

Route::get('logout', function(){
	Auth::logout();
	return redirect()->route('login');
})->name('logout');

Route::get('forbidden', function(){
	return view('auth.403');
})->name('forbidden');





