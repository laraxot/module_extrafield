<?php

declare(strict_types=1);

namespace Modules\ExtraField\Http\Livewire\Modal\ExtraFields;

use Illuminate\Contracts\Support\Renderable;
use Modules\Cms\Actions\GetViewAction;
use WireElements\Pro\Components\Modal\Modal;

class Two extends Modal
{
    public static function getName(): string
    {
        return 'modal.extra-fields.two';
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
}
