<?php

namespace App\Models;

 use Illuminate\Contracts\Auth\MustVerifyEmail;

class User extends Authenticatable
{
    use HasApiTokens, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    public $timestamps = false;

    public function products()
    {
        return $this ->hasMany(Product::class)
    }



    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
}
