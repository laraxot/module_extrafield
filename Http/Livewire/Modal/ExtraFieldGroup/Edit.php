<?php

declare(strict_types=1);

namespace Modules\ExtraField\Http\Livewire\Modal\ExtraFieldGroup;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Support\Facades\Auth;
use Modules\ExtraField\Actions;
use Modules\ExtraField\Actions\ExtraFieldGroup\GetRulesByGroupId;
use Modules\ExtraField\Models\Contracts\HasExtraFieldGroupsContract;
use Modules\UI\Actions\GetViewAction;
use Modules\UI\Datas\FieldData;
use Modules\Wire\Concerns\InteractsWithConfirmationModal;
use Modules\Wire\View\Components\Modal\Modal;
use Modules\Xot\Actions\GetModelByModelTypeAction;

class Edit extends Modal
{
    use InteractsWithConfirmationModal;

    public array $form_data = [];
    public string $uuid;
    public string $model_type;
    public string $model_id;
    public string $user_id;
    public array $fields = [];
    public HasExtraFieldGroupsContract $model;
    public bool $can_verified;
    public string $extra_field_group_id;

    /**
     * @var array<string, string>
     */
    protected $listeners = ['updateFormData' => 'updateFormData'];

    public function mount(string $uuid, string $model_type, string $model_id, bool $can_verified, string $extra_field_group_id): void
    {
        $this->uuid = $uuid;
        $this->model_type = $model_type;
        $this->model_id = $model_id;
        $this->can_verified = $can_verified;
        $this->extra_field_group_id = $extra_field_group_id;
        $this->user_id = strval(Auth::id());
        $fields_data = app(Actions\ExtraFieldGroup\GetFieldCollByUuidModelTypeModelId::class)->execute($uuid, $model_type, $model_id);

        foreach ($fields_data as $field) {
            $k = $field->name;
            $v = $field->value;
            $this->form_data[$k] = $v;
        }
        $this->fields = $fields_data->toArray();
    }

    public function getModel(): HasExtraFieldGroupsContract
    {
        $model = app(GetModelByModelTypeAction::class)->execute($this->model_type, $this->model_id);
        if (! $model instanceof HasExtraFieldGroupsContract) {
            throw new \Exception('add on class ['.get_class($model).'] implements HasExtraFieldGroupsContract');
        }

        return $model;
    }

    public function toFieldData(array $field): FieldData
    {
        return FieldData::from($field);
    }

    public function render(): Renderable
    {
        /**
         * @phpstan-var view-string
         */
        $view = app(GetViewAction::class)->execute();

        $view_params = [
            'view' => $view,
        ];

        return view($view, $view_params);
    }

    public static function getName(): string
    {
        return 'modal.extra-field-group.edit';
    }

    public function rules(): array
    {
        $rules = app(GetRulesByGroupId::class)->execute($this->extra_field_group_id, 'form_data.');

        $convertedRules = app(GetRulesByGroupId::class)->convert($rules);

        return $convertedRules;
    }

    public function preSave(): void
    {
        $compatibleServices = app(Actions\ExtraFieldGroup\GetServicesByUserIdUuid::class)->execute($this->user_id, $this->uuid);

        $this->askForConfirmation(
            callback: function () {
                $this->confirmSave();
            },

            prompt: [
                'title' => __('Attenzione: Questi servizi verranno modificati'),

                'message' => __('Sei sicuro di voler effettuare il cambiamento?'),

                'confirm' => __('Si, sicuro!'),

                'cancel' => __('No. Torna indietro'),
            ],

            tableHeaders: ['Nome Servizio'],

            tableData: [$compatibleServices->pluck('name', 'id')->toArray()],

            theme: 'warning',

            metaData: [
                'custom' => 'meta data',
            ],

            modalBehavior: [
                'close-on-escape' => false,

                'close-on-backdrop-click' => false,

                'trap-focus' => true,
            ],

            modalAttributes: [
                'size' => '2xl',
            ]
        );
    }

    public function confirmSave()
    {
        // TO-DO: controllare. non deve validare se le rules sono vuote
        if (! empty($this->rules())) {
            $this->validate($this->rules());
        }

        app(Actions\ExtraFieldGroup\UpdateByUuid::class)->execute($this->uuid, $this->form_data);

        $this->emit('refresh');

        $this->close();
    }

    public function updateFormData(array $data): void
    {
        $this->form_data = array_merge($this->form_data, $data);
    }

    public function updated($name, $value)
    {
        $this->emit('updatedFormDataVerified', $this->form_data);
    }

    public function refresher()
    {
        $this->emit('refresh');
        $this->close();
    }

    public static function behavior(): array
    {
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

    public static function attributes(): array
    {
        return [
            // Set the modal size to 2xl, you can choose between:
            // xs, sm, md, lg, xl, 2xl, 3xl, 4xl, 5xl, 6xl, 7xl
            'size' => '3xl',
        ];
    }
}
