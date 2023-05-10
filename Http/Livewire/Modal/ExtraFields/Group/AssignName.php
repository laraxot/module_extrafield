<?php

declare(strict_types=1);

namespace Modules\ExtraField\Http\Livewire\Modal\ExtraFields\Group;

use Illuminate\Contracts\Support\Renderable;
use Modules\Cms\Actions\GetViewAction;
use Modules\ExtraField\Models\ExtraFieldGroup;
use Modules\Modal\View\Components\Modal\Modal;

class AssignName extends Modal
{
    public string $group_id;
    public array $form_data;

    /**
     * @var array<string, string>
     */
    protected $listeners = [
        // 'update_form_data' => 'updateFormData',
    ];

    public function mount(string $group_id): void
    {
        $this->form_data = [];
        $this->group_id = $group_id;
    }

    /**
     * Undocumented function.
     *
     * @return void
     */
    public function save()
    {
        $this->form_data['id'] = $this->group_id;
        $row = ExtraFieldGroup::firstOrNew($this->form_data);
        $row->save();
        // dddx(['model', ExtraFieldGroup::find($this->group_id), 'group_id' => $this->group_id, 'form_data' => $this->form_data]);
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

    public static function attributes(): array
    {
        return [
            // Set the modal size to 2xl, you can choose between:
            // xs, sm, md, lg, xl, 2xl, 3xl, 4xl, 5xl, 6xl, 7xl
            'size' => 'xl',
        ];
    }
}
