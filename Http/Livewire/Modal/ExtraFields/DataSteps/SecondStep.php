<?php

declare(strict_types=1);

namespace Modules\ExtraField\Http\Livewire\Modal\ExtraFields\DataSteps;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Database\Eloquent\Relations\Relation;
use Modules\Cms\Actions\GetViewAction;
// use Modules\PFed\Models\Data;
use Modules\ExtraField\Models\ExtraField;
use Modules\UI\Datas\FieldData;
use Spatie\LaravelData\DataCollection;
use Spatie\LivewireWizard\Components\StepComponent;

class SecondStep extends StepComponent {
    public string $group_id = '';
    public string $cat_id = '';
    public array $form_data = [];

    public bool $is_first = false;
    public bool $is_last = false;

    protected $listeners = ['updateFormData' => 'updateFormData'];

    /*
    public property [fields] must be of type: [numeric, string, array, null, or boolean]

     * @var DataCollection<FieldData>

    public DataCollection $fields;
    */
    public array $fields;

    public function mount(): void {
        $morph_map = [
            'extra_field' => 'Modules\ExtraField\Models\ExtraField',
        ];

        Relation::morphMap($morph_map);

        $this->group_id = (string) $this->state()->all()['modal.extra-fields.data-steps.first-step']['form_data']['group_id'];
        $this->cat_id = (string) $this->state()->all()['modal.extra-fields.data-steps.first-step']['form_data']['cat_id'];
        // dddx($this->cat_id);
        // $this->attrs = $this->getAttrs($this->data_id);
        $res = ExtraField::where('group_id', $this->group_id)
            ->withAnyCategories($this->cat_id)
        ;
        $rows = $res->get();

        $fields = FieldData::collection($rows)->toArray();
        $this->fields = $fields;
        /*
        dddx([
            'rows' => $rows,
            'data' => $data,
        ]);
        */
        /*
        dddx([
            'sql' => rowsToSql($res),
            'count' => $res->count(),
            'rows' => $res->get(),
        ]);
        */
    }

    public function updateFormData($data) {
        $this->form_data = array_merge($this->form_data, $data);
    }

    /*
    public function getAttrs(int $data_id): array {
        $attrs = [];
        $data = Data::find($data_id);
        if (! is_null($data)) {
            $base_datums = $data->baseDatums;

            $attrs = $base_datums->map(function ($item) {
                // dddx($item);
                $tmp = [];
                $tmp['name'] = $item->name;
                $tmp['label'] = $item->name;
                $tmp['id'] = $item->name;
                $tmp['type'] = $item->type;
                if ('input' == $tmp) {
                    $tmp['type'] = 'text';
                }
                $tmp['options'] = $item->defaultValues;

                if ('text' != $tmp['type']) {
                    $tmp['type'] = $tmp['type'].'.arr';
                }

                return $tmp;
            })->all();
            // dddx($attrs);
        }

        return $attrs;
    }
    */

    public function render(): Renderable {
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

    public function stepInfo(): array {
        return [
            'label' => 'Input Data',
            'icon' => 'fa-shopping-cart',
        ];
    }

    public function goNextStep(): void {
        // $this->form_data['value'] = $this->form_data;
        // $this->emit('update_form_data', $this->form_data);
        $this->nextStep();
    }
}
