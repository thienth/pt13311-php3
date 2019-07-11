<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$users = [
    		[
	    		"name" => "linh luu dan",
	    		"email" => "moderator@gmail.com",
	    		"password" => Hash::make('123456')
	    	],
	    	[
	    		"name" => "tien",
	    		"email" => "thuongdan@gmail.com",
	    		"password" => Hash::make('123456')
	    	]
    	];
      	DB::table('users')->insert($users);
    }
}
