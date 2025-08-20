<?php

namespace Modules\User\Models;

use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory, Notifiable, HasApiTokens;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
        'name',
        'tel',
        'email',
        'password',
    ];

    protected $hidden = ['password', 'remember_token'];

    // protected static function newFactory(): UserFactory
    // {
    //     // return UserFactory::new();
    // }
}
