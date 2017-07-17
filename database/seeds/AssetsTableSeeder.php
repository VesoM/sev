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
          'asset_type_id'=> 1,
         	'name' => 'Stan broj 1',
          'size' => 50,
          'cadastre_number' => '11',
          'status' => 'A',
          'agg_bill_visible' => 'Y',
          'notes' => '',
          'created_at' => Carbon::now()),
        array(
          'id' => 2,
          'asset_group_id'=> 1,
          'asset_type_id'=> 1,
         	'name' => 'Stan broj 2',
          'size' => 60,
          'cadastre_number' => '22',
          'status' => 'A',
          'agg_bill_visible' => 'Y',
          'notes' => '',
          'created_at' => Carbon::now()),
        array(
          'id' => 3,
          'asset_group_id'=> 1,
          'asset_type_id'=> 1,
         	'name' => 'Stan broj 3',
          'size' => 40,
          'cadastre_number' => '33',
          'status' => 'A',
          'agg_bill_visible' => 'Y',
          'notes' => '',
          'created_at' => Carbon::now()),
        array(
            'id' => 4,
            'asset_group_id'=> 2,
            'asset_type_id'=> 1,
           	'name' => 'Stan broj 1',
            'size' => 51,
            'cadastre_number' => '11',
            'status' => 'A',
            'agg_bill_visible' => 'Y',
            'notes' => '',
            'created_at' => Carbon::now()),
          array(
            'id' => 5,
            'asset_group_id'=> 2,
            'asset_type_id'=> 1,
           	'name' => 'Stan broj 2',
            'size' => 55,
            'cadastre_number' => '22',
            'status' => 'A',
            'agg_bill_visible' => 'Y',
            'notes' => '',
            'created_at' => Carbon::now()),
          array(
            'id' => 6,
            'asset_group_id'=> 2,
            'asset_type_id'=> 2,
           	'name' => 'Frizerski salon - Lepi Šaja',
            'size' => 100,
            'cadastre_number' => '33',
            'status' => 'A',
            'agg_bill_visible' => 'Y',
            'notes' => '',
            'created_at' => Carbon::now()),
          array(
            'id' => 7,
            'asset_group_id'=> 2,
            'asset_type_id'=> 3,
            'name' => 'Reklamni natpis Telekoma',
            'size' => null,
            'cadastre_number' => '33',
            'status' => 'A',
            'agg_bill_visible' => 'Y',
            'notes' => '',
            'created_at' => Carbon::now())
          ));
    }
}
