<?php

namespace App\Nova\Metrics\Discipline;

use App\Models;
use Laravel\Nova\Http\Requests\NovaRequest;
use Laravel\Nova\Metrics\Trend;

class NewDisciplinesTrend extends Trend
{
    public function name()
    {
        return __('New Disciplines Trend');
    }

    public function calculate(NovaRequest $request)
    {
        return $this->countByDays($request, Models\Discipline::class);
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
