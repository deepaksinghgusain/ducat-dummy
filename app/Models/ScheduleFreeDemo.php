<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ScheduleFreeDemo extends Model
{
    public $table = "schedule_free_demos";

    public $primaryKey = "id";

    public $timestamps = true;

    public $fillable = [
		'id',
		"fullName",
            
            "email",
            "contactNumber",
            "ducat_student_id",
            "preferred_time_slot"

    ];

    public static $rules = [
        // create rules
        "firstName"=>"required",
    ];

    // ScheduleFreeDemo 

    public function getNameAttribute(){
        return $this->firstName." ".$this->lastName;
    }
}
