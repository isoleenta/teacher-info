<?php

namespace App\Nova\Metrics\User;

use App\Models;
use Laravel\Nova\Http\Requests\NovaRequest;
use Laravel\Nova\Metrics\Value;

class NewUsers extends Value
{
    public function name()
    {
        return __('New Users');
    }

    public function calculate(NovaRequest $request)
    {
        return $this->count($request, Models\User::class);
    }

    public function ranges()
    {
        return [
            'TODAY' => __('Today'),
            7 => __('Week'),
            30 => __('30 Days'),
            60 => __('60 Days'),
            'ALL' => __('All Time'),
        ];
    }
}
