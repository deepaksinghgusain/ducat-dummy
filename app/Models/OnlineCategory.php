<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OnlineCategory extends Model
{
    public $table = "ocategories";

    public $primaryKey = "id";

    public $timestamps = true;

    public $fillable = [
		'id',
		'name',
		'seo_url',
		
	
		'title',
		'meta_keywords',
		'meta_description',
		'meta_section',
	

    ];

    public static $rules = [
        // create rules
    ];

    // Course 
}
