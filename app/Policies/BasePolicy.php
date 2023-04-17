<?php

namespace App\Policies;

use Illuminate\Database\Eloquent\Model;

class BasePolicy
{
    protected function isAdmin(?Model $admin)
    {
        return $admin?->email === 'vlad@gmail.com';
    }
}
