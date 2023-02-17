<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HomeEnquiry extends Model
{
    protected $fillable=[
    		"name",
            "contactNumber",
            "course",
            "branch",
            'email'
    ];
     public static $rules = [
        // create rules
        'name'=>"required"
    ];
    public static $updaterules = [
        // create rules
        'name'=>"required"

    ];
}
