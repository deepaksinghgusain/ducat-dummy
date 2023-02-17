<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OnlineRegistration extends Model
{
    public $table = "online_registrations";

    public $primaryKey = "id";

    public $timestamps = true;

    protected $fillable=[ 
    	"fullName",
            "email",
            "contactNumber",
            "address",
            "city",
            "country",
            "zipcode",
            "course",
            "branch",
            "amount",
         	 "status",
            "invoice_no",
            "transaction_no",
            "order_id",
            "state"
        ];

    public static $rules = [
        // create rules
    ];

    // OnlineRegistration 
    public function getNameAttribute(){
        return $this->fullName;
    }
}
