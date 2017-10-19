<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    protected $fillable = ['hotelname', 'state', 'phonenumber', 'user_id', 'description'];
    
    public function rooms()
    {
        return $this->hasMany('App\Room');
    }
    
     public function user()
    {
        return $this->belongsTo('App\User');
    }
    
    public function addroom($room_name)
    {

        $this->rooms()->create(compact('room_name'));
    }
    
    /**
     * A Hotel is composed of many images.
     * 
     * @return eloquent HasMany relationship
     */
    public function images()
    {
        return $this->hasMany('App\Image');
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