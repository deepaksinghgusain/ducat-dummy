<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public $table = "categories";

    public $primaryKey = "id";

    public $timestamps = true;

    public $fillable = [
		'id',
		'title',
		'seo_url',
		'image',
		'description',
		'isHome',
		'publish',
		'isParent',
		'meta_title',
		'meta_keywords',
		'meta_description',

    ];

    public static $rules = [
        // create rules
    ];

    public function categories(){
    	return $this->belongsTo(\App\Models\Category::class,"isParent");
    }
    // Category 
}
