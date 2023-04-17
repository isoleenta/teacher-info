<?php

namespace App\Policies;

use Illuminate\Foundation\Auth\User;

class DisciplinePolicy extends BasePolicy
{
    public function viewAny(): bool
    {
        return true;
    }

    public function view(User $user): bool
    {
        return true;
    }

    public function create(): bool
    {
        return true;
    }

    public function update(User $user): bool
    {
        return $this->isAdmin($user);
    }

    public function delete(User $user): bool
    {
        return $this->isAdmin($user);
    }

    public function restore(User $user): bool
    {
        return $this->isAdmin($user);
    }

    public function forceDelete(User $user): bool
    {
        return $this->isAdmin($user);
    }
}
