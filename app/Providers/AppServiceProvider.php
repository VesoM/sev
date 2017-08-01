<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\User;
use App\AssetGroup;
use App\AssetOwner;
use App\Asset;
use App\Observers\UserObserver;
use App\Observers\AssetGroupObserver;
use App\Observers\AssetOwnerObserver;
use App\Observers\AssetObserver;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        User::observe(UserObserver::class);
        AssetGroup::observe(AssetGroupObserver::class);
        AssetOwner::observe(AssetOwnerObserver::class);
        Asset::observe(AssetObserver::class);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
