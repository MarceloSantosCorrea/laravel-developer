<?php

namespace App\Observers;

use App\Models\User;

class UserObserver
{
    /**
     * Evento antes de criar um novo usuário
     * @param  User  $user
     */
    public function creating(User $user)
    {
        /**
         * Crypt Password
         */
        $user->password = \Hash::make($user->password);
    }

    public function updating(User $user)
    {
        if (\Hash::needsRehash($user->password)) {
            $user->password = \Hash::make($user->password);
        }
    }

    public function restoring(User $user)
    {
        $user->email = str_replace("_{$user->id}_deleted", '', $user->email);
    }
}
