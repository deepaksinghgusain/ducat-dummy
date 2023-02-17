<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactUsQuery extends Model
{
    public $table = "contact_us_queries";

    public $primaryKey = "id";

    public $timestamps = true;

    public $fillable = [
		  "name",
            "email",
            "contactNumber",
            "subject",
            "branch",
            "message",
            "course"

    ];

    public static $rules = [
        // create rules
    ];

    // ContactUsQuery 
}
