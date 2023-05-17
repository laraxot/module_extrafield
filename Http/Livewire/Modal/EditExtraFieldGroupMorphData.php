<?php

declare(strict_types=1);

namespace Modules\ExtraField\Http\Livewire\Modal;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Database\Eloquent\Collection;
use Modules\Cms\Actions\GetViewAction;
use Modules\PFed\Models\Service;
use Modules\Wire\View\Components\Modal\Modal;

class EditExtraFieldGroupMorphData extends Modal
{
    public array $form_data = [];

    /**
     * @var array<string, string>
     */
    protected $listeners = [];

    public function mount(): void
    {
        /**
         * @var Collection<Service> $services
         */
        $services = Service::with('noUserExtraFieldGroups')->get();

        $services->map(function ($service) {
            $service->noUserExtraFieldGroups->map(function ($group) use ($service) {
                $this->form_data['services'][$service->id][$group->id]['name'] = $group->name;
                $this->form_data['services'][$service->id][$group->id]['service_name'] = $service->name;
                $this->form_data['services'][$service->id][$group->id]['cardinality'] = $group->cardinality;
                $this->form_data['services'][$service->id][$group->id]['mandatory'] = $group->mandatory;
                $this->form_data['services'][$service->id][$group->id]['can_verified'] = $group->can_verified;
                $this->form_data['services'][$service->id][$group->id]['pivot']['cardinality'] = $group->pivot->cardinality;
                $this->form_data['services'][$service->id][$group->id]['pivot']['mandatory'] = $group->pivot->mandatory;
                $this->form_data['services'][$service->id][$group->id]['pivot']['can_verified'] = $group->pivot->can_verified;
            });
        });
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

    public static function getName(): string
    {
        return 'modal.edit-extra-field-group-morph-data';
    }

    public function save(): void
    {
        foreach ($this->form_data['services'] as $service_id => $service) {
            foreach ($service as $group_id => $data) {
                $service = Service::find($service_id)->noUserExtraFieldGroups()->find($group_id);
                $service->update($data);
                $service->pivot->update($data['pivot']);
            }
        }

        $this->emit('refresh');

        $this->close();
    }

    public function updateFormData(array $data): void
    {
        $this->form_data = array_merge($this->form_data, $data);
    }

    public static function behavior(): array
    {
        return [
            // Close the modal if the escape key is pressed
            'close-on-escape' => true,
            // Close the modal if someone clicks outside the modal
            'close-on-backdrop-click' => false,
            // Trap the users focus inside the modal (e.g. input autofocus and going back and forth between input fields)
            'trap-focus' => true,
            // Remove all unsaved changes once someone closes the modal
            'remove-state-on-close' => false,
        ];
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
