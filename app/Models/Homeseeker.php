<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Homeseeker extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'surname',
        'email',
        'password',
        'telephone',
        'newsletter',
        'conditions'
    ];
}
