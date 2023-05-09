<?php

declare(strict_types=1);

namespace Modules\ExtraField\Http\Livewire;

use Illuminate\Contracts\Support\Renderable;
use Livewire\Component;
use Modules\Cms\Actions\GetViewAction;

/**
 * @property string $form_data
 * @property string $tpl
 */
class Verified extends Component
{
    public function mount(string $tpl = 'v1'): void
    {
        $this->form_data = [];
        $this->tpl = $tpl;
    }

    public function updateFormData(): void
    {
        $this->emit('updateFormData', $this->form_data);
    }

    public function render(): Renderable
    {
        /**
         * @phpstan-var view-string
         */
        $view = app(GetViewAction::class)->execute($this->tpl);

        $view_params = [
            'view' => $view,
        ];

        return view($view, $view_params);
    }
}
