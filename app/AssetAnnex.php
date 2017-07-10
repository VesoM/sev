<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AssetAnnex extends Model
{
    //
    public function assetContract()
    {
      return $this->belongsTo('App\AssetContract');
    }
}
