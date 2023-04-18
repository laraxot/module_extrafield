<?php

declare(strict_types=1);

namespace Modules\ExtraField\Http\Livewire\Modal\UserExtraFieldGroup;

use Illuminate\Contracts\Support\Renderable;
use Modules\Cms\Actions\GetViewAction;
use Modules\ExtraField\Models\ExtraFieldGroup;
use Modules\UI\Datas\FieldData;
use Modules\Xot\Datas\XotData;
use WireElements\Pro\Components\Modal\Modal;

class Create extends Modal {
    public string $tpl = 'v1';
    public string $extra_field_group_id;
    public string $user_id;

    public array $form_data = [];
    public array $fields_arr;

    public function mount(string $extra_field_group_id, string $user_id): void {
        $this->extra_field_group_id = $extra_field_group_id;
        $this->user_id = $user_id;
        $extra_field_group = ExtraFieldGroup::findOrFail($this->extra_field_group_id);

        $rows = $extra_field_group->fields;

        $fields = FieldData::collection($rows->all())->toArray();
        $this->fields_arr = $fields;
    }

    /**
     * @return string
     */
    public static function getName() {
        return 'modal.user-extra-field-group.create';
    }

    public function render(): Renderable {
        /**
         * @phpstan-var view-string
         */
        $view = app(GetViewAction::class)->execute($this->tpl);

        $view_params = [
            'view' => $view,
            'fields' => FieldData::collection($this->fields_arr),
        ];

        return view($view, $view_params);
    }

    public function save() {
        // app()

        $xot = XotData::from(config('xra'));
        $profile = $xot->getProfileModelByUserId($this->user_id);
        app(\Modules\ExtraField\Actions\ExtraFieldGroup\Create::class)
            ->execute($profile, $this->extra_field_group_id, $this->user_id, $this->form_data);

        session()->flash('message', 'saved !');
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
