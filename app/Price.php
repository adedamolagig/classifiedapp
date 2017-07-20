<?php

namespace App;

//use Illuminate\Database\Eloquent\Model;

class Price extends Room
{
    protected $fillable = [
         
        'amount',
        'room_id'
       // 'available_at', 
        //'endAvailability_at' 
        ];
}
