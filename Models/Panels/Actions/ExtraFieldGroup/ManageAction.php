<?php

declare(strict_types=1);

namespace Modules\ExtraField\Models\Panels\Actions\ExtraFieldGroup;

// -------- services --------
use Illuminate\Support\Str;
use Modules\Cms\Models\Panels\Actions\XotBasePanelAction;

// -------- bases -----------

/**
 * Class ManageAction.
 */
class ManageAction extends XotBasePanelAction
{
    public bool $onContainer = true;

    public string $icon = '<i class="bi bi-bookmark">Manage</i>';

    public function handle(): void
    {
    }

    public function getOnClick(): ?string
    {
        // $this->model_class = get_class($this->panel->row);
        // $this->model_type = Str::snake(class_basename($this->model_class));
        // dddx([
        //     $this,
        //     null != $this->panel->getParent(),
        // ]);
        $onclick = "Livewire.emit('modal.open', 'modal.extra_field_group_morph.manage', {'model_type':'service'})";

        return $onclick;
    }
}
