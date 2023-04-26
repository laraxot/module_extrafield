<?php

declare(strict_types=1);

namespace Modules\ExtraField\Http\Livewire\Wizard\ExtraFieldGroup\Steps;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Support\Facades\Auth;
use Modules\Cms\Actions\GetViewAction;
use Modules\ExtraField\Actions;
use Spatie\LivewireWizard\Components\StepComponent;

class SelectGroupStep extends StepComponent
{
    public string $cat_id;
    public string $user_id;
    public array $form_data = [];
    public string $model_type;
    public string $model_id;
    public array $groups;

    public function mount(string $cat_id, string $model_type, string $model_id): void
    {
        $this->cat_id = $cat_id;
        $this->user_id = (string) Auth::id();
        $this->form_data['cat_id'] = $cat_id;
        $this->form_data['user_id'] = (string) Auth::id();
        $this->model_type = $model_type;
        $this->model_id = $model_id;

        $this->groups = app(Actions\ExtraFieldGroup\GetOptionsByModelTypeModelIdCategoryIdUserId::class)->execute($model_type, null, $cat_id, $this->user_id);
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
        /*
        dddx([
            'state' => $this->state(),
            'state_all' => $this->state()->all(),
            'state_methods' => get_class_methods($this->state()),
            'methods' => get_class_methods($this),
        ]);
        */
        return [
            'label' => trans('pfed::data-steps.select_data'),
            'icon' => 'fa-shopping-cart',
        ];
    }

    public function goNextStep(): void
    {
        // $this->emit('update_form_data', $this->form_data);
        $this->nextStep();
    }
}
