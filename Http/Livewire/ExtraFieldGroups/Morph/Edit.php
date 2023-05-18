<?php

declare(strict_types=1);

namespace Modules\ExtraField\Http\Livewire\ExtraFieldGroups\Morph;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;
use Modules\Blog\Models\Category;
use Modules\Cms\Actions\GetViewAction;
use Modules\Cms\Services\PanelService;
use Modules\ExtraField\Models\ExtraFieldGroup;
use Modules\ExtraField\Models\ExtraFieldGroupMorph;
use Modules\UI\Datas\FieldData;
use Modules\Wire\Concerns\InteractsWithConfirmationModal;
use Spatie\LaravelData\DataCollection;

class Edit extends Component
{
    use InteractsWithConfirmationModal;

    public string $tpl;
    public string $model_type;
    public string $model_id;

    public array $fields = [
        'note',
        'cardinality',
        'verified_by',
        'can_verified',
        'mandatory',
    ];

    public array $form_data = [];
    /**
     * Undocumented variable.
     *
     * @var array<string, string>
     */
    protected $listeners = ['refresh' => '$refresh'];

    public function mount(string $model_type, string $model_id, string $tpl = 'v1'): void
    {
        $this->model_id = $model_id;
        $this->model_type = $model_type;
        $this->tpl = $tpl;

        // --- il profilo e' attaccato ai gruppi passando per la categoria
        if ('profile' == $model_type) {
            $categories = Category::ofType($model_type)
                ->ofType('extra_field_group')
                // ->defaultOrder() //kelnoy ma non fa quello che vogliamo noi
                ->ordered()
                ->get();
            $groups = ExtraFieldGroup::withAnyCategories($categories)->get();
            // dddx(ExtraFieldGroupMorph::first());
            foreach ($groups as $group) {
                $up = [
                    'model_type' => $model_type,
                    'model_id' => null,
                    'user_id' => null,
                    'extra_field_group_id' => strval($group->id),
                ];
                $res = ExtraFieldGroupMorph::firstOrCreate($up);
            }
        }

        $data = $this->rows->keyBy('id')->toArray();
        $this->form_data['ids'] = $data;
    }

    public function getRowsProperty(): Collection
    {
        $model_id = $this->model_id;
        if ('' == $model_id) {
            $model_id = null;
        }

        $rows = ExtraFieldGroupMorph::where('model_type', $this->model_type)
            ->where('model_id', $model_id)
            ->where('user_id', null)
            ->get();

        return $rows;
    }

    public static function getName(): string
    {
        return 'extra-field-groups.morph.edit';
    }

    public function render(): Renderable
    {
        /**
         * @phpstan-var view-string
         */
        $view = app(GetViewAction::class)->execute($this->tpl);

        $view_params = [
            'view' => $view,
        ];

        return view($view, $view_params);
    }

    public function getFieldsByRow(ExtraFieldGroupMorph $row): DataCollection
    {
        $fields = $this->fields;

        $panel = PanelService::make()->get($row);

        $panel_fields = collect($panel->fields())->filter(
            function ($item) use ($fields) {
                return in_array($item->name, $fields);
            }
        )->map(function ($item) use ($row, $panel) {
            return [
                'label' => trans($panel->getTradMod().'.field.'.$item->name.'.label'),
                'name' => 'ids.'.$row->id.'.'.$item->name,
                'type' => $item->type,
                'col_size' => $item->col_size ?? 4,
            ];
        });

        $res = FieldData::collection($panel_fields->toArray());

        return $res;
    }

    public function save()
    {
        foreach ($this->form_data['ids'] as $id => $data) {
            $up = collect($data)->only($this->fields)->all();
            $res = ExtraFieldGroupMorph::find($id)?->update($up);
        }
        session()->flash('message', 'successfully updated.['.now().']');
    }
}
