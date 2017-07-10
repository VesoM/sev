<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon; // dodao sam ovo da bi now() radio

class UserGroupsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      //insert some dummy records
      DB::table('user_groups')->insert(array(
        array(
          'id' => 1,
          'name' => 'ArtGloria',
          'address' => 'Iza delte',
          'email' => 'artgloria@gmail.com',
          'telephone' => '+382000000',
          'status' => 'A',
          'notes' => null,
          'created_at' => Carbon::now())
      ));
    }
}
