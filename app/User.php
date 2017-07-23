<?php

namespace App;

use App\UserPriv;
use App\UserGroup;
use Laravel\Passport\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function userPriv()
    {
      return $this->hasOne('App\UserPriv');
    }


    public function userGroup()
    {
      //return $this->hasManyThrough(UserGroup::class, UserPriv::class);
      return $this->userPriv->belongsTo('App\UserGroup');
    }

}
