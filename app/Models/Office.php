<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Office extends Model
{
    use HasFactory;

    protected $fillable = [
        'agency_id',
        'seller_id',
    ];

    public function sellers()
    {
        return $this->hasMany(Seller::class);
    }

    public function agency()
    {
        return $this->belongsTo(Agency::class);
    }
    
}
