<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AssetGroup extends Model
{
  protected $fillable = [
    'name',   // Ponuditi kao SEV + address + number
    'address',
    'number',
    'municipality',
    'bank_account',
    'tax_number',
    'superintendent',
    'contact_tel',
    'contact_mail',
    'contact_address',
    'founding_date',
    'first_bill_date' // Mozda koristiti kod kreiranja prvog obracuna ?
  ];
    public function userGroup()
    {
      return $this->belongsTo('App\userGroup');
    }
    public function assets()
    {
      return $this->hasMany('App\Asset');
    }
}
