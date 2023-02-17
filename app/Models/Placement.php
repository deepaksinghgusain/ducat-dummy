<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Placement extends Model
{
    public $table = "placements";

    public $primaryKey = "id";

    public $timestamps = true;

    public $fillable = [
		'id',
		'title',
		'startDate',
		'startTime',
		'endDate',
		'endtiming',
		'technology',
		'company',
		'location',
		'profile',
		'experience',
		'qualification',
		'skills',
		'venue',
		'contactPerson',
		'contactNumber',

    ];

    public static $rules = [
        // create rules
    ];

    // Placement 
}
