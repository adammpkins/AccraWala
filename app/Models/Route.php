<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Route extends Model
{
    use HasFactory;
    protected $primaryKey = 'routeid';
    public $incrementing = false;

    public function shapes()
    {
        return $this->hasMany(Shape::class,'route_id');
    }
}
