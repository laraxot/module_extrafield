<?php
namespace Modules\ExtraField\Models\Panels\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use Modules\LU\Models\User as User;
use Modules\ExtraField\Models\Panels\Policies\ExtraFieldGroupMorphPanelPolicy as Post; 

use Modules\Cms\Models\Panels\Policies\XotBasePanelPolicy;

class ExtraFieldGroupMorphPanelPolicy extends XotBasePanelPolicy {
}
