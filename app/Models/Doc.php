<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Nova\Actions\Actionable;

class Doc extends Model
{
    use HasFactory, Actionable;

    public function user()
    {
       return $this->belongsTo(User::class);
    }
}
