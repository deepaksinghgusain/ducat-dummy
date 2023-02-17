<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FaqCategory extends Model
{
    public $table = "faq_categories";

    public $primaryKey = "id";

    public $timestamps = true;

    public $fillable = [
		'id',
		'title',
		'description',
		'image',

    ];
    public static $rules = [
        // create rules
        'title'=>"required",
        'image'=>"required|image"

    ];
    public static $updaterules = [
        // create rules
        'title'=>"required",
        'image'=>"nullable|image"

    ];

    // FaqCategory 

    public function faq(){
        return $this->hasMany(\App\Models\Faq,"faq_category_id");
    }
}
