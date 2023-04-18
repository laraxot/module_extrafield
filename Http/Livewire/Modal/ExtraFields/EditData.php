<?php

declare(strict_types=1);

namespace Modules\ExtraField\Http\Livewire\Modal\ExtraFields;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Modules\Cms\Actions\GetViewAction;
use Modules\PFed\Actions\SendConsentsUpdateNotifyToCompanyAction;
use Modules\PFed\Models\Service;
use Modules\UI\Datas\FieldData;
use WireElements\Pro\Components\Modal\Modal;
use WireElements\Pro\Concerns\InteractsWithConfirmationModal;

class EditData extends Modal {
    use InteractsWithConfirmationModal;

    public string $title;
    public array $form_data = [];
    public string $user_id;
    public string $uuid;
    public string $model_type;
    public int $model_id;
    public Model $model;
    protected $listeners = ['updateFormData' => 'updateFormData'];

    public function mount(string $uuid, string $model_type, int $model_id): void {
        $this->uuid = $uuid;
        $this->model_type = $model_type;
        $this->model_id = $model_id;
        $model_class = collect(config('morph_map'))->get($this->model_type);
        $this->model = app($model_class)->find($this->model_id);

        $this->user_id = (string) Auth::id();

        $this->form_data = $this->model->getUserExtraFieldFormData($this->user_id, $this->uuid);
        $form_data2 = app(\Modules\ExtraField\Actions\ExtraFieldGroup\GetFormData::class)->execute($this->model, $this->user_id, $this->uuid);
        dddx([
            'uno' => $this->form_data,
            'due' => $form_data2,
        ]);

        // SE QUALCUNO LO CANCELLASSE, SPIEGHI ANCHE COME FARLO MEGLIO, PER FAVORE
        session()->flash('form_data', $this->form_data);

        // dddx($this->form_data);
    }

    public static function getName() {
        return 'modal.extra-fields.edit-data';
    }

    public function updateFormData($data) {
        $this->form_data = array_merge($this->form_data, $data);
    }

    public function getModelProperty() {
        return $this->model::where('user_id', $this->user_id)->first();
    }

    public function render(): Renderable {
        $groups = $this->model->getUserExtraFieldValue($this->user_id, $this->uuid);
        $group = collect($groups)->first();
        $fields = $group['fields'];
        /*
         * @phpstan-var view-string
         */
        $view = app(GetViewAction::class)->execute();

        $view_params = [
            'view' => $view,
            'fields' => FieldData::collection($fields),
        ];

        return view($view, $view_params);
    }

    public static function behavior(): array {
        return [
            // Close the modal if the escape key is pressed
            'close-on-escape' => true,
            // Close the modal if someone clicks outside the modal
            'close-on-backdrop-click' => false,
            // Trap the users focus inside the modal (e.g. input autofocus and going back and forth between input fields)
            'trap-focus' => true,
            // Remove all unsaved changes once someone closes the modal
            'remove-state-on-close' => false,
        ];
    }

    public static function attributes(): array {
        return [
            // Set the modal size to 2xl, you can choose between:
            // xs, sm, md, lg, xl, 2xl, 3xl, 4xl, 5xl, 6xl, 7xl
            'size' => 'xl',
        ];
    }

    public function save() {
        $message = Service::updatingServicesList($this->user_id, $this->uuid);

        $this->askForConfirmation(
            callback: function () {
                $this->saveConfirmed();
            },
            prompt: [
                'title' => __('Attenzione!'),
                'message' => __('I seguenti servizi saranno modificati:'),
                'confirm' => __('Si, confermo'),

                'cancel' => __('Annulla'),
            ],
            tableHeaders: [''],

            tableData: $message,
        );
    }

    public function saveConfirmed() {
        $updating_services = Service::getServicesWithUuid($this->user_id, $this->uuid);
        $updating_services->map(function ($service) {
            $company = $service->company;

            $updates = collect([
                'Modifica Dati di Sistema del Servizio' => $service->name,
            ]);

            foreach ($this->form_data as $field => $value) {
                $updates->put($field, $value);
            }

            app(SendConsentsUpdateNotifyToCompanyAction::class)->execute($company, $updates);
        });

        // dd($this->form_data, $updating_services);

        $efr = $this->model->getExtraFieldRules($this->form_data);

        if (! empty($efr)) {
            $this->validate($efr);
        }

        $this->model->updateUserExtraFieldByGroupTest($this->form_data, $this->user_id, $this->uuid);

        $groups = $this->model->getUserExtraFieldValue($this->user_id, $this->uuid);
        $group_name = str()->slug(collect($groups)->first()['name']);

        $user_services = Service::getServicesWithUuid($this->user_id, $this->uuid);

        $user_services->map(function ($service) use ($group_name) {
            $service->updateUserExtraFieldByGroupAndProfileFieldUuid([$group_name => $this->uuid], $this->user_id);
        });

        $this->close();

        $this->emit('refreshExtraFields');

        session()->flash('message', 'Post successfully updated.');
    }
}
