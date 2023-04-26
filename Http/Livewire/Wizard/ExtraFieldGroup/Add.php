<?php

declare(strict_types=1);

namespace Modules\ExtraField\Http\Livewire\Wizard\ExtraFieldGroup;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Spatie\LivewireWizard\Components\WizardComponent;

class Add extends WizardComponent
{
    public int $cat_id;
    public string $user_id;
    public Model $model;
    public string $model_type;
    public string $model_id;

    public function mount(int $cat_id, string $model_type, string $model_id): void
    {
        // dddx(['model_type' => $model_type, 'model_id' => $model_id]);
        $this->cat_id = $cat_id;
        $this->model_type = $model_type;
        $this->model_id = $model_id;
        $this->user_id = (string) Auth::id();
    }

    public function steps(): array
    {
        return [
            Steps\SelectGroupStep::class,
            Steps\InsertDataStep::class,
            // Steps\ThirdStep::class,
        ];
    }

    public function initialState(): array
    {
        return [
            // Modules\ExtraField\Http\Livewire\Wizard\ExtraFieldGroup\Steps
            'extrafield::wizard.extra-field-group.steps.select-group-step' => [
                'cat_id' => $this->cat_id,
                'model_type' => $this->model_type,
                'model_id' => $this->model_id,
            ],
            // 'extrafield::modal.extra-fields.data-steps.second-step' => [
            //     // 'data_id' => $this->data_id,
            //     'cat_id' => $this->cat_id,
            //     'model_type' => $this->model_type,
            //     'model_id' => $this->model_id,
            // ],
        ];
    }
}
