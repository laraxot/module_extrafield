<?php

declare(strict_types=1);

namespace Modules\ExtraField\Http\Livewire\Modal\ExtraFields\DataSteps;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Database\Eloquent\Relations\Relation;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Modules\Cms\Actions\GetViewAction;
use Modules\ExtraField\Models\ExtraFieldGroup;
use Modules\PFed\Rules\CardinalityRule;
use Spatie\LivewireWizard\Components\StepComponent;

class FirstStep extends StepComponent {
    public string $cat_id;
    public string $model_type;
    public string $model_id;
    public array $form_data = [];
    public array $group_opts = [];

    public bool $is_first = true;
    public bool $is_last = false;

    // public function mount(string $cat_id, string $model_type, string $model_id): void {
    public function mount(): void {
        // dddx($this->state()->all()['extrafield::modal.extra-fields.data-steps.first-step']);

        // $this->cat_id = $cat_id;
        $this->cat_id = (string) $this->state()->all()['extrafield::modal.extra-fields.data-steps.first-step']['cat_id'];
        $this->form_data['cat_id'] = $this->cat_id;
        $this->form_data['user_id'] = (string) Auth::id();
        // $this->form_data['model_type'] = $model_type;
        $this->form_data['model_type'] = (string) $this->state()->all()['extrafield::modal.extra-fields.data-steps.first-step']['model_type'];
        // $this->form_data['model_id'] = $model_id;
        $this->form_data['model_id'] = (string) $this->state()->all()['extrafield::modal.extra-fields.data-steps.first-step']['model_id'];

        $morph_map = [
            'extra_field' => 'Modules\ExtraField\Models\ExtraField',
        ];

        Relation::morphMap($morph_map);

        // prima era fieldsnew. controllare
        // $groups = ExtraFieldGroup::whereHas('fields', function ($query) use ($cat_id) {
        //     $query->withAnyCategories($cat_id);
        // })->get();
        $groups = ExtraFieldGroup::withAnyCategories($this->cat_id);

        // bisogna passare per un map mi sa e validare campo per campo attraverso le Rule
        $group_opts = $groups->pluck('name', 'id')->filter(function ($val, $id) {
            $validator = Validator::make(['id' => [$id]], ['id' => new CardinalityRule()]);
            if ($validator->passes()) {
                return $val;
            }/* else {
                session()->flash('status_error', 'Avviso: Non puoi più aggiungere campi di questo tipo: '.$val);
            }*/
        })->all();

        $this->group_opts = $group_opts;
    }

    protected $rules = [
        'form_data.group_id' => 'required',
    ];

    public function render(): Renderable {
        /**
         * @phpstan-var view-string
         */
        $view = app(GetViewAction::class)->execute();
        $view_params = [
            'view' => $view,
        ];

        return view($view, $view_params);
    }

    public function stepInfo(): array {
        return [
            'label' => 'Select Data',
            'icon' => 'fa-shopping-cart',
        ];
    }

    public function goNextStep(): void {
        $this->validate();
        // $this->emit('update_form_data', $this->form_data);
        $this->nextStep();
    }
}
