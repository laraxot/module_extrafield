<?php

declare(strict_types=1);

namespace Modules\ExtraField\Http\Livewire\Modal\ExtraFields\DataSteps;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Database\Eloquent\Relations\Relation;
use Modules\Cms\Actions\GetViewAction;
// use Modules\PFed\Models\Data;
use Modules\ExtraField\Models\ExtraFieldGroup;
use Modules\UI\Datas\FieldData;
use Modules\Xot\Actions\GetModelByModelTypeAction;
use Spatie\LaravelData\DataCollection;
use Spatie\LivewireWizard\Components\StepComponent;

class SecondStep extends StepComponent
{
    public string $group_id = '';
    public string $cat_id = '';
    public array $form_data = [];
    public array $form1_data = [];

    public bool $is_first = false;
    public bool $is_last = false;

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
        $this->form1_data = $this->state()->all()['extrafield::modal.extra-fields.data-steps.first-step']['form_data'];

        $morph_map = [
            'extra_field' => 'Modules\ExtraField\Models\ExtraField',
        ];

        Relation::morphMap($morph_map);

        $this->group_id = (string) $this->state()->all()['extrafield::modal.extra-fields.data-steps.first-step']['form_data']['group_id'];
        $this->cat_id = (string) $this->state()->all()['extrafield::modal.extra-fields.data-steps.first-step']['form_data']['cat_id'];

        $rows = ExtraFieldGroup::findOrFail($this->group_id)->fields;

        $fields = FieldData::collection($rows->all())->toArray();
        $this->fields = $fields;

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
        $morph_map = [
            'extra_field' => 'Modules\ExtraField\Models\ExtraField',
        ];

        Relation::morphMap($morph_map);

        $model_type = $this->form1_data['model_type'];
        $model_id = $this->form1_data['model_id'];

        $model = app(GetModelByModelTypeAction::class)->execute($model_type, $model_id);
        if (! method_exists($model, 'getExtraFieldRules')) {
            throw new \Exception('['.__LINE__.']['.__FILE__.']');
        }
        $efr = $model->getExtraFieldRules($this->form_data);
        if (! empty($efr)) {
            $this->validate($efr);
        }

        $this->nextStep();
    }
}
