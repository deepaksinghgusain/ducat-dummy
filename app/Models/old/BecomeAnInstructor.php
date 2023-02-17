<?php

namespace App\Models\old;

use Illuminate\Database\Eloquent\Model;

class BecomeAnInstructor extends Model
{
    protected $fillable=[
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
}
