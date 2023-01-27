<?php

declare(strict_types=1);

namespace Modules\ExtraField\Http\Livewire;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Livewire\Component;
use Modules\Blog\Models\Category;

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
        /**
         * @phpstan-var view-string
         */
        $view = 'extrafield::livewire.extra_fields.'.$this->tpl;

        $categories = Category::ofType($this->model_type)->get();

        if (0 == $categories->count()) {
            $all = config($this->model_.'.categories');
            if (! is_array($all)) {
                dddx($this->model_.'.categories');
            }
            // $profile = $this->profile;
            $res = $this->model->attachCategories($all);
            // dddx($res);
        }

        $this->showCat($this->cat_id);
        $view_params = [
            'view' => $view,
            'categories' => $categories,
            // 'profile' => $profile,
        ];

        return view($view, $view_params);
    }

    public function showCat(string $id): void {
        $this->cat_id = $id;
        $category = Category::find($id);
        if (null == $category) {
            return;
        }
        $this->category_name = $category->name;

        $res = $this->model->extraFields()
            ->wherePivot('user_id', null)
            ->withAnyCategories($id);
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
