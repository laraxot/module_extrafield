<?php

declare(strict_types=1);

namespace Modules\ExtraField\Http\Livewire\Wizard\ExtraFieldGroup\Steps;

// use Modules\PFed\Models\Data;
use Modules\ExtraField\Actions;
use Modules\UI\Actions\GetStateDataAction;
use Modules\UI\Http\Wizard\BaseStep;

class InsertDataStep extends BaseStep
{
    /**
     * @var array<string, string>
     */
    protected $listeners = ['updateFormData' => 'updateFormData'];

    public array $fields;

    public function mount(): void
    {
        $this->form_data = app(GetStateDataAction::class)->execute($this->state());

        $this->fields = app(Actions\ExtraFieldGroup\GetFieldsArrayByGroupId::class)->execute($this->form_data['group_id']);

        $this->initFormData();
    }

    public function rules(): array
    {
        $rules = app(Actions\ExtraFieldGroup\GetRulesByGroupId::class)->execute($this->form_data['group_id'], 'form_data.');

        return $rules;
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
}
