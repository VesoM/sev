<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AssetAnnex extends Model
{
  use SoftDeletes;
  protected $fillable = [
    'asset_contract_id',
    'unit_price',
    'ownership_percentage',
    'amount',
    'start_date',
    'end_date',
    'notes'
  ];

  protected $dates = ['created_at','updated_at','deleted_at'];

    public function assetContract()
    {
      return $this->belongsTo('App\AssetContract');
    }
}
