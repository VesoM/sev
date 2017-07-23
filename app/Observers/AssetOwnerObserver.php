<?php

namespace App\Observers;

use App\AssetOwner;

class AssetOwnerObserver
{
    /**
     * Listen to the User created event.
     *
     * @param  User  $user
     * @return void
     */
    public function created(AssetOwner $ao)
    {
    //
    }

    /**
     * Listen to the User deleting event.
     *
     * @param  User  $user
     * @return void
     */
    public function deleting(AssetOwner $ao)
    {
    //
    }
}
