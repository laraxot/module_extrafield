<?php

declare(strict_types=1);

namespace Modules\ExtraField\Actions\ExtraFieldGroup;

use Illuminate\Database\Eloquent\Collection as EloquentCollection;
use Modules\ExtraField\Models\Contracts\HasExtraFieldGroupsContract;
use Modules\ExtraField\Models\ExtraFieldGroup;
use Modules\Xot\Actions\GetModelByModelTypeAction;
use Spatie\QueueableAction\QueueableAction;

class GetByModelTypeModelId
{
    use QueueableAction;

    public string $model_type;
    public string $model_id;
    public HasExtraFieldGroupsContract $model;

    /**
     * Undocumented function.
     *
     * @return EloquentCollection<ExtraFieldGroup>
     */
    public function execute(string $model_type, string $model_id): EloquentCollection
    {
        $this->model_type = $model_type;
        $this->model_id = $model_id;
        $this->model = $this->getModel();

        return $this->model->extraFieldGroups;
    }

    public function getModel(): HasExtraFieldGroupsContract
    {
        $model = app(GetModelByModelTypeAction::class)->execute($this->model_type, $this->model_id);

        if (! $model instanceof HasExtraFieldGroupsContract) {
            throw new \Exception('add on ['.get_class($model).'] interface HasExtraFieldGroupsContract');
        }

        return $model;
    }
}
