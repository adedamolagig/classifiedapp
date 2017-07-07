<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $fillable = [
            'room_name',
            'room_capacity',
            'room_description',
            'room_has_toilet'
    ];
}
