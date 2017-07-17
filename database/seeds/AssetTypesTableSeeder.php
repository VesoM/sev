<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon; // dodao sam ovo da bi now() radio

class AssetTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('asset_types')->insert(array(
        array(
          'id' => 1,
         	'name' => 'Stan',
          'created_at' => Carbon::now()),
        array(
          'id' => 2,
         	'name' => 'Poslovni prostor',
          'created_at' => Carbon::now()),
        array(
          'id' => 3,
         	'name' => 'Garaža',
          'created_at' => Carbon::now()),
        array(
            'id' => 4,
           	'name' => 'Renta',
            'created_at' => Carbon::now()),
          array(
            'id' => 5,
           	'name' => 'Ostalo',
            'created_at' => Carbon::now())
          ));
    }
}
