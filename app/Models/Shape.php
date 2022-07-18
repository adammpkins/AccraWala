<?php

namespace App\Models;
/**
 * App\Models\Shape
 *
 * @property int $id
 * @property string $shapesequence
 * @property string $shapeid
 * @property string $lat
 * @property string $lng
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $route_id
 * @method static \Illuminate\Database\Eloquent\Builder|Shape newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Shape newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Shape query()
 * @method static \Illuminate\Database\Eloquent\Builder|Shape whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Shape whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Shape whereLat($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Shape whereLng($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Shape whereRouteId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Shape whereShapeid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Shape whereShapesequence($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Shape whereUpdatedAt($value)
 */

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shape extends Model
{
    use HasFactory;

    public function routes()
    {
    }
}
