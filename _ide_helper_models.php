<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
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
	class Itinerary extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Page
 *
 * @property int $id
 * @property string $title
 * @property string $slug
 * @property string $icon
 * @property string|null $body
 * @property string|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection|\Spatie\MediaLibrary\MediaCollections\Models\Media[] $media
 * @property-read int|null $media_count
 * @method static \Illuminate\Database\Eloquent\Builder|Page newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Page newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Page query()
 * @method static \Illuminate\Database\Eloquent\Builder|Page whereBody($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Page whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Page whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Page whereIcon($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Page whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Page whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Page whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Page whereUpdatedAt($value)
 */
	class Page extends \Eloquent implements \Spatie\MediaLibrary\HasMedia {}
}

namespace App\Models{
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
	class Route extends \Eloquent {}
}

namespace App\Models{
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
	class Shape extends \Eloquent {}
}

namespace App\Models{
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
	class Station extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Laravel\Sanctum\PersonalAccessToken[] $tokens
 * @property-read int|null $tokens_count
 * @method static \Database\Factories\UserFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

