<?php

namespace App\Nova;

use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\File;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Http\Requests\NovaRequest;

class Doc extends Resource
{
    public static $model = \App\Models\Doc::class;

    public static $displayInNavigation = false;

    public static function label()
    {
        return __('Docs');
    }

    public static function singularLabel()
    {
        return __('Doc');
    }

    public function fields(NovaRequest $request)
    {
        return [
            ID::make()->sortable(),

            File::make(__('Higher education doc'), 'higher_education_doc')
                ->path('docs')
                ->acceptedTypes('.pdf,.doc,.docx')
                ->rules('required', 'file', 'mimes:pdf,doc,docx', 'max:'. 10 * 1024)
                ->deletable(false)
                ->prunable(),

            File::make(__('Scientific degree doc'), 'scientific_degree_doc')
                ->path('docs')
                ->acceptedTypes('.pdf,.doc,.docx')
                ->rules('required', 'file', 'mimes:pdf,doc,docx', 'max:'. 10 * 1024)
                ->deletable(false)
                ->prunable(),

            File::make(__('Professional experience doc'), 'professional_experience_doc')
                ->path('docs')
                ->acceptedTypes('.pdf,.doc,.docx')
                ->rules('required', 'file', 'mimes:pdf,doc,docx', 'max:'. 10 * 1024)
                ->deletable(false)
                ->prunable(),

            File::make(__('Dessert management doc'), 'dessert_management_doc')
                ->path('docs')
                ->acceptedTypes('.pdf,.doc,.docx')
                ->rules('required', 'file', 'mimes:pdf,doc,docx', 'max:'. 10 * 1024)
                ->deletable(false)
                ->prunable(),

            BelongsTo::make(__('User'), 'user', User::class),
        ];
    }
}
