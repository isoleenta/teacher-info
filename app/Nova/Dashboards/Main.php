<?php

namespace App\Nova\Dashboards;

use App\Nova\Metrics\Discipline\NewDisciplinesTrend;
use App\Nova\Metrics\User\ApprovedUsersPieChart;
use App\Nova\Metrics\User\NewUsers;
use App\Nova\Metrics\User\NewUsersTrend;
use Laravel\Nova\Dashboards\Main as Dashboard;

class Main extends Dashboard
{
    public function label()
    {
        return __('Dashboard');
    }

    /**
     * Get the cards for the dashboard.
     *
     * @return array
     */
    public function cards()
    {
        return [
            (new NewUsers)->width('1/2'),
            (new NewUsersTrend)->width('1/2'),
            (new ApprovedUsersPieChart)->width('1/2'),
            (new NewDisciplinesTrend)->width('1/2'),
        ];
    }
}
