<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    public $table = "blogs";

    public $primaryKey = "id";

    public $timestamps = true;

    public $fillable = [
		'id',
		'title',
		'seo_url',
		'image',
		'publish',
		'longDescription',
		'shortDescription',
		'meta_description',
		'meta_keywords',
		'meta_title',
		'featureImage',
		'blog_category_id',
			'meta_section',
		'head_css',
		'head_js',
		'footer_css',
		'footer_js',

    ];

    public static $rules = [
        // create rules
        'title'=>"required",
		'seo_url'=>"required",
		'publish'=>"required",
		'longDescription'=>"required",
		'blog_category_id'=>"required",
    ];

    // Blog 

    public function blogCategory(){
        return $this->belongsTo(\App\Models\BlogCategory::class,"blog_category_id","id");
    }
}
