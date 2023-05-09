<?php

namespace App\Nova\Actions\User;

use App\Models\User;
use Illuminate\Support\Collection;
use Laravel\Nova\Actions\Action;
use Laravel\Nova\Fields\ActionFields;

class ApproveUser extends Action
{
    public function __construct()
    {
            $this->confirmText = __('Are you sure you want to approve this user?');
            $this->confirmButtonText = __('Approve');
    }

    public function name()
    {
        return __('Approve User');
    }

    public function handle(ActionFields $fields, Collection $models)
    {
        foreach ($models as $model) {
            if ($model instanceof User) {
               $model->approved = true;
               $model->save();
            }
        }

        return Action::message(__('Approved'));
    }
}
