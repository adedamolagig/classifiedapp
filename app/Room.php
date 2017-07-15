<?php

namespace App;


//use Illuminate\Database\Eloquent\Model;

class Room extends Hotel
{
   protected $fillable = [
       
       'room_name', 'room_capacity', 'room_description', 'room_has_toilet', 'hotel_id'
       
       ];
    public function hotel()
    {
        return $this->belongsTo(Hotel::class);
    }
}
