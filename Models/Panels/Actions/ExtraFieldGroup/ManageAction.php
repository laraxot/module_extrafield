<?php

declare(strict_types=1);

namespace Modules\ExtraField\Models\Panels\Actions\ExtraFieldGroup;

// -------- services --------
use Modules\Cms\Models\Panels\Actions\XotBasePanelAction;
use Modules\PFed\Models\CompanyService;

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
        $parent_panel = $this->panel->getParent();
        if (null == $parent_panel) {
            throw new \Exception('['.__LINE__.']['.__FILE__.']');
        }
        /**
         * @var CompanyService
         */
        $company_service = $parent_panel->row;
        // dddx($this->panel->getParent()->row);

        $model_id = $company_service->id;

        $onclick = "Livewire.emit('modal.open', 'modal.extra-field-group.manage', {'model_type':'service', 'model_id':'".$model_id."'})";

        return $onclick;
    }
}
