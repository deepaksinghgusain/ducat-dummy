<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CertificationRequest extends Model
{
    public $table = "certification_requests";

    public $primaryKey = "id";

    public $timestamps = true;

   protected $fillable=[
            "fullName",
            "ducatID",
            "email",
            "contactNumber",
            "course",
            "fromDate",
            "toDate"
    ];

    public static $rules = [
        // create rules
    ];

    // CertificationRequest 
     public function getNameAttribute(){
        return $this->fullName;
    }
}
