<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields;
use Laravel\Nova\Http\Requests\NovaRequest;

class User extends Resource
{
    public static $model = \App\Models\User::class;

    public static $title = 'name';

    public static $search = [
        'id', 'name', 'email',
    ];

    public static function label()
    {
        return __('Users');
    }

    public static function singularLabel()
    {
        return __('User');
    }

    public function fields(NovaRequest $request)
    {
        return [
            Fields\ID::make()->sortable(),

            Fields\Text::make(__('Name'), 'name')
                ->sortable()
                ->rules('required', 'max:255'),

            Fields\Text::make(__('Surname'), 'surname')
                ->sortable()
                ->rules('required', 'max:255'),

            Fields\Text::make(__('Patronymic'), 'patronymic')
                ->sortable()
                ->rules('required', 'max:255'),

            Fields\Text::make(__('Position at work'), 'position_at_work')
                ->sortable()
                ->hideFromIndex()
                ->rules('required', 'max:255'),

            Fields\Text::make(__('Structural unit'), 'structural_unit')
                ->sortable()
                ->hideFromIndex()
                ->rules('required', 'max:255'),

            Fields\Text::make(__('Information about qualification'), 'information_about_qualification')
                ->sortable()
                ->hideFromIndex()
                ->rules('required', 'max:255'),

            Fields\Number::make(__('Experience'), 'experience')
                ->sortable()
                ->hideFromIndex()
                ->rules('required', 'max:255'),

            Fields\Text::make(__('Explanation'), 'explanation')
                ->sortable()
                ->hideFromIndex()
                ->rules('required', 'max:255'),

            ...$this->getTimestampsFields(),

            Fields\BelongsToMany::make(__('Discipline'), 'disciplines', Discipline::class)
            ->showOnCreating(),

            Fields\HasOne::make(__('Doc'), 'doc', Doc::class),
        ];
    }

    public function cards(Request $request)
    {
        return [];
    }

    public function filters(Request $request)
    {
        return [];
    }

    public function lenses(Request $request)
    {
        return [];
    }

    public function actions(Request $request)
    {
        return [];
    }
}
