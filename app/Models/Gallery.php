<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    public $table = "galleries";

    public $primaryKey = "id";

    public $timestamps = true;

    public $fillable = [
// Gallery table data
    	"title",
    	"image",
    	"description"
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

    // Gallery 
}
