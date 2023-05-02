<?php

declare(strict_types=1);

namespace Modules\ExtraField\Http\Livewire\Modal\ExtraFieldGroup;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Support\Facades\Auth;
use Modules\ExtraField\Actions;
use Modules\ExtraField\Models\Contracts\HasExtraFieldGroupsContract;
use Modules\UI\Actions\GetViewAction;
use Modules\UI\Datas\FieldData;
use Modules\Xot\Actions\GetModelByModelTypeAction;
use WireElements\Pro\Components\Modal\Modal;

class Edit extends Modal
{
    public array $form_data = [];
    public string $uuid;
    public string $model_type;
    public string $model_id;
    public string $user_id;
    public array $fields = [];
    public HasExtraFieldGroupsContract $model;

    /**
     * @var array<string, string>
     */
    protected $listeners = [
    ];

    public function mount(string $uuid, string $model_type, string $model_id): void
    {
        $this->uuid = $uuid;
        $this->model_type = $model_type;
        $this->model_id = $model_id;
        $this->user_id = strval(Auth::id());
        $this->fields = app(Actions\ExtraFieldGroup\GetFieldCollByUuidModelTypeModelId::class)->execute($uuid, $model_type, $model_id)->toArray();

        foreach ($this->fields as $field) {
            $k = $field['name'];
            $v = $field['value'];
            $this->form_data[$k] = $v;
        }
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

    public function save(): void
    {
        app(Actions\ExtraFieldGroup\UpdateByUuid::class)->execute($this->uuid, $this->form_data);

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
            'size' => 'xl',
        ];
    }
}
