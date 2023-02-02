<?php

namespace App\Policies;

use App\Models\Good;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Auth\Access\Response;

class GoodPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  User  $user
     * @return Response|bool
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  User  $user
     * @param  Good  $good
     * @return Response|bool
     */
    public function view(User $user, Good $good)
    {
        //
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  User  $user
     * @return Response|bool
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  User  $user
     * @param  Good  $good
     * @return Response|bool
     */
    public function update(User $user, Good $good)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  User  $user
     * @param  Good  $good
     * @return Response|bool
     */
    public function delete(User $user, Good $good)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  User  $user
     * @param  Good  $good
     * @return Response|bool
     */
    public function restore(User $user, Good $good)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  User  $user
     * @param  Good  $good
     * @return Response|bool
     */
    public function forceDelete(User $user, Good $good)
    {
        //
    }
}
