<?php

namespace App\Policies;

use App\Models\Todotask;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class TodotaskPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return false;
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Todotask $todotask)
    {
        return $user->id === $todotask->user_id;
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return true;
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Todotask $todotask)
    {
        return $user->id === $todotask->user_id;
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Todotask $todotask)
    {
        return $user->id === $todotask->user_id;
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Todotask $todotask): bool
    {
        return false;
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Todotask $todotask): bool
    {
        return false;
    }
}
