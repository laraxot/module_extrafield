<?php

declare(strict_types=1);

namespace Modules\ExtraField\Http\Livewire;

use Barryvdh\Debugbar\Facades\Debugbar;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Livewire\Component;
use Modules\Blog\Models\Category;
use Modules\Cms\Actions\GetViewAction;
use Modules\ExtraField\Actions\GetExtraFieldGroupCategoriesByModelTypeAction;
use Modules\ExtraField\Models\ExtraFieldGroupMorph;
use Modules\ExtraField\Models\ExtraFieldMorph;
use Modules\PFed\Actions\SendConsentsUpdateNotifyToCompanyAction;
use Modules\PFed\Models\Service;
use Modules\Xot\Actions\GetModelTypeByModelAction;
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
    public string $model_id;
    public ?string $category_name;
    /**
     * Undocumented variable.
     *
     * @var array<string, string>
     */
    protected $listeners = ['refreshExtraFields' => '$refresh'];

    public function mount(Model $model, string $tpl = 'v4'): void {
        $this->model = $model;
        $model_id = ''.$model->getKey();
        $this->model_id = $model_id;
        // $this->model_type = Str::snake(class_basename($this->model));
        $this->model_type = app(GetModelTypeByModelAction::class)->execute($this->model);
        $this->user_id = (string) Auth::id();
        $this->tpl = $tpl;

        $default_category = Category::ofType('profile')->firstWhere('slug', config('profile.default'))?->id;
        if (null != $default_category) {
            $this->showCat((string) $default_category);
        }
    }

    public static function getName(): string {
        return 'extra-fields';
    }

    public function render(): Renderable {
        // $this->showPage();
        if ('' != $this->cat_id) {
            // $groups = $this->model->getFavouriteGroups($this->cat_id);
            $groups = app(\Modules\ExtraField\Actions\ExtraFieldGroup\GetFavorites::class)
                ->execute($this->model, $this->cat_id);
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

    public function checkRequiredFields($data) {
        // vede se stai cancellando campi obbligatori
        // se si deve cancellare tutti i pivot del servizio
        $required = ExtraFieldMorph::where($data)->get()->filter(function ($extra_field) {
            $ret = Arr::get($extra_field->extraField->rules, 'required.checked', false);

            return $ret;
        });
        // type bool
        $required = $required->count() > 1 ?? false;

        return $required;
    }

    public function edit(string $uuid) {
        $parz = [
            'uuid' => $uuid,
            'model_type' => $this->model_type,
            'model_id' => $this->model_id,
        ];
        $this->emit('modal.open', 'modal.extra-fields.edit-data', $parz);
    }

    public function delete(string $uuid) {
        $message = Service::updatingServicesList($this->user_id, $uuid);
        $updating_services = Service::getServicesWithUuid($this->user_id, $uuid);

        $data = [
            'uuid' => $uuid,
            'user_id' => $this->user_id,
        ];
        $efg = ExtraFieldGroupMorph::where($data)->first()->extraFieldGroup;

        $group_name = $efg->name;

        $is_required_fields = $this->checkRequiredFields($data);

        $ef = ExtraFieldMorph::where($data)->where('model_type', 'service')->get();

        $this->askForConfirmation(
            callback: function () use ($is_required_fields, $ef, $updating_services, $data, $group_name) {
                // i campi del profile li cancella a prescindere
                ExtraFieldMorph::where($data)?->delete();
                ExtraFieldGroupMorph::where($data)?->delete();

                if (true == $is_required_fields) {
                    $updating_services->map(function ($service) {
                        $company = $service->company;

                        $updates = collect([
                            'Disiscrizione dal Servizio' => $service->name,
                        ]);
                        app(SendConsentsUpdateNotifyToCompanyAction::class)->execute($company, $updates);
                    });

                    // cancella i campi dei service
                    $ef->map(function ($item) {
                        $d = [
                            'model_type' => $item->model_type,
                            'model_id' => $item->model_id,
                            'user_id' => $item->user_id,
                        ];
                        ExtraFieldMorph::where($d)?->delete();
                    });
                } else {
                    $updating_services->map(function ($service) use ($group_name) {
                        $company = $service->company;

                        $updates = collect([
                            'Eliminazione Dati del Gruppo' => $group_name,
                        ]);
                        app(SendConsentsUpdateNotifyToCompanyAction::class)->execute($company, $updates);
                    });
                }

                session()->flash('message', 'Post successfully updated.');

                Debugbar::info('refreshExtraFields');
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

    public function addFields() {
        $parz = [
            'cat_id' => $this->cat_id,
            'model_type' => $this->model_type,
            'model_id' => $this->model_id,
        ];
        $this->emit('modal.open', 'modal.extra-fields.add-data', $parz);
    }
}
