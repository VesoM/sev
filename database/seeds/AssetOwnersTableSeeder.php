<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon; // dodao sam ovo da bi now() radio

class AssetOwnersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      //delete users table records
      DB::table('asset_owners')->delete();
      //insert some dummy records
      DB::table('asset_owners')->insert(array(
        array(
          'id' => 1,
          'user_group_id'=> 1,
         	'name' => 'Zdravko Ivanovic',
          'address1' => 'doljani bb',
          'address2' => '',
          'email' => 'mail@gmail.com',
          'telephone' => '067 067 067',
          'Status' => 'A',
          'identification_number' => '123456',
          'notes' => '',
          'created_at' => Carbon::now()),
        array(
          'id' => 2,
          'user_group_id'=> 1,
          'name' => 'Milan Labudovic',
          'address1' => 'Ruske kule 66',
          'address2' => '',
          'email' => 'milan@gmail.com',
          'telephone' => '068 068 068',
          'Status' => 'A',
          'identification_number' => '123456',
          'notes' => '',
          'created_at' => Carbon::now()),
        array(
          'id' => 3,
          'user_group_id'=> 1,
          'name' => 'Milic Dubak',
          'address1' => 'Tolosi bb',
          'address2' => '',
          'email' => 'mikeli@gmail.com',
          'telephone' => '067 067 067',
          'Status' => 'A',
          'identification_number' => '12345688',
          'notes' => '',
          'created_at' => Carbon::now()),
        array(
          'id' => 4,
          'user_group_id'=> 1,
          'name' => 'Veselin Man',
          'address1' => 'Rogami 777',
          'address2' => 'Ivana Crnojevica',
          'email' => 'vesko@gmail.com',
          'telephone' => '067 068 069',
          'Status' => 'A',
          'identification_number' => '777',
          'notes' => '',
          'created_at' => Carbon::now())
        ));
    }
}
