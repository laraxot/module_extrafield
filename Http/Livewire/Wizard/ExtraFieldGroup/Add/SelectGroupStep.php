<?php

declare(strict_types=1);

namespace Modules\ExtraField\Http\Livewire\Wizard\ExtraFieldGroup\Add;

use Modules\ExtraField\Actions;
use Modules\UI\Actions\GetStateDataAction;
use Modules\UI\Http\Wizard\BaseStep;

class SelectGroupStep extends BaseStep
{
    public array $groups;
    // public string $cat_id;
    // public string $model_type;
    // public string $model_id;
    // public string $user_id;

    /** @var array */
    protected $rules = [
        'form_data.group_id' => 'required',
    ];

    public function mount(): void
    {
        $this->form_data = app(GetStateDataAction::class)->execute($this->state());

        $this->groups = app(Actions\ExtraFieldGroup\GetOptionsByModelTypeModelIdCategoryIdUserId::class)->execute($this->form_data['model_type'], null, (string) $this->form_data['cat_id'], $this->form_data['user_id']);
    }

    public static function getName(): string
    {
        return 'wizard.extra-field-group.add.select-group-step';
    }
}
