<?php

declare(strict_types=1);

namespace Modules\ExtraField\Http\Livewire;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Livewire\Component;

// use Modules\PFed\Models\Profile as ProfileModel;

class ExtraFields extends Component {
    /**
     * Summary of user_id.
     *
     * @var int|string|null
     */
    public $user_id;

    public string $cat_id = '';
    public string $tpl;

    public Model $model;

    public string $model_type;
    public int $model_id;

    public ?string $category_name;

    public array $groups = [];

    protected $listeners = ['refreshExtraFields' => '$refresh'];

    public function mount(Model $model, string $tpl = 'v1'): void {
        $this->model = $model;
        $this->model_id = $this->model->id;
        $this->model_type = Str::snake(class_basename($this->model));
        $this->user_id = Auth::id();
        $this->tpl = $tpl;
    }

    public function render(): Renderable {
        $this->showPage();
        /**
         * @phpstan-var view-string
         */
        $view = 'extrafield::livewire.extra_fields.'.$this->tpl;

        $view_params = [
            'view' => $view,
        ];

        return view($view, $view_params);
    }

    public function showPage(): void {
        $res = $this->model->extraFields()
            ->wherePivot('user_id', null);

        $rows = $res->get();

        $res = $rows->groupBy('group_id')
            ->map(function ($items, $group_id) {
                $first = $items->first();

                return [
                    'id' => $group_id,
                    'label' => $first->group->name,
                    'items_grouped' => $items->groupBy('pivot.uuid'),
                ];
            });

        $this->groups = $res->all();
    }

    public function delete($id) {
        dddx(config('morph_map')[$this->model_type]::findOrFail($this->model_id));
        dddx([$id, $this->model]);
    }
}
