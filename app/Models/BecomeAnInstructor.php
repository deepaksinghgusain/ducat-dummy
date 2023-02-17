<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BecomeAnInstructor extends Model
{
    public $table = "become_an_instructors";

    public $primaryKey = "id";

    public $timestamps = true;

    public $fillable = [
		'id',
"name",
		  "email" ,
		  "contactNumber",
		  "course" ,
		  "branch",
		  "jobType",
		  "aboutYourSelf" ,
		  "aboutTheCourse" ,
		  "linkedInProfile" 

    ];

    public static $rules = [
        // create rules
    ];

    // BecomeAnInstructor 
}
