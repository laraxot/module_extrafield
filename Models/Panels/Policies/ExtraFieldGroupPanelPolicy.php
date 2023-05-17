<?php

declare(strict_types=1);

namespace Modules\ExtraField\Models\Panels\Policies;

use Modules\Cms\Models\Panels\Policies\XotBasePanelPolicy;

class ExtraFieldGroupPanelPolicy extends XotBasePanelPolicy
{
    public function manage(UserContract $user, PanelContract $panel): bool
    {
        return null != $panel->getParent();
    }
}
