<?php

declare(strict_types=1);

namespace Modules\ExtraField\Http\Livewire\Modal\ExtraFields\User;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Modules\ExtraField\Http\Livewire\Modal\ExtraFields\User\DataSteps\FirstStep;
use Modules\ExtraField\Http\Livewire\Modal\ExtraFields\User\DataSteps\SecondStep;
use Modules\ExtraField\Http\Livewire\Modal\ExtraFields\User\DataSteps\ThirdStep;
use Spatie\LivewireWizard\Components\WizardComponent;

class DataSteps extends WizardComponent
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
            FirstStep::class,
            SecondStep::class,
            ThirdStep::class,
        ];
    }

    public function initialState(): array
    {
        return [
            'modal.extra-fields.user.data-steps.first-step' => [
                'cat_id' => $this->cat_id,
                'model_type' => $this->model_type,
                'model_id' => $this->model_id,
            ],
            'modal.extra-fields.user.data-steps.second-step' => [
                // 'data_id' => $this->data_id,
            ],
        ];
    }
}
