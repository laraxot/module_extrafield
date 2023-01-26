<?php

declare(strict_types=1);

namespace Modules\ExtraField\Http\Livewire\Modal\ExtraFields;

use Illuminate\Support\Facades\Auth;
use Modules\ExtraField\Http\Livewire\Modal\ExtraFields\DataSteps\FirstStep;
use Modules\ExtraField\Http\Livewire\Modal\ExtraFields\DataSteps\SecondStep;
use Modules\ExtraField\Http\Livewire\Modal\ExtraFields\DataSteps\ThirdStep;
use Spatie\LivewireWizard\Components\WizardComponent;

class DataSteps extends WizardComponent {
    public int $cat_id;
    public string $user_id;

    public function mount(int $cat_id): void {
        $this->cat_id = $cat_id;
        $this->user_id = (string) Auth::id();
    }

    public function steps(): array {
        return [
            FirstStep::class,
            SecondStep::class,
            ThirdStep::class,
        ];
    }

    public function initialState(): array {
        return [
            'modal.profile.data-steps.first-step' => [
                'cat_id' => $this->cat_id,
            ],
            'modal.profile.data-steps.second-step' => [
                // 'data_id' => $this->data_id,
            ],
        ];
    }
}
