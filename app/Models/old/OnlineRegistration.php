<?php
namespace App\Models\old;

use Illuminate\Database\Eloquent\Model;

class OnlineRegistration extends Model
{
    protected $fillable=[ "fullName",
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
            "transaction_no"];
}
