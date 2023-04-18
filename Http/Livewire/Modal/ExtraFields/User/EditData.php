<?php

declare(strict_types=1);

namespace Modules\ExtraField\Http\Livewire\Modal\ExtraFields\User;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Database\Eloquent\Collection as EloquentCollection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;
use Modules\Cms\Actions\GetViewAction;
use Modules\UI\Datas\FieldData;
use Modules\Xot\Actions\GetModelByModelTypeAction;
use WireElements\Pro\Components\Modal\Modal;

/**
 * ---.
 */
class EditData extends Modal {
    public string $title;
    public array $form_data = [];
    public string $user_id;
    public string $uuid;
    public string $model_type;
    public string $model_id;
    public Model $model;
    public EloquentCollection $rows;

    // verificare o cambiare

    public function mount(string $uuid, string $model_type, string $model_id): void {
        $this->model_type = $model_type;
        $this->model_id = $model_id;
        $this->model = app(GetModelByModelTypeAction::class)->execute($this->model_type, $this->model_id);

        $this->user_id = (string) Auth::id();
        $this->uuid = $uuid;

        $data = $this->rows->map(function ($item) {
            return [
                'name' => $item->name,
                'value' => $item->pivot->userValue($this->user_id),
            ];
        })->pluck('value', 'name')
            ->all();

        $this->form_data = $data;
    }

    public function getModelProperty() {
        return $this->model::where('user_id', $this->user_id)->first();
    }

    public function getRowsProperty() {
        $rows = $this->model
            ->extraFields()
            // ->wherePivot('user_id', $this->user_id)
            // ->wherePivot('uuid', $this->uuid)
            ->wherePivot('user_id', null)
            ->get();
        // dddx($rows);
        // dddx($rows->first()->pivot->userValue($this->user_id));

        return $rows;
    }

    public function render(): Renderable {
        /**
         * @phpstan-var view-string
         */
        $view = app(GetViewAction::class)->execute();
        // dddx(FieldData::collection($this->rows));
        $view_params = [
            'view' => $view,
            'fields' => FieldData::collection($this->rows),
        ];

        return view($view, $view_params);
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
            // $row->pivot->update(['value' => $value]);
            // $row->pivot->extraFieldMorphUserValues()->create(['value' => $value, 'user_id' => $this->user_id]);
            $row->pivot->updateUserValue($this->user_id, $value);
        }

        $this->close();
        $this->emit('refreshExtraFields');
        session()->flash('message', 'Post successfully updated.');
    }
}
