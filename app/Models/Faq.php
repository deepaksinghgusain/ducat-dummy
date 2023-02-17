<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{
    public $table = "faqs";

    public $primaryKey = "id";

    public $timestamps = true;

    public $fillable = [
		'id',
		'question',
		'answer',
		'faq_category_id',

    ];

    public static $rules = [
        // create rules
        'question'=>"required",
        'answer'=>"required",
        'faq_category_id'=>"required",
    ];

    // Faq 

    public function faqCategory(){
        return $this->belongsTo(\App\Models\FaqCategory::class,"faq_category_id","id");
    }
}
