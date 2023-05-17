<?php

declare(strict_types=1);

namespace Modules\ExtraField\Http\Livewire\ExtraFieldGroups;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Modules\Cms\Actions\GetViewAction;
use Modules\ExtraField\Actions\GetExtraFieldGroupCategoriesByModelTypeAction;
use Modules\ExtraField\Models\Contracts\HasExtraFieldGroupsContract;
use Modules\ExtraField\Models\ExtraFieldGroup;
use Modules\Wire\Concerns\InteractsWithConfirmationModal;
use Modules\Xot\Actions\GetModelTypeByModelAction;

class Manage extends Component
{
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

    public function mount(HasExtraFieldGroupsContract $model, string $tpl = 'v1'): void
    {
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

    public static function getName(): string
    {
        return 'extra-field-groups.manage';
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
}
