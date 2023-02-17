<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Testimonial
 * @package App\Models
 */
class Testimonial extends Model
{
    public $table = "testimonials";

    public $primaryKey = "id";

    public $timestamps = true;

    public $fillable = [
		'id',
		'name',
		'message',
		'image',
		'email',
		'mobile',
		'profile',
		'country',
		'state',
		'city','type','course'

    ];

    public static $rules = [
        // create rules
         'name'=>"required",
         'message'=>"required",
        'image'=>"nullable|image"
    ];

    // Testimonial 
}
