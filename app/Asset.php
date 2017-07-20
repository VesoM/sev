<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Asset extends Model
{
  protected $fillable = [
    'name',
    'size',
    'type',
    'cadastre_number',
    'status',
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
