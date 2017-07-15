<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    protected $fillable = ['hotelname', 'state', 'phonenumber'];
    
    public function rooms()
    {
        return $this->hasMany(Room::class);
    }
    
    public function addroom($room_name)
    {

        $this->rooms()->create(compact('room_name'));
    }
}



         /**Room::create([
            'room_name'=> 'required|min:5',
            'hotel_id'=>$this->id,
            'room_capacity'=> 'required|min:2',
            'room_description'=>'required',
            'room_has_toilet'=>'required|in:1,0'
        ]);*/
        
        /**compact([
            'room_name'=> 'required|min:5',
            'hotel_id'=>$this->id,
            'room_capacity'=> 'required|min:2',
            'room_description'=>'required',
            'room_has_toilet'=>'required|in:1,0'
            
            ]));*/