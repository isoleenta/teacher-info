<?php

namespace App\Models;

use App\Enums;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Nova\Actions\Actionable;

class Admin extends Authenticatable
{
    use Notifiable, Actionable;

    protected $fillable = [
        'name',
        'email',
        'role',
        'timezone',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'role' => Enums\Admin\Role::class,
    ];

    public function isSuperAdmin()
    {
        return $this->role === Enums\Admin\Role::SUPER_ADMIN;
    }
}
