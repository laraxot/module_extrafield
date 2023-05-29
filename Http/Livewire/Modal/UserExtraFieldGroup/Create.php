<?php

declare(strict_types=1);

namespace Modules\ExtraField\Http\Livewire\Modal\UserExtraFieldGroup;

use Illuminate\Contracts\Support\Renderable;
use Modules\Cms\Actions\GetViewAction;
use Modules\ExtraField\Models\ExtraFieldGroup;
use Modules\UI\Datas\FieldData;
use Modules\Wire\View\Components\Modal\Modal;
use Modules\Xot\Datas\XotData;

class Create extends Modal {
    public string $tpl = 'v1';
    public string $extra_field_group_id;
    public string $user_id;
    public bool $can_verified;

    public array $form_data = [];
    public array $fields_arr;

    public string $model_type;
    public string $model_id;

    public function mount(string $extra_field_group_id, string $user_id, bool $can_verified, string $model_type, string $model_id): void {
        $this->extra_field_group_id = $extra_field_group_id;
        $this->user_id = $user_id;
        $this->can_verified = $can_verified;
        $extra_field_group = ExtraFieldGroup::findOrFail($this->extra_field_group_id);

        $rows = $extra_field_group->fields;
        $fields = FieldData::collection($rows->all())->toArray();
        $this->fields_arr = $fields;

        $this->model_type = $model_type;
        $this->model_id = $model_id;
    }

    public static function getName(): string {
        return 'modal.user-extra-field-group.create';
    }

    public function render(): Renderable {
        $fields = FieldData::collection($this->fields_arr);

        /**
         * @phpstan-var view-string
         */
        $view = app(GetViewAction::class)->execute($this->tpl);

        $view_params = [
            'view' => $view,
            'fields' => $fields,
        ];

        return view($view, $view_params);
    }

    public function updated($name, $value) {
        $this->emit('updatedFormDataVerified', $this->form_data);
    }

    /**
     * Undocumented function.
     *
     * @return void
     */
    public function save() {
        $xot = XotData::make();
        $profile = $xot->getProfileModelByUserId($this->user_id);
        app(\Modules\ExtraField\Actions\ExtraFieldGroup\Create::class)
            ->execute($profile, $this->extra_field_group_id, $this->user_id, $this->form_data);

        session()->flash('message', 'saved !');

        $this->emit('refreshComponent');

        $this->emit('modal.close');

        dddx('refreshed');
        // qui bisognerebbe ricaricare/richiamare lo step InsertData
        // $this->showStep('insert-data');
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
}
