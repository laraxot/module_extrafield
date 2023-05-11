<?php

declare(strict_types=1);

namespace Modules\ExtraField\Http\Livewire\Input\ExtraFields;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Database\Eloquent\Collection as EloquentCollection;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;
use Livewire\Component;
use Modules\Cms\Actions\GetViewAction;
use Modules\ExtraField\Models\Contracts\HasExtraFieldsContract;
use Modules\ExtraField\Models\ExtraField;
use Modules\ExtraField\Models\ExtraFieldGroup;
use Modules\ExtraField\Models\ExtraFieldMorph;

// use Modules\PFed\Models\Profile as ProfileModel;

/**
 * Class Groups.
 *
 * @property string                 $tpl
 * @property string                 $name
 * @property array                  $groups
 * @property array                  $form_data
 * @property mixed                  $value
 * @property HasExtraFieldsContract $model
 * @property Collection             $availableGroups
 * @property Collection             $assignedGroups
 * @property Collection             $availableFields
 * @property Collection             $assignedFields
 */
class Groups extends Component
{
    public string $tpl = 'v1';
    public string $name;
    public array $groups;
    public array $form_data = [];
    /**
     * @var mixed
     */
    public $value;

    public HasExtraFieldsContract $model;

    // verificare o cambiare
    // public $rows;

    /**
     * @param mixed $value
     */
    public function mount(string $name, HasExtraFieldsContract $model, $value, string $tpl = 'v1'): void
    {
        // dddx([$name, $model, $value]);

        $this->name = $name;
        $this->model = $model;
        $this->value = $value;
        $this->tpl = $tpl;

        $this->showPage();
        // dddx(['availableGroups' => $this->availableGroups, 'assignedGroups' => $this->assignedGroups]);
    }

    public function showPage(): void
    {
        $this->availableGroups = $this->getAvailableGroups();
        $this->assignedGroups = $this->getAssignedGroups();
    }

    public function getAvailableGroups(): EloquentCollection
    {
        return ExtraFieldGroup::whereNotIn('id', $this->getAssignedGroupsKeys())->whereHas('fields')->orderBy('name')->get();
    }

    /**
     * Undocumented function.
     *
     * @return \Illuminate\Support\Collection<int, (int|string)>
     */
    public function getAssignedGroupsKeys()
    {
        return $this->model->extraFields()->wherePivot('user_id', null)->get()->groupBy('group.id')->keys();
    }

    public function getAssignedGroups(): Collection
    {
        return $this->model
            ->extraFields()
            ->wherePivot('user_id', null)
            ->get()
            ->groupBy('group.name')
            ->map(
                function ($ef, $group) {
                    return $ef->first()?->getAttribute('group_id');
                }
            );
    }

    public function assign(): void
    {
        $uuid = Str::uuid()->toString();
        foreach ($this->form_data['available_groups'] as $id) {
            $efs = ExtraField::where('group_id', $id)->get();
            foreach ($efs as $ef) {
                $row = new ExtraFieldMorph();
                $res = $row->create([
                    'extra_field_id' => $ef->id,
                    'model_type' => 'service',
                    'model_id' => $this->model->getKey(),
                    'user_id' => null,
                    'uuid' => $uuid,
                ]);
            }
        }
        $this->showPage();
    }

    public function remove(): void
    {
        foreach ($this->form_data['assigned_groups'] as $id) {
            $efs = ExtraField::where('group_id', $id)->get();
            foreach ($efs as $ef) {
                $row = new ExtraFieldMorph();
                $res = $row->where([
                    'extra_field_id' => $ef->id,
                    'model_type' => 'service',
                    'model_id' => $this->model->getKey(),
                ])->delete();
            }
        }
        $this->showPage();
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

    public static function attributes(): array
    {
        return [
            // Set the modal size to 2xl, you can choose between:
            // xs, sm, md, lg, xl, 2xl, 3xl, 4xl, 5xl, 6xl, 7xl
            'size' => 'xl',
        ];
    }

    public function save(): void
    {
        // NON SI USA PIU USER DATUM A QUANTO PARE (oggi 2023-03-02)

        // dddx($this->form_data);
        /*$user_datum = new UserDatum();
        $user_datum->user_id = $this->user_id;
        $user_datum->label = $this->form_data['label'];
        $user_datum->data_id = $this->form_data['data_id'];
        $user_datum->value = $this->form_data['value'];
        $user_datum->save();
        // dddx($user_datum);

        $this->emit('refresh', $user_datum->data->category->id);
        $this->close();*/
    }
}
