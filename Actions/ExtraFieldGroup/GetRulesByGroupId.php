<?php

declare(strict_types=1);

namespace Modules\ExtraField\Actions\ExtraFieldGroup;

use Illuminate\Database\Eloquent\Relations\Relation;
use Illuminate\Support\Arr;
use Modules\ExtraField\Models\ExtraFieldGroup;
use Spatie\QueueableAction\QueueableAction;

class GetRulesByGroupId
{
    use QueueableAction;

    /**
     * Undocumented function.
     */
    public function execute(string $group_id, string $prefix = ''): array
    {
        $morph_map = [
            'extra_field' => 'Modules\ExtraField\Models\ExtraField',
        ];

        Relation::morphMap($morph_map);

        $extra_field_group = ExtraFieldGroup::find($group_id);
        if (null == $extra_field_group) {
            throw new \Exception('empty ['.$group_id.']');
        }
        $extra_field = $extra_field_group->fields;

        $rules = $extra_field->map(function ($item) {
            return ['name' => $item->name, 'rules' => array_merge($item->rules ?? [], $item->pivot->rules ?? [])];
        })->pluck('rules', 'name');

        $rules = $rules->all();

        if (null == $prefix) {
            throw new \Exception('['.__LINE__.']['.__FILE__.']');
        }
        $rules = Arr::prependKeysWith($rules, $prefix);

        return $rules;
    }
}
