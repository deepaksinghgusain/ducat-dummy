<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TutorialData extends Model
{
    public $table = "services";

    public $primaryKey = "id";

    public $timestamps = true;

    public $fillable = [
		'id',
		'title',
		'seo_url',
		'description',

    ];

    public static $rules = [
   
    ];

    // BasicSetting 
}
