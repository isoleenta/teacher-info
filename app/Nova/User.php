<?php

namespace App\Nova;

use App\Nova\Metrics\User\ApprovedUsersPieChart;
use App\Nova\Metrics\User\NewUsers;
use App\Nova\Metrics\User\NewUsersTrend;
use Illuminate\Support\Facades\Gate;
use Laravel\Nova\Fields;
use Laravel\Nova\Http\Requests\ActionRequest;
use Laravel\Nova\Http\Requests\NovaRequest;

class User extends Resource
{
    public static $model = \App\Models\User::class;

    public static $title = 'name';

    public static $search = [
        'id', 'name', 'surname', 'patronymic', 'position_at_work', 'structural_unit',
    ];

//    public static $with = [
//        'doc', 'disciplines'
//    ];

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
                ->rules('required', 'max:60000'),

            Fields\Number::make(__('Experience'), 'experience')
                ->sortable()
                ->hideFromIndex()
                ->rules('required', 'max:100'),

            Fields\Textarea::make(__('Explanation'), 'explanation')
                ->sortable()
                ->hideFromIndex()
                ->rules('required', 'max:16777000'),

            Fields\Boolean::make(__('Approved'), 'approved')
                ->sortable()
                ->filterable()
                ->hideWhenCreating(),

            ...$this->getTimestampsFields(),

            Fields\BelongsToMany::make(__('Discipline'), 'disciplines', Discipline::class)
            ->showOnCreating(),

            Fields\HasOne::make(__('Doc'), 'doc', Doc::class),
        ];
    }

    public function cards(NovaRequest $request)
    {
        return [
            (new NewUsers)->width('1/2'),
            (new NewUsersTrend)->width('1/2'),
            (new ApprovedUsersPieChart)->width('1/2'),
        ];
    }

    public function actions(NovaRequest $request)
    {
        return [
            Actions\User\ApproveUser::make()->showInline()->canSee(function ($request) {
                if ($request instanceof ActionRequest) {
                    return true;
                }
                $allowed = Gate::inspect('approveUser', $this)->allowed();

                if ($allowed) {
                    return ! $this->approved;
                } else {
                    return false;
                }
            }),
        ];
    }
}
