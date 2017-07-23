<?php

namespace App;

use App\Scopes\UserGroupScope;
use Illuminate\Database\Eloquent\Model;

class AssetOwner extends Model
{
  protected $fillable = [
    'name',
    'address1',
    'address2',
    'email',
    'telephone',
    'identification_number',
    'notes'
  ];

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
