<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon; // dodao sam ovo da bi now() radio

class AssetGroupsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      //insert some dummy records
      DB::table('asset_groups')->insert(array(
        array(
          'id' => 1,
          'user_group_id'=> 1,
          'name' => 'Brankov Ulaz',
          'address' => 'Stari Aerodrom',
          'number' => '66',
          'municipality' => 'Podgorica',
          'bank_account' => '510-1-11',
          'tax_number' => '1234',
          'superintendent' => 'Branko Babic',
          'contact_tel' => '067-800-134',
          'contact_mail' => 'brondby@gmail.com',
          'contact_address' => 'Zlatica bb',
          'founding_date' => carbon::createFromFormat('d/m/Y', '11/06/2014'),
          'first_bill_date' => null,
          'created_at' => Carbon::now()),
        array(
          'id' => 2,
          'user_group_id'=> 1,
          'name' => 'Vesov Ulaz',
          'address' => 'Mose Pijade',
          'number' => 'bb',
          'municipality' => 'Podgorica',
          'bank_account' => '510-2-22',
          'tax_number' => '345',
          'superintendent' => 'Vaso Manojlovic',
          'contact_tel' => '067-522-530',
          'contact_mail' => 'vaso@gmail.com',
          'contact_address' => 'Duklja bb',
          'founding_date' => null,
          'first_bill_date' => null,
          'created_at' => Carbon::now()),
        array(
          'id' => 3,
          'user_group_id'=> 1,
          'name' => 'Micin Ulaz',
          'address' => 'Dr Vukasina Markovica',
          'number' => '50',
          'municipality' => 'Podgorica',
          'bank_account' => '510-3-33',
          'tax_number' => '01234',
          'superintendent' => 'Milic Dubak',
          'contact_tel' => '068-017-075',
          'contact_mail' => 'milic.dubak@gmail.com',
          'contact_address' => 'Tolosi bb',
          'founding_date' => null,
          'first_bill_date' => null,
          'created_at' => Carbon::now())
        )
      );
    }
}
