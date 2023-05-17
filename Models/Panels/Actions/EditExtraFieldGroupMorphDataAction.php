<?php

declare(strict_types=1);

namespace Modules\ExtraField\Models\Panels\Actions;

// -------- services --------
use Modules\Cms\Models\Panels\Actions\XotBasePanelAction;

class EditExtraFieldGroupMorphDataAction extends XotBasePanelAction
{
    public bool $onItem = true;

    public string $icon = '<i class="fas fa-file"></i>';

    public function __construct()
    {
    }

    public function getOnClick(): ?string
    {
        $onclick = "Livewire.emit('modal.open', 'modal.edit-extra-field-group-morph-data')";

        return $onclick;
    }

    public function handle()
    {
    }
}
