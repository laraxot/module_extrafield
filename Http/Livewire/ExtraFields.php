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
use Modules\ExtraField\Actions\GetExtraFieldGroupCategoriesByModelTypeAction;
use Modules\ExtraField\Models\ExtraFieldGroupMorph;
use Modules\ExtraField\Models\ExtraFieldMorph;
use Modules\PFed\Models\Service;
use WireElements\Pro\Concerns\InteractsWithConfirmationModal;

// use Modules\PFed\Models\Profile as ProfileModel;

class ExtraFields extends Component {
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

    public function mount(Model $model, string $tpl = 'v4'): void {
        $this->model = $model;
        $this->model_id = $model->getKey();
        $this->model_type = Str::snake(class_basename($this->model));
        $this->user_id = Auth::id();
        $this->tpl = $tpl;
    }

    public static function getName(): string {
        return 'extra-fields';
    }

    public function render(): Renderable {
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

    public function showCat(string $cat_id): void {
        $this->cat_id = $cat_id;
        $category = Category::find($cat_id);
        if (null == $category) {
            return;
        }
        $this->category_name = $category->name;
    }

    public function setFavouriteGroup($group_id, $uuid) {
        $this->model->setFavouriteGroup($group_id, $uuid);
    }

    public function delete(string $uuid) {
        $message = Service::updatingServicesList($this->user_id, $uuid);
        $data = [
            'uuid' => $uuid,
            'user_id' => $this->user_id,
        ];
        $group_name = ExtraFieldGroupMorph::where($data)->first()->extraFieldGroup->name;

        $this->askForConfirmation(
            callback: function () use ($data) {
                ExtraFieldMorph::where($data)?->delete();
                ExtraFieldGroupMorph::where($data)?->delete();

                session()->flash('message', 'Post successfully updated.');
                $this->emit('refreshExtraFields');
            },
            prompt: [
                'title' => __('Eliminazione del gruppo di campi "'.$group_name.'"'),
                'message' => __('Questo comporterà la modifica dei seguenti servizi:'),
                'confirm' => __('Si, confermo'),

                'cancel' => __('Annulla'),
            ],
            tableHeaders: [''],

            tableData: $message,
        );
    }
}
