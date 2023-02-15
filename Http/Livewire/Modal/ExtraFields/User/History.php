<?php

declare(strict_types=1);

namespace Modules\ExtraField\Http\Livewire\Modal\ExtraFields\User;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Support\Facades\Auth;
use Modules\Cms\Actions\GetViewAction;
use Modules\PFed\Models\History as HistoryModel;
use WireElements\Pro\Components\Modal\Modal;

class History extends Modal {
    public string $service_id;
    public string $extrafield_opts;
    public array $extrafield_opts_arr;

    public function mount(string $service_id, string $extrafield_opts): void {
        $this->service_id = $service_id;
        $this->extrafield_opts_arr = array_keys(json_decode($extrafield_opts, true));
    }

    public function render(): Renderable {
        $history_collection = HistoryModel::where('causer_id', Auth::id())->where('subject_type', 'extra_field_morph')->get();
        $history = $history_collection->pluck('properties.attributes');

        // $history = $history_collection->whereIn('id', $this->extrafield_opts_arr); // ->where('service_id', $this->service_id)->groupBy('id');

        /**
         * @phpstan-var view-string
         */
        $view = app(GetViewAction::class)->execute();

        $view_params = [
            'history' => $history,
            'view' => $view,
        ];

        return view($view, $view_params);
    }

    public static function attributes(): array {
        return [
            // Set the modal size to 2xl, you can choose between:
            // xs, sm, md, lg, xl, 2xl, 3xl, 4xl, 5xl, 6xl, 7xl
            'size' => 'xl',
        ];
    }
}
