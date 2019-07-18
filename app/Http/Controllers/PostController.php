<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
class PostController extends Controller
{
    public function homepage(Request $request){
    	// 1. Lấy keyword từ đường dẫn
		$kw = $request->keyword; 
		// 2. thực hiện câu lệnh select * from posts where title like %keyword%
		if(!$request->has('keyword') || empty($kw)){
			$posts = Post::all();	
		}else{
			$posts = Post::where('title', 'like', "%$kw%")
								->get();
		}
		
		return view('homepage', [
				'dsBaiViet' => $posts
		]);
    }

    public function remove($id){
    	$model = Post::find($id);
		if($model){
			$model->delete();
		}

		return redirect(route('homepage'));
    }

    public function addForm(){
    	$model = new Post();

    	return view('post.add-form', compact('model'));
    }
}
