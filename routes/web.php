<?php



Route::get('/', 'PostController@homepage')->middleware('auth')->name('homepage');
Route::get('post-remove/{id}', 'PostController@remove')->middleware('auth')->name('post.remove');
Route::get('post/add', 'PostController@addForm')->middleware('auth')->name('post.add');
Route::post('post/add', 'PostController@saveAdd')->middleware('auth');

Route::get('cp-login', 'Auth\LoginController@loginForm')->name('login');
