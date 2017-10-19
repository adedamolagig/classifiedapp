<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Room extends Hotel
{
   protected $fillable = [
       
       'room_name', 'room_capacity', 'room_description', 'room_has_toilet', 'price', 'hotel_id',
       
       ];
    public function hotel()
    {
        return $this->belongsTo('App\Hotel');
    }
    
     public function user()
    {
        return $this->belongsTo('App\User');
    }
    
    public function price()
    {  
        return $this->hasOne('App\Price');
        
    }
}
