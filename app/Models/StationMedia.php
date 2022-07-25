<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StationMedia extends Model
{
    protected $table = 'stationmedia';
    use HasFactory;

    public function station()
    {
        return $this->belongsTo('App\Models\Station');
    }
}
