<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Illuminate\Support\Facades\DB;
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
    	DB::beginTransaction();
    	try{

			$model = Post::find($id);
			if($model){
				$model->delete();
				DB::commit();
			}
			
    	}catch(Exception $ex){
    		// ghi log lỗi lại
    		DB::rollback();
    	}
    	

		return redirect(route('homepage'));
    }

    public function addForm(){
    	$model = new Post();

    	return view('post.add-form', compact('model'));
    }
}
