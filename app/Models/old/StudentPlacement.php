<?php

namespace App\Models\old;

use Illuminate\Database\Eloquent\Model;

class StudentPlacement extends Model
{
    protected $fillable=[

            "firstName",
            "lastName",
            "email",
            "contactNumber",
            "ducatID",
            "branch",
            "trainerName",
            "course",
            "completeYear",
            "completeMonth",
            "college",
            "qualification",
            "tenthPer",
            "twelvthPer",
            "graduationPer",
            "postGraduationPer",
            "passoutYear",
            "isAbove60Per"
            
    ];
}
