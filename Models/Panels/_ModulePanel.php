<?php

declare(strict_types=1);

namespace Modules\ExtraField\Models\Panels;

use Modules\Cms\Models\Panels\XotBasePanel;
use Modules\ExtraField\Models\Panels\Actions\EditExtraFieldGroupMorphDataAction;

/**
 * Class _ModulePanel.
 */
class _ModulePanel extends XotBasePanel
{
    public function actions(): array
    {
        return [
            new EditExtraFieldGroupMorphDataAction(),
        ];
    }
}
