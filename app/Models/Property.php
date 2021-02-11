<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Property extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded = [];

    const PUBLISHED = 1;
    const PENDING = 2;
    const REJECTED = 3;

    public function getRouteKeyName()
    {
        return 'slug';
    }

    protected $fillable = [
        'category_id',
        'type_id',
        'image',
        'currency',
        'price',
        'address',
        'town',
        'tips',
        'description',
        'full_description',
        'link',
        'features',
        'rooms',
        'services',
        'expenses',
        'alt_text',
        'slug',
    ];

    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Property::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
        ];
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function type()
    {
        return $this->belongsTo(Type::class);
    }

    public function features()
    {
        return $this->hasMany(Feature::class);
    }

    public function rooms()
    {
        return $this->belongsToMany(Room::class);
    }

    public function services()
    {
        return $this->hasMany(Service::class);
    }

    public function currency()
    {
        return $this->belongsTo(Currency::class);
    }

    public function scopeAddress($query, $address)
    {
        if ($address)   return $query->orWhere('address', 'LIKE', "%$address%");
    }

    public function scopeCategory($query, $category)
    {
        if ($category)   return $query->orWhere('category_id', 'LIKE', "%$category%");
    }

    public function scopeEnvironment($query, $environment_min, $environment_max)
    {
        if ($environment_min || $environment_max) {
            if ($environment_min && $environment_max) return $query->whereBetween('environment', [$environment_min, $environment_max]);
            elseif ($environment_min) return $query->where('environment', '>=', $environment_min);
            elseif ($environment_max) return $query->where('environment', '<=', $environment_max);
        }
    }

    public function scopeRoom($query, $room_min, $room_max)
    {
        if ($room_min || $room_max) {
            if ($room_min && $room_max) return $query->whereBetween('room', [$room_min, $room_max]);
            elseif ($room_min) return $query->where('room', '>=', $room_min);
            elseif ($room_max) return $query->where('room', '<=', $room_max);
        }
    }

    public function scopePrice($query, $minimum_price, $maximum_price)
    {
        if ($minimum_price || $maximum_price) {
            if ($minimum_price && $maximum_price) return $query->whereBetween('price', ["$minimum_price", "$maximum_price"]);
            elseif ($minimum_price) return $query->where('price', '>=', "$minimum_price");
            elseif ($maximum_price) return $query->where('price', '<=', "$maximum_price");
        }
    }

    public function photos()
    {
        return $this->hasMany(Photo::class);
    }
}
