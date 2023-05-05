<?php

declare(strict_types=1);

namespace Modules\ExtraField\Http\Livewire\Wizard\ExtraFieldGroup\Steps;

use Modules\ExtraField\Actions;
use Modules\UI\Actions\GetStateDataAction;
use Modules\UI\Http\Wizard\BaseStep;

class SelectGroupStep extends BaseStep
{
    public array $groups;

    /** @var array */
    protected $rules = [
        'form_data.group_id' => 'required',
    ];

    public function mount(): void
    {
        $this->form_data = app(GetStateDataAction::class)->execute($this->state());
        // dddx([
        //     $this->state()->all(),
        //     $this->getView(),
        // ]);
        // $this->groups = app(Actions\ExtraFieldGroup\GetOptionsByModelTypeModelIdCategoryIdUserId::class)->execute($model_type, null, $cat_id, $user_id);
    }
}
