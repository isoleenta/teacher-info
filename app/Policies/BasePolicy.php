<?php

namespace App\Policies;

use App\Enums;
use Illuminate\Database\Eloquent\Model;

class BasePolicy
{
    protected function isAdmin(?Model $model)
    {
        return $model->role === Enums\Admin\Role::ADMIN;
    }

    protected function isSuperAdmin(?Model $model)
    {
        return $model->role === Enums\Admin\Role::SUPER_ADMIN;
    }
}
