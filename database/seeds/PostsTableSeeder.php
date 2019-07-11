<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$posts = [];
    	$faker = Faker\Factory::create();
        for ($i=0; $i < 10; $i++) { 
        	$item = [
        		"title" => $faker->realText($maxNbChars = 100, $indexSize = 1),
        		"image" => "images/" . $faker->image("public/images", $width = 640, $height = 480, 'people', false),
        		"content" => $faker->realText($maxNbChars = 500, $indexSize = 3),
        		"publish_date" => $faker->
dateTimeThisCentury($max = 'now', $timezone = null),
				"author" => $faker->name,
				"status" => rand(0,1)
        	];

        	$posts[] = $item;
        }

        DB::table('posts')->insert($posts);
    }
}
