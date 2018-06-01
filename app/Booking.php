<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    //Table Name
    protected $table = 'bookings';

    public function user(){
        return $this->belongsTo('App\User');
    }
}
