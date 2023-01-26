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

    public ?string $category_name;

    public array $groups = [];

    protected $listeners = ['refreshProfile' => '$refresh'];

    public function mount(Model $model, string $tpl = 'v1'): void {
        $this->model = $model;
        $this->user_id = Auth::id();
        $this->tpl = $tpl;
    }

    // public function getProfileProperty() {
    //     return ProfileModel::where('user_id', $this->user_id)->first();
    // }

    public function render(): Renderable {
        /**
         * @phpstan-var view-string
         */
        $view = 'extrafield::livewire.extra_fields.'.$this->tpl;
        $type = Str::snake(class_basename($this->model));

        $categories = Category::ofType($type)->get();

        if (0 == $categories->count()) {
            $config_key = $type.'.categories';
            $all = config($config_key);
            if (! is_array($all)) {
                $msg = 'create config key ['.$config_key.']';
                throw new \Exception($msg);
            }
            $res = $this->model->attachCategories($all);
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

        $res = $this->model->extraFields()->withAnyCategories($id);
        // dddx(rowsToSql($res));
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
}
