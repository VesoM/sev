<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Asset extends Model
{
    //
    public function assetGroup()
    {
      return $this->belongsTo('App\AssetGroup');
    }

    public function assetContracts()
    {
      return $this->hasMany('App\AssetContract');
    }
}
