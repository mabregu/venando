<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsersWishlists extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'postal_codes',
        'price',
        'kvm',
        'building_age',
        'garden',
        'plan',
        'rooms',
        'toilets',
        'balcony',
        'garage',
        'cellar',
        'architect',
        'hobby_room',
        'terrace',
        'wood_stove',
        'ready_to_move',
        'other',
        'green_area',
        'institutions',
        'sports_facilities',
        'shopping',
        'transport',
        'beach',
        'priority_1',
        'priority_2',
        'priority_3',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
