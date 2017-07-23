<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AssetContract extends Model
{
  protected $fillable = [
    'asset_id',
    'asset_owner_id',
    'notes'
  ];

    //
    public function asset()
    {
      return $this->belongsTo('App\Asset');
    }
    public function assetOwner()
    {
      return $this->belongsTo('App\AssetOwner');
    }
    public function assetAnnexes()
    {
      return $this->hasMany('App\AssetAnnex');
    }
}
