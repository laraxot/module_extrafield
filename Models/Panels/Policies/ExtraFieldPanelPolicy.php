<?php

declare(strict_types=1);

namespace Modules\ExtraField\Models\Panels\Policies;

use Modules\Cms\Contracts\PanelContract;
use Modules\Cms\Models\Panels\Policies\XotBasePanelPolicy;
use Modules\LU\Services\ProfileService;
use Modules\Xot\Contracts\UserContract;

class ExtraFieldPanelPolicy extends XotBasePanelPolicy
{
    public function index(?UserContract $user, PanelContract $panel): bool
    {
        if (null == $user) {
            return false;
        }

        return ProfileService::make()->get($user)->hasPermissionTo($panel->getPath().'-'.__FUNCTION__);
    }
}
