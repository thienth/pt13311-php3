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
			$posts = Post::paginate(5);	
		}else{
			$posts = Post::where('title', 'like', "%$kw%")
								->paginate(5);
			// thêm tham số đường dẫn keyword khi người dùng
			// có tìm kiếm để tránh lỗi phân trang
			$posts->withPath("?keyword=$kw");
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
