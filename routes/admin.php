<?php 

Route::get('/', 'PostController@homepage')->name('homepage');

Route::group(['middleware' => 'admin.check'], function() {
    Route::get('post-remove/{id}', 'PostController@remove')->name('post.remove');
	Route::get('post/add', 'PostController@addForm')->name('post.add');
	Route::post('post/add', 'PostController@saveAdd');
});
	




 ?>