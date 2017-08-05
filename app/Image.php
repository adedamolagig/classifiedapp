<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $table = 'hotels_images';
    
    protected $fillable = ['path'];
    
    public function hotel()
    {
        return $this->belongsTo('App\Hotel');
    }
}
