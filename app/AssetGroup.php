<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AssetGroup extends Model
{
    public function userGroup()
    {
      return $this->belongsTo('App\userGroup');
    }
    public function assets()
    {
      return $this->hasMany('App\Asset');
    }
}
