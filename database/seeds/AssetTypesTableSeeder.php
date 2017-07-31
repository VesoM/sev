<?php

use Illuminate\Database\Seeder;

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
         	'name' => 'Stan'),
        array(
          'id' => 2,
         	'name' => 'Poslovni prostor'),
        array(
          'id' => 3,
         	'name' => 'Garaža'),
        array(
            'id' => 4,
           	'name' => 'Renta'),
          array(
            'id' => 5,
           	'name' => 'Ostalo')
          ));
    }
}
