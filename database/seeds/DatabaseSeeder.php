<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $this->call(UserGroupsTableSeeder::class);
      $this->call(AssetTypesTableSeeder::class);
  		$this->call(AssetGroupsTableSeeder::class);
      $this->call(AssetsTableSeeder::class);
      $this->call(AssetOwnersTableSeeder::class);
        // $this->call(UsersTableSeeder::class);
    }
}
