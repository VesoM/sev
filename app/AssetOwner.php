<?php

namespace App;

use App\Scopes\UserGroupScope;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AssetOwner extends Model
{
  use SoftDeletes;
  protected $fillable = [
    'name',
    'address1',
    'address2',
    'email',
    'telephone',
    'identification_number',
    'notes'
  ];

  protected $dates = ['created_at','updated_at','deleted_at'];

  public function userGroup()
  {
    return $this->belongsTo('App\UserGroup');
  }

  protected static function boot()
  {
    parent::boot();

    static::addGlobalScope(new UserGroupScope);
  }
}
