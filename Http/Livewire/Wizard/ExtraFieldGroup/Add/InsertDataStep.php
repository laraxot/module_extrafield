<?php

declare(strict_types=1);

namespace Modules\ExtraField\Http\Livewire\Wizard\ExtraFieldGroup\Add;

// use Modules\PFed\Models\Data;
use Modules\ExtraField\Actions;
use Modules\ExtraField\Models\ExtraFieldGroup;
use Modules\UI\Actions\GetStateDataAction;
use Modules\UI\Http\Wizard\BaseStep;

class InsertDataStep extends BaseStep
{
    /**
     * @var array<string, string>
     */
    protected $listeners = ['updateFormData' => 'updateFormData'];

    public array $fields;
    public bool $can_verified;
    public string $extra_field_group_id;
    public string $model_type;
    public string $model_id;

    public function mount(): void
    {
        $this->form_data = app(GetStateDataAction::class)->execute($this->state());

        $this->model_type = $this->form_data['model_type'];
        $this->model_id = $this->form_data['model_id'];

        $this->extra_field_group_id = $this->form_data['group_id'];

        $group = ExtraFieldGroup::find($this->extra_field_group_id);

        $this->can_verified = (bool) $group->can_verified;

        $this->fields = app(Actions\ExtraFieldGroup\GetFieldsArrayByGroupId::class)->execute($this->extra_field_group_id);

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

    public function updated($name, $value)
    {
        $this->emit('updatedFormDataVerified', $this->form_data);
    }

    public function goNextStep(): void
    {
        if (true == $this->can_verified) {
            $this->emit('refresh');
            $this->emit('modal.close');

            return;
        }

        $this->validate();
        $this->nextStep();
    }
}
