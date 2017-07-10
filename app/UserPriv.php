<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserPriv extends Model
{
  public function user()
  {
    return $this->belongsTo('App\User');
  }
  public function userGroup()
  {
    return $this->belongsTo('App\UserGroup');
  }
}
