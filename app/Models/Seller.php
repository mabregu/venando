<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seller extends Model
{
    use HasFactory;

    protected $fillable = [
        //'office_id',
        'full_name',
        'email',
    ];

    public function offices()
    {
        return $this->belongsTo(Office::class);
    }

    public function agency()
    {
        return $this->belongsTo(Agency::class);
    }
    
}
