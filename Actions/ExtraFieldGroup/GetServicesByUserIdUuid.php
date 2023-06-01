<?php

declare(strict_types=1);

namespace Modules\ExtraField\Actions\ExtraFieldGroup;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Modules\PFed\Models\Service;
use Spatie\QueueableAction\QueueableAction;

class GetServicesByUserIdUuid
{
    use QueueableAction;

    /**
     * @return Collection<int,Service>
     */
    public function execute(string $user_id, string $uuid)
    {
        $services = Service::whereHas('extraFieldGroups', function (Builder $query) use ($user_id, $uuid) {
            $query
            ->where('user_id', $user_id)
            ->where('uuid', $uuid);
        })->get();

        return $services;
    }
}
