<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Asset extends Model
{
    public $table = "assets";

    public $primaryKey = "id";

    public $timestamps = true;

    public $fillable = [
		'id',
		'alt',
		'url',
		'model_id',
		'model',
        'type'

    ];

    public static $rules = [
        // create rules
    ];

    // Asset 
}
