<?php

declare(strict_types=1);

namespace Modules\ExtraField\Http\Livewire\Wizard\ExtraFieldGroup\Steps;

use Illuminate\Contracts\Support\Renderable;
// use Modules\PFed\Models\Data;
use Modules\Cms\Actions\GetViewAction;
use Modules\ExtraField\Actions;
use Modules\UI\Actions\GetStateDataAction;
use Modules\UI\Datas\FieldData;
use Spatie\LaravelData\DataCollection;
use Spatie\LivewireWizard\Components\StepComponent;

class InsertDataStep extends StepComponent
{
    public array $form_data = [];
    public array $rules;

    /**
     * Undocumented variable.
     *
     * @var array<string, string>
     */
    protected $listeners = ['updateFormData' => 'updateFormData'];

    /*
    public property [fields] must be of type: [numeric, string, array, null, or boolean]

     * @var DataCollection<FieldData>

    public DataCollection $fields;
    */
    public array $fields;

    public function mount(): void
    {
        $this->form_data = app(GetStateDataAction::class)->execute($this->state());

        $this->fields = app(Actions\ExtraFieldGroup\GetFieldsArrayByGroupId::class)->execute($this->form_data['group_id']);

        $this->rules = app(Actions\ExtraFieldGroup\GetRulesByGroupId::class)->execute($this->form_data['group_id'], 'form_data.');

        $this->rules = $this->rules;

        $this->initFormData();
    }

    public function initFormData(): void
    {
        foreach ($this->fields as $field) {
            $this->form_data[$field['name']] = $field['value'] ?? '';
        }
    }

    public function updateFormData(array $data): void
    {
        $this->form_data = array_merge($this->form_data, $data);
    }

    public function render(): Renderable
    {
        /**
         * @phpstan-var view-string
         */
        $view = app(GetViewAction::class)->execute();

        $view_params = [
            'view' => $view,
            // 'item' => $this->attrs,
        ];

        return view($view, $view_params);
    }

    public function stepInfo(): array
    {
        return [
            'label' => trans('pfed::data-steps.input_data'),
            'icon' => 'fa-shopping-cart',
        ];
    }

    public function goNextStep(): void
    {
        // if (! empty()) {
        $this->validate();
        // }

        $this->nextStep();
    }
}
