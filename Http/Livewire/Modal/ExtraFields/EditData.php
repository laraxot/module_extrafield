<?php

declare(strict_types=1);

namespace Modules\PFed\Http\Livewire\Modal\Profile;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Support\Facades\Auth;
use Modules\PFed\Models\Profile as ProfileModel;
use Modules\UI\Datas\FieldData;
use WireElements\Pro\Components\Modal\Modal;

class EditData extends Modal
{
    public string $title;
    public array $form_data = [];
    public string $user_id;
    public string $uuid;

    public function mount(string $uuid): void
    {
        $this->user_id = (string) Auth::id();
        $this->uuid = $uuid;

        // $fields = FieldData::collection($rows);

        $data = $this->rows->pluck('pivot.value', 'name')->all();

        $this->form_data = $data;
    }

    public function getProfileProperty()
    {
        return ProfileModel::where('user_id', $this->user_id)->first();
    }

    public function getRowsProperty()
    {
        $rows = $this->profile
        ->extraFields()
        ->wherePivot('uuid', $this->uuid)
        ->get();

        return $rows;
    }

    public function render(): Renderable
    {
        /**
         * @phpstan-var view-string
         */
        $view = 'pfed::livewire.modal.profile.edit_data';

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

    public function save()
    {
        $rows = $this->rows;
        foreach ($rows as $row) {
            $value = collect($this->form_data)->get($row->name);
            $row->pivot->update(['value' => $value]);
        }
        $this->emit('refreshProfile');
    }
}
