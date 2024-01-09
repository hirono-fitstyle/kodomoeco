<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail as MustVerifyEmailContract;
use Illuminate\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Account extends Authenticatable implements MustVerifyEmailContract
{
    use HasApiTokens, HasFactory, MustVerifyEmail, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'operator_number',
        'verify_token',
        'verify_expired_at',
        'email_verified_at',
        'is_reset_password',
        'password',
        'password_reset_token',
        'password_reset_expired_at',
        'password_reset_verified_at',
        'last_name',
        'first_name',
        'email',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'verify_expired_at' => 'datetime',
        'email_verified_at' => 'datetime',
        'password_reset_expired_at' => 'datetime',
        'password_reset_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
}
