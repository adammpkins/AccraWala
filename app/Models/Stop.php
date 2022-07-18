<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stop extends Model
{
    use HasFactory;

    public function itinerary()
    {
        return $this->belongsTo('App\Models\Itinerary');
    }

    public function station()
    {
        return $this->hasOne('App\Models\Station', 'id', 'station_id');
    }
}
