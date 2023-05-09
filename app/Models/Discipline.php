<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Nova\Actions\Actionable;

class Discipline extends Model
{
    use HasFactory, Actionable;

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
