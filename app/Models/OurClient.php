<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OurClient extends Model
{
    public $table = "our_clients";

    public $primaryKey = "id";

    public $timestamps = true;

    public $fillable = [
		'id',
		'title',
		'image',

    ];

    public static $rules = [
     
    ];

    // BasicSetting 
}
