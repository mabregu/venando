<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agency extends Model
{
    use HasFactory;

    protected $fillable = [
        'role_id',
        'name',
        'email',
        'phone',
        'cvr',
    ];

    public function offices()
    {
        return $this->hasMany(Office::class);
    }

    public function sellers()
    {
        return $this->hasMany(Seller::class);
    }
    
}