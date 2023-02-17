<?php

namespace App\Models\old;

use Illuminate\Database\Eloquent\Model;

class CertificationRequest extends Model
{
    protected $fillable=[

            "fullName",
            "ducatID",
            "email",
            "contactNumber",
            "course",
            "fromDate",
            "toDate"
    ];
}
