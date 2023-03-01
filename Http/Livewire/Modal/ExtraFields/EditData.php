<?php

declare(strict_types=1);

namespace Modules\ExtraField\Http\Livewire\Modal\ExtraFields;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Modules\Cms\Actions\GetViewAction;
use Modules\UI\Datas\FieldData;
use WireElements\Pro\Components\Modal\Modal;

class EditData extends Modal {
    public string $title;
    public array $form_data = [];
    public string $user_id;
    public string $uuid;
    public string $model_type;
    public int $model_id;
    public Model $model;

    protected $listeners = ['updateFormData' => 'updateFormData'];

    public function mount(string $uuid, string $model_type, int $model_id): void {
        $this->uuid = $uuid;
        $this->model_type = $model_type;
        $this->model_id = $model_id;
        $model_class = collect(config('morph_map'))->get($this->model_type);
        // $this->model = [$this->model_type]::findOrFail($this->model_id);
        $this->model = app($model_class)->find($this->model_id);

        $this->user_id = (string) Auth::id();

        // $fields = FieldData::collection($rows);

        // $data = $this->rows->map(function ($item) {
        //     // dddx($item);

        //     return [$item->name => $item->pivot->extraFieldMorphUserValues()->where('user_id', $this->user_id)->get()->last()->value ?? ''];
        // });
        // dddx($this->rows);
        // $data = $this->rows->pluck('pivot.value', 'name')->all();

        $data = $this->rows->map(function ($item) {
            return [
                'name' => $item->name,
                // 'value' => $item->pivot->userValue($this->user_id),
                'value' => $item->pivot->value,
            ];
        })->pluck('value', 'name')
        ->all();

        $this->form_data = $data;

        // SE QUALCUNO LO CANCELLASSE, SPIEGHI ANCHE COME FARLO MEGLIO, PER FAVORE
        session()->flash('form_data', $this->form_data);

        // dddx($this->form_data);
    }

    public function updateFormData($data) {
        $this->form_data = array_merge($this->form_data, $data);
    }

    public function getModelProperty() {
        return $this->model::where('user_id', $this->user_id)->first();
    }

    public function getRowsProperty() {
        $rows = $this->model
        ->extraFields()
        // ->wherePivot('user_id', $this->user_id)
        ->wherePivot('uuid', $this->uuid)
        ->wherePivot('user_id', null)
        ->get();

        return $rows;
    }

    public function render(): Renderable {
        /*
         * @phpstan-var view-string
         */
        $view = app(GetViewAction::class)->execute();
        $view_params = [
            'view' => $view,
            'fields' => FieldData::collection($this->rows),
        ];

        return view($view, $view_params);
    }

    public static function behavior(): array {
        return [
            // Close the modal if the escape key is pressed
            'close-on-escape' => true,
            // Close the modal if someone clicks outside the modal
            'close-on-backdrop-click' => false,
            // Trap the users focus inside the modal (e.g. input autofocus and going back and forth between input fields)
            'trap-focus' => true,
            // Remove all unsaved changes once someone closes the modal
            'remove-state-on-close' => false,
        ];
    }

    public static function attributes(): array {
        return [
            // Set the modal size to 2xl, you can choose between:
            // xs, sm, md, lg, xl, 2xl, 3xl, 4xl, 5xl, 6xl, 7xl
            'size' => 'xl',
        ];
    }

    public function save() {
        $rows = $this->rows;
        foreach ($rows as $row) {
            $value = collect($this->form_data)->get($row->name);
            $row->pivot->update(['value' => $value]);
        }

        $this->close();
        $this->emit('refreshExtraFields');
        session()->flash('message', 'Post successfully updated.');
    }
}
