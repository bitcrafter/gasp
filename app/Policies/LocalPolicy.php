<?php

namespace App\Policies;

use App\User;
use App\Local;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Support\Facades\Log;

class LocalPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the local.
     *
     * @param  \App\User  $user
     * @param  \App\Local  $local
     * @return mixed
     */
    public function view(User $user, Local $local)
    {
        return false;
    }

    /**
     * Determine whether the user can create associados.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return false;
    }

    /**
     * Determine whether the user can update the local.
     *
     * @param  \App\User  $user
     * @param  \App\Local  $local
     * @return mixed
     */
    public function update(User $user, Local $local)
    {
        return false;
    }

    /**
     * Determine whether the user can delete the local.
     *
     * @param  \App\User  $user
     * @param  \App\Local  $local
     * @return mixed
     */
    public function delete(User $user, Local $local)
    {
        return false;
    }

    public function before($user, $ability)
    {
        Log::info('user: ' . $user->email . ' super_admin: ' . $user->super_admin);
        if ($user->super_admin == 1) {
            return true;
        }
        return false;
    }
}
//