<?php

namespace App\Observers;

use App\User;
use App\UserPriv;

class UserObserver
{
    /**
     * Listen to the User created event.
     *
     * @param  User  $user
     * @return void
     */
    public function created(User $user)
    {
      $priv=new UserPriv;
      $priv->user_id=$user->id;
      $priv->user_group_id=null;
      $priv->privilege=null;
      $priv->status='N';
      $priv->save();
    }

    /**
     * Listen to the User deleting event.
     *
     * @param  User  $user
     * @return void
     */
    public function deleting(User $user)
    {
        UserPriv::find($user->priv->id)->delete();
    }
}
