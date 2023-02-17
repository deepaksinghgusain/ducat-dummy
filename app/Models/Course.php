<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    public $table = "courses";

    public $primaryKey = "id";

    public $timestamps = true;

    public $fillable = [
		'id',
		'name',
		'seo_url',
		'pdf',
		'banner',
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
		'location',
		'pdfname',
		'from_email',
		'courses_list'
    ];

    public static $rules = [
        // create rules
    ];

    // Course 
}
