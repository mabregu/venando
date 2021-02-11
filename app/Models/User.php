<?php

namespace App\Models;

use Laravel\Cashier\Billable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory, Notifiable, Billable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'surname',
        'email',
        'password',
        'display_name',
        'phone',
        'role_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'role',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public static function navigation()
    {
        return auth()->check() ? auth()->user()->role->name : 'guest';
    }

    public function pathAttachment()
    {
        return "/images/users/" . $this->picture;
    }


    public function favorites()
    {
        return $this->belongsToMany(Property::class);
    }

    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    public function socialAccount()
    {
        return $this->hasOne(UserSocialAccount::class);
    }
    
    public function wishes()
    {
        return $this->hasMany(UsersWishlists::class);
    }
}
