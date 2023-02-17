<?php

namespace App\Models\old;

use Illuminate\Database\Eloquent\Model;

class ContactUsQuery extends Model
{
    protected $fillable=[
    		"name",
            "email",
            "contactNumber",
            "subject",
            "branch",
            "message",
            "course"
    ];
}
