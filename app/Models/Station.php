<?php

namespace App\Models;
/**
 * App\Models\Station
 *
 * @property int $id
 * @property string $stationid
 * @property string $stationname
 * @property string $lat
 * @property string $lon
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Station newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Station newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Station query()
 * @method static \Illuminate\Database\Eloquent\Builder|Station whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Station whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Station whereLat($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Station whereLon($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Station whereStationid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Station whereStationname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Station whereUpdatedAt($value)
 */

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Station extends Model
{
    use HasFactory;

    public function stationmedia()
    {
        return $this->hasMany('App\Models\StationMedia');
    }
}
