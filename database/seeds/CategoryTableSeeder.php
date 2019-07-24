<?php

use Illuminate\Database\Seeder;
use App\Post;
class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cates = [
        	['name' => "Văn hóa"],
        	['name' => "Chính trị"],
        	['name' => "Pháp luật"],
        	['name' => "Thể thao"],
        	['name' => "Sức khỏe"],
        	['name' => "Giáo dục"],
        	['name' => "Game"],
        ];
        DB::table('categories')->insert($cates);

        $posts = Post::all();
        foreach ($posts as $item) {
        	$item->cate_id = rand(1, 7);
        	$item->save();
        }
    }
}
