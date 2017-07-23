<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AssetAnnex extends Model
{
  protected $fillable = [
    'asset_contract_id',
    'unit_price',
    'ownership_percentage',
    'amount',
    'start_date',
    'end_date',
    'notes'
  ];

    public function assetContract()
    {
      return $this->belongsTo('App\AssetContract');
    }
}
