<?php

declare(strict_types=1);

namespace Modules\ExtraField\Providers;

use Modules\Xot\Providers\XotBaseServiceProvider;
use Modules\Xot\Services\BladeService;

/**
 * Undocumented class.
 */
class ExtraFieldServiceProvider extends XotBaseServiceProvider
{
    protected string $module_dir = __DIR__;

    protected string $module_ns = __NAMESPACE__;

    public string $module_name = 'extrafield';

    public function bootCallback(): void
    {
        //BladeService::registerComponents($this->module_dir.'/../View/Components', 'Modules\\ExtraField');
    }

    public function registerCallback(): void
    {
    }
}