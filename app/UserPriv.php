<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserPriv extends Model
{
  public function group()
  {
    return $this->belongsTo('App\UserGroup');
  }
}
