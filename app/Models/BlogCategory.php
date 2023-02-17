<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BlogCategory extends Model
{
    public $table = "blog_categories";

    public $primaryKey = "id";

    public $timestamps = true;

    public $fillable = [
		'id',
		'title',
		'seo_url',
		'image',
		'publish',
		'description',
		'meta_description',
		'meta_keywords',
		'meta_title',

    ];

    public static $rules = [
        // create rules
    ];

    // BlogCategory 

    public function blog(){
        return $this->hasMany(\App\Models\Blog::class,"blog_category_id","id")->orderBy("id","desc");
    }
}
