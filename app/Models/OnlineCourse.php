<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OnlineCourse extends Model
{
    public $table = "online_courses";

    public $primaryKey = "id";

    public $timestamps = true;

    public $fillable = [
		'id',
		'name',
		'seo_url',
		
		'short_description',
		'image',
		'longDescription',
		'title',
		'meta_keywords',
		'meta_description',
		'meta_section',
		'head_css',
		'head_js',
		'footer_css',
		'footer_js',
		'publish',
		'price',
		'category_id'

    ];

    public static $rules = [
        // create rules
    ];

    // Course 
}
