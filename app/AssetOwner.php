<?php

namespace App;

use App\Scopes\UserGroupScope;
use Illuminate\Database\Eloquent\Model;

class AssetOwner extends Model
{
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
