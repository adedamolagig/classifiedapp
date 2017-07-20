<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    protected $fillable = [
         
        'amount',
        'room_id'
       // 'available_at', 
        //'endAvailability_at' 
        ];

    public function room(){
        $this->hasOne('App\Room');
    }
}
