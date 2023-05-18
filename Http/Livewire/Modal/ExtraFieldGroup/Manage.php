<?php

declare(strict_types=1);

namespace Modules\ExtraField\Http\Livewire\Modal\ExtraFieldGroup;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Database\Eloquent\Collection;
use Modules\Cms\Actions\GetViewAction;
use Modules\ExtraField\Models\ExtraFieldGroupMorph;
use Modules\Wire\Concerns\InteractsWithConfirmationModal;
use Modules\Wire\View\Components\Modal\Modal;

class Manage extends Modal
{
    use InteractsWithConfirmationModal;

    public string $tpl;
    public Collection $extra_field_group_morphs;
    public array $form_data = [];
    public string $model_type;
    public string $model_id;

    public function mount(string $model_type, string $model_id, string $tpl = 'v1'): void
    {
        $this->model_type = $model_type;
        $this->model_id = $model_id;
        $this->tpl = $tpl;
        // $this->extra_field_group_morphs = ExtraFieldGroupMorph::where('model_type', $model_type)
        //                                 ->where('model_id', $model_id)
        //                                 ->where('user_id', null)
        //                                 // ->with('extraFieldGroup')
        //                                 ->get();
        $this->extra_field_group_morphs = $this->getExtraFieldGroupMorphsProperty();
        // dddx($this->extra_field_group_morphs);
    }

    public function getExtraFieldGroupMorphsProperty(): Collection
    {
        $model_id = $this->model_id;
        if ('' == $model_id) {
            $model_id = null;
        }

        $rows = ExtraFieldGroupMorph::where('model_type', $this->model_type)
            ->where('model_id', $model_id)
            ->where('user_id', null)
            ->get();

        return $rows;
    }

    public static function getName(): string
    {
        return 'modal.extra_field_group_morph.manage';
    }

    public function render(): Renderable
    {
        /**
         * @phpstan-var view-string
         */
        $view = app(GetViewAction::class)->execute($this->tpl);

        $view_params = [
            // 'view' => $view,
            // 'categories' => $categories,
        ];

        return view($view, $view_params);
    }

    public static function behavior(): array
    {
        return [
            // Close the modal if the escape key is pressed
            'close-on-escape' => false,
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
            'size' => '2xl',
        ];
    }
}
