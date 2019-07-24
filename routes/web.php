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
Route::get('/', 'PostController@homepage')->name('homepage');
Route::get('post-remove/{id}', 'PostController@remove')->name('post.remove');

Route::get('add', 'PostController@addForm')->name('post.add');

Route::get('cate/{id}', function($id){
	$cate = App\Category::find($id);
	dd(count($cate->posts));
});

Route::get('demo-view', function(){
	$name = '<h2>nguyen van a</h2>';
	$age = 50;
	$address = '15 dong quan';

	$arr = [
		"nguyen van b",
		"tran van C",
		"luong van d",
		"le van e"
	];
	return view('test-view', compact('name', 'age', 'address', 'arr'));
	// [
	// 	'name' => $name,
	// 	'age' => $age
	// ]
});

Route::get('test-v2', function(){
	return view('layouts.main');
});
