<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    const ADMIN = 1;
    const PREMIUM = 2;
    const PLUS = 3;
    const BASIS = 4;
    const HOMESEEKER = 5;
}
