<?php

namespace App\Observers;

use App\Asset;

class AssetObserver
{
    /**
     * Listen to the User created event.
     *
     * @param  User  $user
     * @return void
     */
    public function created(Asset $a)
    {
    //
    }

    /**
     * Listen to the User deleting event.
     *
     * @param  User  $user
     * @return void
     */
    public function deleting(Asset $a)
    {
    //Provjeriti da li postoji dug za stan
    //return false;
    }
}
