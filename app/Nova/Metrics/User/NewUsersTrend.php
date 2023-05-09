<?php

namespace App\Nova\Metrics\User;

use App\Models;
use Laravel\Nova\Http\Requests\NovaRequest;
use Laravel\Nova\Metrics\Trend;

class NewUsersTrend extends Trend
{
    public function name()
    {
        return __('New Users Trend');
    }

    public function calculate(NovaRequest $request)
    {
        return $this->countByDays($request, Models\User::class);
    }

    public function ranges()
    {
        return [
            30 => __('30 Days'),
            60 => __('60 Days'),
            90 => __('90 Days'),
        ];
    }
}
