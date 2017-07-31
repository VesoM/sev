<?php

namespace App\Observers;

use App\AssetGroup;
use Auth;

class AssetGroupObserver
{
    public function creating(AssetGroup $ag)
    {
      $ag->user_group_id = Auth::user()->userGroup->id;
    }
    /**
     * Listen to the AssetGroup created event.
     *
     * @param  AssetGroup  $ag
     * @return void
     */
    public function created(AssetGroup $ag)
    {
    //
    }

    /**
     * Listen to the AssetGroup deleting event.
     *
     * @param  AssetGroup  $ag
     * @return void
     */
    public function deleting(AssetGroup $ag)
    {
    //
    }
}
