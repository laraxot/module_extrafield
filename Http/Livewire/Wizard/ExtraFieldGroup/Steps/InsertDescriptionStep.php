<?php

declare(strict_types=1);

namespace Modules\ExtraField\Http\Livewire\Wizard\ExtraFieldGroup\Steps;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Relation;
use Modules\Cms\Actions\GetViewAction;
use Modules\UI\Actions\GetStateDataAction;
use Modules\Xot\Actions\GetModelByModelTypeAction;
use Spatie\LivewireWizard\Components\StepComponent;

class InsertDescriptionStep extends StepComponent
{
    public array $form_data = [];

    public function mount(): void
    {
        $this->form_data = app(GetStateDataAction::class)->execute($this->state());
    }

    public function render(): Renderable
    {
        /**
         * @phpstan-var view-string
         */
        $view = app(GetViewAction::class)->execute();

        $view_params = [
            'view' => $view,
        ];

        return view($view, $view_params);
    }

    public function stepInfo(): array
    {
        return [
            'label' => trans('pfed::data-steps.data_description'),
            'icon' => 'fa-shopping-cart',
        ];
    }

    public function goNextStep(): void
    {
        // $this->nextStep();
    }

    public function save(): void
    {
        $morph_map = [
            'extra_field' => 'Modules\ExtraField\Models\ExtraField',
        ];

        Relation::morphMap($morph_map);

        $this->getModel()->addExtraField($this->form_data, $this->form_data['user_id'], $this->form_data['group_id'], $this->form_data['note']);

        // $this->emit('refreshExtraFields');
        $this->emit('refresh');
        session()->flash('message', 'Post successfully updated.');

        $this->emit('modal.close');
    }

    public function getModel(): Model
    {
        $model = app(GetModelByModelTypeAction::class)->execute($this->form_data['model_type'], $this->form_data['model_id']);

        return $model;
    }
}
