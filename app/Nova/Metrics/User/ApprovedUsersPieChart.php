<?php

namespace App\Nova\Metrics\User;

use App\Models;
use Laravel\Nova\Http\Requests\NovaRequest;
use Laravel\Nova\Metrics\Partition;

class ApprovedUsersPieChart extends Partition
{
    public function name()
    {
        return __('New Users Trend');
    }

    public function calculate(NovaRequest $request)
    {
        $number_of_approved_users = Models\User::where('approved', true)->count();
        $number_of_not_approved_users = Models\User::where('approved', false)->count();

        return $this->result([
            __('Approved') => $number_of_approved_users,
            __('Not Approved') => $number_of_not_approved_users,
        ])
            ->colors([
                __('Approved') => 'rgb(134,239,172)',
                __('Not Approved') => 'rgb(239,68,68)',
            ]);
    }

    /**
     * Get the URI key for the metric.
     *
     * @return string
     */
    public function uriKey()
    {
        return 'approved-users-chart';
    }
}
