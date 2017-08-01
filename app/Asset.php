<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Asset extends Model
{
  use SoftDeletes;
  protected $fillable = [
    //'asset_group_id',
    'asset_type_id',
    'name',
    'size',
    'type',
    'cadastre_number',
    'agg_bill_visible',
    'notes'
  ];

  protected $dates = ['created_at','updated_at','deleted_at'];

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
