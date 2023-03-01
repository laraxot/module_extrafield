<?php

declare(strict_types=1);

namespace Modules\ExtraField\Http\Livewire\Modal\ExtraFields\DataSteps;

use Illuminate\Support\Facades\Auth;
use Modules\Cms\Actions\GetViewAction;
use Modules\PFed\Rules\CardinalityRule;
use Illuminate\Support\Facades\Validator;
use Modules\ExtraField\Models\ExtraField;
use Illuminate\Contracts\Support\Renderable;
use Modules\ExtraField\Models\ExtraFieldGroup;
use Spatie\LivewireWizard\Components\StepComponent;
use Illuminate\Database\Eloquent\Relations\Relation;

class FirstStep extends StepComponent {
    public string $cat_id;
    public array $form_data = [];
    public array $group_opts = [];

    public bool $is_first = true;
    public bool $is_last = false;

    public function mount(string $cat_id, string $model_type, string $model_id): void {
        $this->cat_id = $cat_id;
        $this->form_data['cat_id'] = $cat_id;
        $this->form_data['user_id'] = (string) Auth::id();
        $this->form_data['model_type'] = $model_type;
        $this->form_data['model_id'] = $model_id;

        $morph_map = [
            'extra_field' => 'Modules\ExtraField\Models\ExtraField',
        ];

        Relation::morphMap($morph_map);

        $groups = ExtraFieldGroup::whereHas('fieldsNew', function ($query) use ($cat_id) {
            $query->withAnyCategories($cat_id);
        });

        // dddx([$cat_id,ExtraFieldGroup::whereHas('fields')->get()]);

        // bisogna passare per un map mi sa e validare campo per campo attraverso le Rule
        $group_opts = $groups->pluck('name', 'id')->filter(function ($val, $id) {
            $validator = Validator::make(['id' => $id], ['id' => new CardinalityRule()]);
            if ($validator->passes()) {
                return $val;
            } else {
                session()->flash('status_error', 'Avviso: Non puoi più aggiungere campi di questo tipo: '.$val);
            }
        })->all();

        $this->group_opts = $group_opts;
        /*
        dddx([
            'rows' => $res->get(),
            'c' => $res->count(),
            'sql' => rowsToSql($res),
            '$group_ops' => $group_ops,
        ]);
        */
        // $res = ExtraField::withAnyCategories($cat_id);
        /*
        dddx([
            'rows' => $res->get(),
            'c' => $res->count(),
            'sql' => rowsToSql($res),
        ]);
        */
    }

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
        /*
        dddx([
            'state' => $this->state(),
            'state_all' => $this->state()->all(),
            'state_methods' => get_class_methods($this->state()),
            'methods' => get_class_methods($this),
        ]);
        */
        return [
            'label' => 'Select Data',
            'icon' => 'fa-shopping-cart',
        ];
    }

    public function goNextStep(): void {
        // $this->emit('update_form_data', $this->form_data);
        $this->nextStep();
    }
}