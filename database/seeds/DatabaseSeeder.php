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
      $this->call(AssetTypesTableSeeder::class);
      factory(App\UserGroup::class,10)->create();
      factory(App\User::class,100)->create()->each(function ($u) {
        $u->priv->user_group_id=App\UserGroup::all()->random()->id;
        $u->priv->privilege='RW';
        $u->priv->status='A';
        $u->priv->save();
      });

      // Authenticate //
      App\User::all()->each(function ($u) {
        Auth::login($u);
        factory(App\AssetOwner::class,10)->create(['user_group_id' => $u->priv->user_group_id]);
        factory(App\AssetGroup::class,4)->create(['user_group_id' => $u->priv->user_group_id])->each(function ($ag) {
          factory(App\Asset::class,20)->create(['asset_group_id' => $ag->id]);
        });
        factory(App\AssetContract::class,100)->create()->each(function ($ac){
          factory(App\AssetAnnex::class,2)->create(['asset_contract_id' => $ac->id]);
        });
        Auth::logout();
      });
    }
}
