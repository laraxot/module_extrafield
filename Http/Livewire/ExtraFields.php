<?php

declare(strict_types=1);

namespace Modules\ExtraField\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Str;
use Termwind\Components\Dd;
use Modules\Blog\Models\Category;
use Illuminate\Support\Facades\Auth;
use Modules\Cms\Actions\GetViewAction;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Support\Renderable;
use Modules\ExtraField\Models\ExtraFieldGroup;
use Modules\ExtraField\Models\ExtraFieldMorph;
use Modules\ExtraField\Models\ExtraFieldGroupMorph;
use WireElements\Pro\Concerns\InteractsWithConfirmationModal;
use Modules\ExtraField\Actions\GetExtraFieldGroupCategoriesByModelTypeAction;

// use Modules\PFed\Models\Profile as ProfileModel;

class ExtraFields extends Component
{
    use InteractsWithConfirmationModal;

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
    protected $listeners = ['refreshExtraFields' => '$refresh'];

    public function mount(Model $model, string $tpl = 'v4'): void
    {
        $this->model = $model;
        $this->model_id = $model->getKey();
        $this->model_type = Str::snake(class_basename($this->model));
        $this->user_id = Auth::id();
        $this->tpl = $tpl;
    }

    public static function getName(): string
    {
        return 'extra-fields';
    }

    public function render(): Renderable
    {
        // $this->showPage();
        if ('' != $this->cat_id) {
            $groups = $this->model->getFavouriteGroups($this->cat_id);
        } else {
            $groups = collect([]);
        }

        /**
         * @phpstan-var view-string
         */
        $view = app(GetViewAction::class)->execute($this->tpl);

        $categories = app(GetExtraFieldGroupCategoriesByModelTypeAction::class)->execute($this->model_type);

        $this->showCat($this->cat_id);
        $view_params = [
            'view' => $view,
            'categories' => $categories,
            'groups' => $groups,
        ];

        return view($view, $view_params);
    }

    public function showCat(string $cat_id): void
    {
        $this->cat_id = $cat_id;
        $category = Category::find($cat_id);
        if (null == $category) {
            return;
        }
        $this->category_name = $category->name;
    }

    public function setFavouriteGroup($group_id, $uuid)
    {
        $this->model->setFavouriteGroup($group_id, $uuid);
        //dd([$group_id, $uuid]);
    }

    public function delete(string $uuid)
    {
        $this->askForConfirmation(
            callback: function () use ($uuid) {
                $data = [
                    'uuid' => $uuid,
                    'user_id' => $this->user_id,
                ];
                ExtraFieldMorph::where($data)?->delete();
                ExtraFieldGroupMorph::where($data)?->delete();

                session()->flash('message', 'Post successfully updated.');
                $this->emit('refreshExtraFields');
            },
        );
    }
}
