<?php

namespace App;

use Auth;
use App\Scopes\UserGroupScope;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AssetGroup extends Model
{
  use SoftDeletes;
  protected $fillable = [
    'name',   // Ponuditi kao SEV + address + number
    'address',
    'number',
    'municipality',
    'bank_account',
    'tax_number',
    'superintendent',
    'contact_tel',
    'contact_mail',
    'contact_address',
    'founding_date',
    'first_bill_date' // Mozda koristiti kod kreiranja prvog obracuna ?
  ];

  protected $dates = ['created_at','updated_at','deleted_at'];

    public function userGroup()
    {
      return $this->belongsTo('App\UserGroup');
    }
    public function assets()
    {
      return $this->hasMany('App\Asset');
    }

    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope(new UserGroupScope);
    }
/*
    public function scopeViewableAGs($query)
    {
      return $query->where('user_group_id', Auth::user()->group);
    }
*/
}
