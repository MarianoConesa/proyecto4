<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{

    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'localizacion',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Devolver el sanitario asociado.
     */
    public function sanitarian()
    {
        return $this->hasOne(Sanitarian::class, 'user_id');
    }

    /**
     * Devolver el customer asociado.
     */
    public function customer()
    {
        return $this->hasOne(Customer::class, 'user_id');
    }

    /**
     * Los roles que tiene asignados un determinado usuario.
     */
    public function roles()
    {
        return $this->belongsToMany(Role::class, 'role_user', 'user_id', 'role_id');
    }

    public function isAdmin()
    {
        $roles = $this->roles;
        $isAdmin = false;

        foreach($roles as $role){
            if($role->name == 'Admin'){
                $isAdmin = true;
            }
        }
        return $isAdmin;
    }

}

