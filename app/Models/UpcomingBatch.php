<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UpcomingBatch extends Model
{
    public $table = "upcoming_batches";

    public $primaryKey = "id";

    public $timestamps = true;

    public $fillable = [
		'id',
		'course',
		'startDate',
		'startTime',
		'branch',
		'trainer',

    ];

    public static $rules = [
        // create rules
    ];

    // UpcomingBatch 
}
