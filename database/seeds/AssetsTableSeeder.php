<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon; // dodao sam ovo da bi now() radio

class AssetsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      //delete users table records
      //DB::table('assets')->delete();
      //insert some dummy records
      DB::table('assets')->insert(array(
        array(
          'id' => 1,
          'asset_group_id'=> 1,
         	'name' => 'Stan broj 1',
          'type' => 'Stan',
          'cadastre_number' => '11',
          'status' => 'A',
          'agg_bill_visible' => 'Y',
          'notes' => '',
          'created_at' => Carbon::now()),
        array(
          'id' => 2,
          'asset_group_id'=> 1,
         	'name' => 'Stan broj 2',
          'type' => 'Stan',
          'cadastre_number' => '22',
          'status' => 'A',
          'agg_bill_visible' => 'Y',
          'notes' => '',
          'created_at' => Carbon::now()),
        array(
          'id' => 3,
          'asset_group_id'=> 1,
         	'name' => 'Stan broj 3',
          'type' => 'Stan',
          'cadastre_number' => '33',
          'status' => 'A',
          'agg_bill_visible' => 'Y',
          'notes' => '',
          'created_at' => Carbon::now()),
        array(
            'id' => 4,
            'asset_group_id'=> 2,
           	'name' => 'Stan broj 1',
            'type' => 'Stan',
            'cadastre_number' => '11',
            'status' => 'A',
            'agg_bill_visible' => 'Y',
            'notes' => '',
            'created_at' => Carbon::now()),
          array(
            'id' => 5,
            'asset_group_id'=> 2,
           	'name' => 'Stan broj 2',
            'type' => 'Stan',
            'cadastre_number' => '22',
            'status' => 'A',
            'agg_bill_visible' => 'Y',
            'notes' => '',
            'created_at' => Carbon::now()),
          array(
            'id' => 6,
            'asset_group_id'=> 2,
           	'name' => 'Frizerski salon - Lepi Šaja',
            'type' => 'Poslovni Prostor',
            'cadastre_number' => '33',
            'status' => 'A',
            'agg_bill_visible' => 'Y',
            'notes' => '',
            'created_at' => Carbon::now()),
          array(
            'id' => 7,
            'asset_group_id'=> 2,
            'name' => 'Reklamni natpis Telekoma',
            'type' => 'Renta',
            'cadastre_number' => '33',
            'status' => 'A',
            'agg_bill_visible' => 'Y',
            'notes' => '',
            'created_at' => Carbon::now())
          ));
    }
}
