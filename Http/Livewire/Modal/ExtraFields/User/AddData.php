<?php

declare(strict_types=1);

namespace Modules\ExtraField\Http\Livewire\Modal\ExtraFields\User;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Support\Facades\Auth;
use WireElements\Pro\Components\Modal\Modal;

class AddData extends Modal
{
    public string $title;
    public array $form_data = [];
    public string $cat_id;
    public string $user_id;
    public string $model_type;
    public int $model_id;

    /**
     * @var array<string, string>
     */
    protected $listeners = [
        'update_form_data' => 'updateFormData',
        'save' => 'save',
    ];

    public function mount(string $cat_id, string $model_type, int $model_id): void
    {
        // $this->model = config('morph_map')[$model_type]::find($model_id);
        $this->model_type = $model_type;
        $this->model_id = $model_id;
        $this->user_id = (string) Auth::id();
        $this->cat_id = $cat_id;
    }

    public function render(): Renderable
    {
        /**
         * @phpstan-var view-string
         */
        $view = 'extrafield::livewire.modal.model.user.add_data';

        $view_params = [
            'view' => $view,
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
    /*
    public function updateFormData(array $form_data): void {
        foreach ($form_data as $key => $value) {
            $this->form_data[$key] = $value;
        }
    }

    public function save(): void {
        // dddx($this->form_data);
        $user_datum = new UserDatum();
        $user_datum->user_id = $this->user_id;
        $user_datum->label = $this->form_data['label'];
        $user_datum->data_id = $this->form_data['data_id'];
        $user_datum->value = $this->form_data['value'];
        $user_datum->save();
        // dddx($user_datum);

        $this->emit('refresh', $user_datum->data->category->id);
        $this->close();
    }
    */
}
