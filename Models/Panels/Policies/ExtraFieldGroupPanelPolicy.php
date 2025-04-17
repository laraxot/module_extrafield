<?php

declare(strict_types=1);

namespace Modules\ExtraField\Models\Panels\Policies;

use Modules\Cms\Contracts\PanelContract;
use Modules\Cms\Models\Panels\Policies\XotBasePanelPolicy;
use Modules\Xot\Contracts\UserContract;

class ExtraFieldGroupPanelPolicy extends XotBasePanelPolicy
{
    public function manage(UserContract $user, PanelContract $panel): bool
    {
        return true;
    }
}
