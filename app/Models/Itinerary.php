<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Itinerary
 *
 * @property int $id
 * @property string $title
 * @property string $gen_narrative
 * @property string $f_photo
 * @property string $authorid
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Itinerary newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Itinerary newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Itinerary query()
 * @method static \Illuminate\Database\Eloquent\Builder|Itinerary whereAuthorid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Itinerary whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Itinerary whereFPhoto($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Itinerary whereGenNarrative($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Itinerary whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Itinerary whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Itinerary whereUpdatedAt($value)
 */
class Itinerary extends Model
{
    use HasFactory;

    public function stops()
    {
        return $this->hasMany('App\Models\Stop');
    }


}
