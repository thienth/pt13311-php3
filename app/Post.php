<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';
    public function category(){
    	return $this->belongsTo('App\Category', 'cate_id', 'id');
    }

    protected $fillable = [
		'title', 'content', 'author',
		'cate_id', 'publish_date', 'status'
    ];
}
