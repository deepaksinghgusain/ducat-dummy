<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JobFairRegistration extends Model
{
    public $table = "job_fair_registrations";

    public $primaryKey = "id";

    public $timestamps = true;

    public $fillable = [
		'id',
		'name',
		'email',
		'contactNumber',
		'course',
		'tenthPer',
		'twelvthPer',
		'graduationPer',
		'qualification',
		'passoutYear',
		'experience',
		'ducatID',

    ];

    public static $rules = [
        // create rules
    ];

    // JobFairRegistration 
}
