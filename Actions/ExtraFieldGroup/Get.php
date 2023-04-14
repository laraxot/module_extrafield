<?php

declare(strict_types=1);

namespace Modules\ExtraField\Actions\ExtraFieldGroup;

use Spatie\QueueableAction\QueueableAction;

class Get {
    use QueueableAction;

    public function execute() {
        return 'preso';
    }
}
