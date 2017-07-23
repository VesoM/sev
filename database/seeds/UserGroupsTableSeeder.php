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
          'name' => 'SEV Ulaz 1',
          'tax_number' => null,
          'address' => null,
          'email' => null,
          'telephone' => null,
          'status' => 'A',
          'notes' => null,
          'created_at' => Carbon::now()),
        array(
          'id' => 2,
          'name' => 'ArtGloria',
          'tax_number' => '456',
          'address' => 'Iza delte',
          'email' => 'artgloria@gmail.com',
          'telephone' => '+382000000',
          'status' => 'A',
          'notes' => null,
          'created_at' => Carbon::now()),
        array(
          'id' => 3,
          'name' => 'Sev Dr Vukasina Markovica',
          'tax_number' => '4561',
          'address' => 'dr Vukasina Markovica 50',
          'email' => 'milic.dubak@gmail.com',
          'telephone' => '+382000000',
          'status' => 'A',
          'notes' => null,
          'created_at' => Carbon::now())
      ));
    }
}
