<?php

namespace App;

use App\UserGroup;
use Illuminate\Database\Eloquent\Model;

class UserPriv extends Model
{
  public function userGroup()
  {
    return $this->belongsTo('App\UserGroup');
  }
}
