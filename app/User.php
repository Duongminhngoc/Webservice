<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Models\Restaurant;

class User extends Authenticatable
{
    use Notifiable;
    
    protected $table = 'users';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_access_level_id', 'name', 'email', 'password', 'role', 'avatar', 'gender', 'phone', 'address',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function restaurants()
    {
        return $this->hasMany(Restaurant::class);
    }
}
