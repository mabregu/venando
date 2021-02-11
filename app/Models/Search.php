<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
// use Illuminate\Database\Eloquent\Factories\HasFactory;

class Property extends Model
{
    // use HasFactory;
    use SoftDeletes;

    protected $guarded = [];

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
        return $this->hasMany(Room::class);
    }

    public function services()
    {
        return $this->hasMany(Service::class);
    }

    public function gallery()
    {
        return $this->hasOne(Gallery::class);
    }

    public function currency()
    {
        return $this->belongsTo(Currency::class);
    }
}
