<?php

declare(strict_types=1);

namespace Modules\ExtraField\Http\Livewire;

use Illuminate\Contracts\Support\Renderable;
use Livewire\Component;
use Modules\Cms\Actions\GetViewAction;

/**
 * @property array  $form_data
 * @property string $field_name
 * @property string $tpl
 */
class Verified extends Component {
    public function mount(string $field_name, string $tpl = 'v1'): void {
        $this->form_data = [];
        $this->field_name = $field_name;
        $this->tpl = $tpl;
    }

    public function updateFormData(): void {
        $this->emit('updateFormData', $this->form_data);
    }

    public function render(): Renderable {
        /**
         * @phpstan-var view-string
         */
        $view = app(GetViewAction::class)->execute($this->tpl);

        $view_params = [
            'field_name' => $this->field_name,
            'view' => $view,
        ];

        return view($view, $view_params);
    }
}
