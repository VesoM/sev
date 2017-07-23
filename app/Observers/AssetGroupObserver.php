<?php

namespace App\Observers;

use App\AssetGroup;

class AssetGroupObserver
{
    /**
     * Listen to the User created event.
     *
     * @param  User  $user
     * @return void
     */
    public function created(AssetGroup $ag)
    {
    //
    }

    /**
     * Listen to the User deleting event.
     *
     * @param  User  $user
     * @return void
     */
    public function deleting(AssetGroup $ag)
    {
    //
    }
}
