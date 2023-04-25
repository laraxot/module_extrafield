<?php

declare(strict_types=1);

namespace Modules\ExtraField\Http\Livewire\ExtraFieldGroups\By;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Modules\Blog\Models\Category as CategoryModel;
use Modules\Cms\Actions\GetViewAction;
use Modules\ExtraField\Actions;
use Modules\ExtraField\Actions\GetExtraFieldGroupCategoriesByModelTypeAction;
use Modules\ExtraField\Models\Contracts\HasExtraFieldsContract;
use Modules\ExtraField\Models\ExtraFieldGroupMorph;
use Modules\Xot\Actions\GetModelTypeByModelAction;
use WireElements\Pro\Concerns\InteractsWithConfirmationModal;

class Category extends Component
{
    use InteractsWithConfirmationModal;

    public string $user_id;
    public string $cat_id = '';
    public string $tpl;
    public HasExtraFieldsContract $model;
    public string $model_type;
    public string $model_id;
    public ?string $category_name;
    /**
     * Undocumented variable.
     *
     * @var array<string, string>
     */
    protected $listeners = ['refresh' => '$refresh'];

    public function mount(HasExtraFieldsContract $model, string $tpl = 'v1'): void
    {
        $this->model = $model;
        $this->model_id = strval($model->getKey());
        $this->model_type = app(GetModelTypeByModelAction::class)->execute($this->model);
        $this->user_id = strval(Auth::id());
        $this->tpl = $tpl;
    }

    public static function getName(): string
    {
        return 'extra-field-groups.by.category';
    }

    public function render(): Renderable
    {
        /**
         * @phpstan-var view-string
         */
        $view = app(GetViewAction::class)->execute($this->tpl);

        $categories = app(GetExtraFieldGroupCategoriesByModelTypeAction::class)->execute($this->model_type);

        $groups = $this->getGroups($categories);

        $view_params = [
            'view' => $view,
            'categories' => $categories,
            'groups' => $groups,
        ];

        return view($view, $view_params);
    }

    public function getGroups(Collection $categories): Collection
    {
        if ('' == $this->cat_id) {
            $this->cat_id = $categories->first()->id;
        }

        return app(Actions\ExtraFieldGroup\GetByModelUserIdCategoryId::class)
            ->execute($this->model, $this->user_id, $this->cat_id);
    }

    public function showCat(string $cat_id): void
    {
        $this->cat_id = $cat_id;
        $category = CategoryModel::find($cat_id);
        if (null == $category) {
            return;
        }
        $this->category_name = $category->name;
    }

    public function toggleFavourite(string $uuid): void
    {
        $row = ExtraFieldGroupMorph::firstWhere(['uuid' => $uuid]);
        if (null == $row) {
            dddx(['row' => $row, 'uuid' => $uuid]);
        }
        $row->update(['favourite' => ! $row->favourite]);
    }
}
