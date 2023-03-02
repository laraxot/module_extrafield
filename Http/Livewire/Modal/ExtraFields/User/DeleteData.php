<?php

declare(strict_types=1);

namespace Modules\ExtraField\Http\Livewire\Modal\ExtraFields\User;

use Modules\UI\Datas\FieldData;
use Illuminate\Support\Facades\Auth;
use Modules\Cms\Actions\GetViewAction;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Support\Renderable;
use WireElements\Pro\Components\Modal\Modal;

class DeleteData extends Modal
{
    public string $title;
    public array $form_data = [];
    public string $user_id;
    public string $uuid;
    public string $model_type;
    public int $model_id;
    public Model $model;

    //verificare o cambiare
    public Collection $rows;

    public function mount(string $uuid, string $model_type, int $model_id): void
    {
        $this->model_type = $model_type;
        $this->model_id = $model_id;
        $this->model = config('morph_map')[$this->model_type]::findOrFail($this->model_id);
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

    public function getModelProperty()
    {
        return $this->model::where('user_id', $this->user_id)->first();
    }

    public function getRowsProperty()
    {
        $rows = $this->model
        ->extraFields()
        // ->wherePivot('user_id', $this->user_id)
        ->wherePivot('uuid', $this->uuid)
        ->wherePivot('user_id', null)
        ->get();

        return $rows;
    }

    public function render(): Renderable
    {
        /**
         * @phpstan-var view-string
         */

        $view = app(GetViewAction::class)->execute();

        $view_params = [
            'view' => $view,
            'fields' => FieldData::collection($this->rows),
        ];

        return view($view, $view_params);
    }

    public static function attributes(): array
    {
        return [
            // Set the modal size to 2xl, you can choose between:
            // xs, sm, md, lg, xl, 2xl, 3xl, 4xl, 5xl, 6xl, 7xl
            'size' => 'xl',
        ];
    }

    public function delete()
    {
        $rows = $this->rows;
        // dddx($rows);
        foreach ($rows as $row) {
            $value = collect($this->form_data)->get($row->name);
            $row->pivot->delete();
        }

        $this->close();
        $this->emit('refreshExtraFields');
        session()->flash('message', 'Post successfully updated.');
    }
}