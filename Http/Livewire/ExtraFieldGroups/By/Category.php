<?php

declare(strict_types=1);

namespace Modules\ExtraField\Http\Livewire\ExtraFieldGroups\By;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Database\Eloquent\Collection  as EloquentCollection;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Modules\Blog\Models\Category as CategoryModel;
use Modules\Cms\Actions\GetViewAction;
use Modules\ExtraField\Actions;
use Modules\ExtraField\Actions\GetExtraFieldGroupCategoriesByModelTypeAction;
use Modules\ExtraField\Models\Contracts\HasExtraFieldGroupsContract;
use Modules\ExtraField\Models\ExtraFieldGroup;
use Modules\ExtraField\Models\ExtraFieldGroupMorph;
use Modules\Wire\Concerns\InteractsWithConfirmationModal;
use Modules\Xot\Actions\GetModelTypeByModelAction;

class Category extends Component {
    use InteractsWithConfirmationModal;

    public string $user_id;
    public string $cat_id = '';
    public string $tpl;
    public HasExtraFieldGroupsContract $model;
    public string $model_type;
    public string $model_id;
    public ?string $category_name;
    /**
     * Undocumented variable.
     *
     * @var array<string, string>
     */
    protected $listeners = ['refresh' => '$refresh'];

    public function mount(HasExtraFieldGroupsContract $model, string $tpl = 'v1'): void {
        $this->model = $model;
        /**
         * @var string $model_key
         */
        $model_key = $model->getKey();
        $this->model_id = strval($model_key);
        $this->model_type = app(GetModelTypeByModelAction::class)->execute($this->model);
        $this->user_id = strval(Auth::id());

        $this->tpl = $tpl;

        $extra_field_groups = app(GetExtraFieldGroupCategoriesByModelTypeAction::class)->execute($this->model_type);

        /**
         * @var ExtraFieldGroup $extra_field_group
         */
        $extra_field_group = $extra_field_groups->first();

        if (null !== $extra_field_group) {
            /**
             * @var string $extra_field_group_name
             */
            $extra_field_group_name = $extra_field_group->name;

            $this->category_name = strval($extra_field_group_name);
        }
    }

    public static function getName(): string {
        return 'extra-field-groups.by.category';
    }

    public function render(): Renderable {
        /**
         * @phpstan-var view-string
         */
        $view = app(GetViewAction::class)->execute($this->tpl);

        $categories = app(GetExtraFieldGroupCategoriesByModelTypeAction::class)->execute($this->model_type);

        $groups = $this->getGroups($categories);

        $view_params = [
            'view' => $view,
            'categories' => $categories,
            'groups' => $groups->sortBy('name'),
        ];

        return view($view, $view_params);
    }

    /**
     * Undocumented function.
     *
     * @param Collection<CategoryModel> $categories
     */
    public function getGroups(Collection $categories): Collection {
        if ('' == $this->cat_id) {
            $category_first = $categories->first();

            if (null == $category_first) {
                return collect([]);
            }

            if (! $category_first instanceof CategoryModel) {
                throw new \Exception('['.__LINE__.']['.__FILE__.']');
            }

            /**
             * @var string $first_category_key
             */
            $first_category_key = $category_first->getKey();
            $this->cat_id = strval($first_category_key);
        }

        return app(Actions\ExtraFieldGroup\GetByModelUserIdCategoryId::class)
            ->execute($this->model, $this->user_id, $this->cat_id);
    }

    public function showCat(string $cat_id): void {
        $this->cat_id = $cat_id;
        $category = CategoryModel::find($cat_id);
        if (null == $category) {
            return;
        }

        /**
         * @var string $category_name
         */
        $category_name = $category->name;
        $this->category_name = strval($category_name);
    }

    public function toggleFavourite(string $uuid): void {
        $row = ExtraFieldGroupMorph::firstWhere(['uuid' => $uuid]);
        if (null == $row) {
            dddx(['row' => $row, 'uuid' => $uuid]);
            throw new \Exception('uuid ['.$uuid.'] is empty');
        }
        $row->update(['favourite' => ! $row->favourite]);
    }

    public function addGroup(): void {
        $parz = [
            'cat_id' => $this->cat_id,
            'model_type' => $this->model_type,
            'model_id' => $this->model_id,
        ];
        $this->emit('modal.open', 'modal.extra-field-group.add', $parz);
    }

    public function edit(string $uuid, bool $can_verified, string $extra_field_group_id): void {
        $params = [
            'uuid' => $uuid,
            'model_type' => $this->model_type,
            'model_id' => $this->model_id,
            'can_verified' => $can_verified,
            'extra_field_group_id' => $extra_field_group_id,
        ];
        $this->emit('modal.open', 'modal.extra-field-group.edit', $params);
    }

    public function getFieldsByGroup(ExtraFieldGroup $group): EloquentCollection {
        $pivot = $group->getRelationValue('pivot');
        if (! $pivot instanceof ExtraFieldGroupMorph) {
            throw new \Exception('[][]');
        }
        $uuid = $pivot->uuid;
        $fields = $this->model
                ->extraFieldsByUserId($this->user_id)
                ->wherePivot('uuid', $uuid)
                ->get();

        return $fields;
    }

    public function delete(string $uuid): void {
        // prima di cancellare dovrei far uscire un modal
        // dove mi avverte che tot servizi/consensi verranno modificati
        app(Actions\ExtraFieldGroup\DeleteByUuid::class)->execute($uuid);

        // $this->emit('modal.open', 'modal.extra-field-group.edit', $parz);
    }
}
