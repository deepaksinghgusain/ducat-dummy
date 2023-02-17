<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EventPaytmRegistration extends Model
{
    //
    protected $table = 'event_paytm_registration';


    protected $fillable = ['name','mobile_no','address','status','fee','order_id','transaction_id'];


    /* 
		status : 0 => progress, 1 => Fail, 2 => Successful
    */
}
