<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AssetContract extends Model
{
  use SoftDeletes;
  protected $fillable = [
    'asset_id',
    'asset_owner_id',
    'notes'
  ];

  protected $dates = ['created_at','updated_at','deleted_at'];

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
