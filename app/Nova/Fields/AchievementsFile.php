<?php

namespace App\Nova\Fields;

use Laravel\Nova\Fields\File;

class AchievementsFile extends File
{
    public function __construct($name, $attribute = null, $disk = null, $storageCallback = null)
    {
        parent::__construct($name, $attribute, $disk, $storageCallback);
        $this->path('docs')
            ->acceptedTypes('.pdf,.doc,.docx')
            ->rules('file', 'mimes:pdf,doc,docx', 'max:'. 10 * 1024)
            ->deletable(false)
            ->prunable();
    }
}
