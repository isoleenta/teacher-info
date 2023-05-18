<?php

namespace App\Nova;

use App\Nova\Metrics\Discipline\NewDisciplinesTrend;
use Laravel\Nova\Fields;
use Laravel\Nova\Http\Requests\NovaRequest;

class Discipline extends Resource
{
    public static $model = \App\Models\Discipline::class;

    public static $search = ['name'];

    public static $title = 'name';

    public static function label()
    {
        return __('Disciplines');
    }

    public static function singularLabel()
    {
        return __('Discipline');
    }

    public function fields(NovaRequest $request)
    {
        return [
            Fields\ID::make()->sortable(),

            Fields\Text::make(__('Name'), 'name')
                ->sortable()
                ->rules('required', 'max:255'),

            Fields\BelongsToMany::make(__('User'), 'users', User::class),
        ];
    }

    public function cards(NovaRequest $request)
    {
        return [
            (new NewDisciplinesTrend)->width('1/2'),
        ];
    }
}
