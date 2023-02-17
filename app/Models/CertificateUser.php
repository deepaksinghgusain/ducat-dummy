<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CertificateUser extends Model
{
    public $table = "certification_users";

    public $primaryKey = "id";

    public $timestamps = true;

   protected $fillable=[
            "fullName",
            "ducatID",
            "facility",
            "contactNumber",
            "course",
            "fromDate",
            "toDate",
            "email",
            "branch",
            'certificate_no',
            'certificate_file',
            'certificate_image',
            'status'
    ];

  
    
}
