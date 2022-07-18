<?php

namespace App\Models;
/**
 * App\Models\Route
 *
 * @property int $id
 * @property string $routeid
 * @property string $routename
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Shape[] $shapes
 * @property-read int|null $shapes_count
 * @method static \Illuminate\Database\Eloquent\Builder|Route newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Route newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Route query()
 * @method static \Illuminate\Database\Eloquent\Builder|Route whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Route whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Route whereRouteid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Route whereRoutename($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Route whereUpdatedAt($value)
 */

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Route extends Model
{
    use HasFactory;

    public $incrementing = false;
    protected $primaryKey = 'routeid';

    public function shapes()
    {
        return $this->hasMany(Shape::class, 'route_id');
    }
}
