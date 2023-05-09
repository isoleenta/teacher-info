<?php

namespace App\Policies;

use Illuminate\Foundation\Auth\User;

class AdminPolicy extends BasePolicy
{
    public function viewAny(User $user): bool
    {
        return $this->isAdmin($user) || $this->isSuperAdmin($user);
    }

    public function view(User $user): bool
    {
        return $this->isAdmin($user) || $this->isSuperAdmin($user);
    }

    public function create(User $user): bool
    {
        return $this->isSuperAdmin($user);
    }

    public function update(User $user): bool
    {
        return $this->isSuperAdmin($user);
    }

    public function delete(User $user): bool
    {
        return $this->isSuperAdmin($user);
    }

    public function restore(User $user): bool
    {
        return $this->isSuperAdmin($user);
    }

    public function forceDelete(User $user): bool
    {
        return $this->isSuperAdmin($user);
    }
}
