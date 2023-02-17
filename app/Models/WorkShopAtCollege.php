<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WorkShopAtCollege extends Model
{
    public $table = "work_shop_at_colleges";

    public $primaryKey = "id";

    public $timestamps = true;

    public $fillable = [
		'id',
		'name',
		'seo_url',
		'featureImage',
		'image',
		'companyName',
		'technology',
		'startDate',
		'startTime',
		'shortDescription',
		'longDescription',
		'title',
		'meta_keywords',
		'meta_description',
		'meta_section',
		'head_css',
		'head_js',
		'footer_css',
		'footer_js',		
		'publish'

    ];

    public static $rules = [
        // create rules
    ];

    // WorkShopAtCollege 
}
