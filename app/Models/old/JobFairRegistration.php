<?php

namespace App\Models\old;

use Illuminate\Database\Eloquent\Model;

class JobFairRegistration extends Model
{
    protected $fillable=[
     		"name",
            "email",
            "contactNumber",
            "tenthPer",
            "twelvthPer",
            "graduationPer",
            "qualification",
            "passoutYear",
            "course",
            "experience",
            "ducatID"
        ];
}
