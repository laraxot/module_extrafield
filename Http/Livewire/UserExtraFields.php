<?php

declare(strict_types=1);

namespace Modules\ExtraField\Http\Livewire;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Livewire\Component;
use Modules\Blog\Models\Category;
use Modules\Cms\Actions\GetViewAction;
use Modules\ExtraField\Models\Contracts\HasExtraFieldsContract;
use Modules\Xot\Actions\GetModelTypeByModelAction;

// use Modules\PFed\Models\Profile as ProfileModel;

class UserExtraFields extends Component
{
    public string $user_id;

    public string $cat_id = '';
    public string $tpl;

    public HasExtraFieldsContract $model;

    public string $model_type;
    public string $model_id;

    public ?string $category_name;

    public array $groups = [];

    /**
     * Undocumented variable.
     *
     * @var array<string, string>
     */
    protected $listeners = ['refreshExtraFields' => '$refresh'];

    public function mount(HasExtraFieldsContract $model, string $tpl = 'v1'): void
    {
        $this->model = $model;
        $model_id = ''.$this->model->getKey();
        $this->model_id = $model_id;
        // $this->model_type = Str::snake(class_basename($this->model));
        $this->model_type = app(GetModelTypeByModelAction::class)->execute($this->model);
        $this->user_id = (string) Auth::id();
        $this->tpl = $tpl;
    }

    // public function getProfileProperty() {
    //     return ProfileModel::where('user_id', $this->user_id)->first();
    // }

    public function render(): Renderable
    {
        /**
         * @phpstan-var view-string
         */
        $view = app(GetViewAction::class)->execute($this->tpl);

        $this->showPage();
        $categories = Category::ofType($this->model_type)->get();

        $view_params = [
            'view' => $view,
            'categories' => $categories,
        ];

        return view($view, $view_params);
    }

    public function showPage(): void
    {
        $res = $this->model->extraFields()
        ->wherePivot('user_id', null);

        $rows = $res->get();

        $res = $rows->groupBy('group_id')
            ->map(
                function ($items, $group_id) {
                    $first = $items->first();
                    if (null == $first) {
                        throw new \Exception('['.__LINE__.']['.__FILE__.']');
                    }

                    return [
                        'id' => $group_id,
                        'label' => $first->group->name,
                        'items_grouped' => $items->groupBy('pivot.uuid'),
                    ];
                });

        $this->groups = $res->all();
    }
}
