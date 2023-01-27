<?php

declare(strict_types=1);

namespace Modules\ExtraField\Http\Livewire\Modal\ExtraFields\DataSteps;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Database\Eloquent\Relations\Relation;
use Illuminate\Support\Str;
use Modules\ExtraField\Models\ExtraField;
use Spatie\LivewireWizard\Components\StepComponent;

class ThirdStep extends StepComponent {
    public array $form_data = [];
    public array $form1_data = [];
    public array $form2_data = [];

    public bool $is_first = false;
    public bool $is_last = true;

    public function mount(): void {
        $this->form1_data = $this->state()->all()['modal.extra-fields.data-steps.first-step']['form_data'];
        $this->form2_data = $this->state()->all()['modal.extra-fields.data-steps.second-step']['form_data'];
        // $this->form_data = array_merge($data01, $data02);
        // dddx(['01' => $data01, '02' => $data02]);
        /*
         "01" => array:2 [▼
      "cat_id" => "1"
      "group_id" => "3"
    ]
    "02" => array:2 [▼
      "first_name" => "ssss"
      "last_name" => "ddd"
    ]
    */
    }

    public function render(): Renderable {
        /**
         * @phpstan-var view-string
         */
        $view = 'extrafield::livewire.modal.profile.data_steps.third_step';

        $view_params = [
            'view' => $view,
        ];

        return view($view, $view_params);
    }

    public function stepInfo(): array {
        return [
            'label' => 'Data Description',
            'icon' => 'fa-shopping-cart',
        ];
    }

    public function goNextStep(): void {
        // dddx($this->form_data);

        // $this->emit('update_form_data', $this->form_data);
        // $this->emit('save');
        // $this->nextStep();
    }

    public function save(): void {
        $morph_map = [
            'extra_field' => 'Modules\ExtraField\Models\ExtraField',
        ];

        Relation::morphMap($morph_map);
        $user_id = $this->form1_data['user_id'];
        $group_id = $this->form1_data['group_id'];
        $cat_id = $this->form1_data['cat_id'];
        $model_type = $this->form1_data['model_type'];
        $model_id = $this->form1_data['model_id'];
        $model = config('morph_map')[$model_type]::findOrFail($model_id);

        $res = ExtraField::where('group_id', $group_id)
            ->withAnyCategories($cat_id)
        ;
        $rows = $res->get();

        /*
        dddx([
            'group_id' => $group_id,
            'cat_id' => $cat_id,
            'rows' => $rows,
        ]
        );
        */
        $uuid = Str::uuid();
        foreach ($rows as $row) {
            $value = collect($this->form2_data)->get($row->name);
            $model->extraFields()->attach($row->id, ['value' => $value, 'uuid' => $uuid]);
        }

        $this->close();
        $this->emit('refreshExtraFields');
        session()->flash('message', 'Post successfully updated.');
    }
}
