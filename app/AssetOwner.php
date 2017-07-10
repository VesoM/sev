<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AssetOwner extends Model
{
  public function userGroup()
  {
    return $this->belongsTo('App\UserGroup');
  }
}
