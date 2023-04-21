<?php

declare(strict_types=1);

namespace Modules\ExtraField\Http\Livewire\Modal\ExtraFields\User;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Support\Facades\Auth;
use Modules\Cms\Actions\GetViewAction;
use Modules\ExtraField\Models\ExtraField;
use Modules\PFed\Models\History as HistoryModel;
use WireElements\Pro\Components\Modal\Modal;

class History extends Modal
{
    public string $service_id;
    public string $extrafield_opts;
    public array $extrafield_opts_arr;

    public function mount(string $service_id, string $extrafield_opts): void
    {
        $this->service_id = $service_id;
        $arr = json_decode($extrafield_opts, true);
        if (! is_array($arr)) {
            throw new \Exception('['.__LINE__.']['.__FILE__.']');
        }
        $this->extrafield_opts_arr = array_keys($arr);
    }

    public function render(): Renderable
    {
        $history_collection = HistoryModel::where('causer_id', Auth::id())->where('subject_type', 'extra_field_morph')->get();

        $history = $history_collection->filter(function ($item) {
            if (isset($item->properties['attributes'])) {
                // dddx($item->properties['attributes']['extra_field_id']);
                // $item->extra_field_name = ExtraField::find($item->properties['attributes']['extra_field_id'])?->name;
                $extra_field = ExtraField::find($item->properties['attributes']['extra_field_id']);
                if (! property_exists($extra_field, 'name')) {
                    throw new \Exception('['.__LINE__.']['.__FILE__.']');
                }
                if (! property_exists($item, 'extra_field_name')) {
                    throw new \Exception('['.__LINE__.']['.__FILE__.']');
                }
                $item->extra_field_name = $extra_field?->name;
                if (! property_exists($item, 'update')) {
                    throw new \Exception('['.__LINE__.']['.__FILE__.']');
                }
                $item->update = $item['updated_at']->format('d F Y H:i:s');

                return $item;
            }
        })->toArray();

        // $history = $history_collection->pluck('properties.attributes');

        // dddx(['history_collection' => $history_collection, 'history' => $history]);
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

    public static function attributes(): array
    {
        return [
            // Set the modal size to 2xl, you can choose between:
            // xs, sm, md, lg, xl, 2xl, 3xl, 4xl, 5xl, 6xl, 7xl
            'size' => 'xl',
        ];
    }
}
