<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StudentPlacement extends Model
{
    public $table = "student_placements";

    public $primaryKey = "id";

    public $timestamps = true;

    public $fillable = [
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

    public static $rules = [
        // create rules
        "firstName"=>"required"
    ];

    // StudentPlacement 
    
    public function getNameAttribute(){
        return $this->firstName." ".$this->lastName;
    }
}
