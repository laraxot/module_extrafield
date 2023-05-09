<?php

declare(strict_types=1);

namespace Modules\ExtraField\Http\Livewire\Wizard\ExtraFieldGroup\Steps;

use Modules\ExtraField\Actions;
use Modules\ExtraField\Models\Contracts\HasExtraFieldGroupsContract;
use Modules\UI\Actions\GetStateDataAction;
use Modules\UI\Http\Wizard\BaseStep;
use Modules\Xot\Actions\GetModelByModelTypeAction;

class InsertDescriptionStep extends BaseStep
{
    public function mount(): void
    {
        $this->form_data = app(GetStateDataAction::class)->execute($this->state());
        dddx($this->form_data);
    }

    public function save(): void
    {
        $model = app(GetModelByModelTypeAction::class)->execute($this->form_data['model_type'], $this->form_data['model_id']);
        app(Actions\ExtraFieldGroup\Create::class)->execute($model, $this->form_data['group_id'], $this->form_data['user_id'], $this->form_data);
        $this->emit('refresh');
        session()->flash('message', 'Post successfully updated.');

        $this->emit('modal.close');
    }

    public function getModel(): HasExtraFieldGroupsContract
    {
        $model = app(GetModelByModelTypeAction::class)->execute($this->form_data['model_type'], $this->form_data['model_id']);

        if (! $model instanceof HasExtraFieldGroupsContract) {
            throw new \Exception('add on class ['.get_class($model).'] implements HasExtraFieldGroupsContract');
        }

        return $model;
    }
}
