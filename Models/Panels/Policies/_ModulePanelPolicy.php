<?php

declare(strict_types=1);

namespace Modules\ExtraField\Models\Panels\Policies;

use Modules\Cms\Contracts\PanelContract;
use Modules\Cms\Models\Panels\Policies\XotBasePanelPolicy;
use Modules\Xot\Contracts\UserContract;

class _ModulePanelPolicy extends XotBasePanelPolicy
{
    public function editExtraFieldGroupMorphData(UserContract $user, PanelContract $panel): bool
    {
        return true;
    }
}
