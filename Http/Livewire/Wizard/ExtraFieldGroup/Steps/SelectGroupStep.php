<?php

declare(strict_types=1);

namespace Modules\ExtraField\Http\Livewire\Wizard\ExtraFieldGroup\Steps;

use Modules\ExtraField\Actions;
use Modules\UI\Http\Wizard\BaseStep;

class SelectGroupStep extends BaseStep
{
    public array $groups;

    /** @var array */
    protected $rules = [
        'form_data.group_id' => 'required',
    ];

    public function mount(string $cat_id, string $model_type, string $model_id, string $user_id): void
    {
        $this->form_data['cat_id'] = $cat_id;
        $this->form_data['user_id'] = $user_id;
        $this->form_data['model_type'] = $model_type;
        $this->form_data['model_id'] = $model_id;

        $this->groups = app(Actions\ExtraFieldGroup\GetOptionsByModelTypeModelIdCategoryIdUserId::class)->execute($model_type, null, $cat_id, $user_id);
    }
}
