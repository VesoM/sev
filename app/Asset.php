<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Asset extends Model
{
  protected $fillable = [
    'asset_group_id',
    'name',
    'size',
    'type',
    'cadastre_number',
    'agg_bill_visible',
    'notes'
  ];

    public function assetGroup()
    {
      return $this->belongsTo('App\AssetGroup');
    }

    public function assetType()
    {
      return $this->belongsTo('App\AssetType');
    }

    public function assetContracts()
    {
      return $this->hasMany('App\AssetContract');
    }
}
