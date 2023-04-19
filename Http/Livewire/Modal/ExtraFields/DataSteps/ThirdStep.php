<?php

declare(strict_types=1);

namespace Modules\ExtraField\Http\Livewire\Modal\ExtraFields\DataSteps;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Database\Eloquent\Relations\Relation;
use Modules\Cms\Actions\GetViewAction;
use Modules\Xot\Actions\GetModelByModelTypeAction;
use Spatie\LivewireWizard\Components\StepComponent;

class ThirdStep extends StepComponent
{
    public array $form_data = [];
    public array $form1_data = [];
    public array $form2_data = [];

    public bool $is_first = false;
    public bool $is_last = true;

    public function mount(): void
    {
        $this->form1_data = $this->state()->all()['extrafield::modal.extra-fields.data-steps.first-step']['form_data'];
        $this->form2_data = $this->state()->all()['extrafield::modal.extra-fields.data-steps.second-step']['form_data'];
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
        // dddx($this->form_data);

        // $this->emit('update_form_data', $this->form_data);
        // $this->emit('save');
        // $this->nextStep();
    }

    public function save(): void
    {
        // dddx($this->form_data);
        $morph_map = [
            'extra_field' => 'Modules\ExtraField\Models\ExtraField',
        ];

        Relation::morphMap($morph_map);
        $user_id = $this->form1_data['user_id'];
        $group_id = $this->form1_data['group_id'];
        $cat_id = $this->form1_data['cat_id'];
        $model_type = $this->form1_data['model_type'];
        $model_id = $this->form1_data['model_id'];
        $note = $this->form_data['note'] ?? '';
        $model = app(GetModelByModelTypeAction::class)->execute($model_type, $model_id);
        $model->addExtraField($this->form2_data, $user_id, $group_id, $note);

        $this->emit('refreshExtraFields');
        session()->flash('message', 'Post successfully updated.');

        $this->emit('modal.close');
    }
}
