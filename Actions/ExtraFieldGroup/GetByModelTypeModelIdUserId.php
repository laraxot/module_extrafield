<?php

declare(strict_types=1);

namespace Modules\ExtraField\Actions\ExtraFieldGroup;

use Illuminate\Database\Eloquent\Collection as EloquentCollection;
use Modules\ExtraField\Models\Contracts\HasExtraFieldGroupsContract;
use Modules\ExtraField\Models\ExtraFieldGroup;
use Modules\Xot\Actions\GetModelByModelTypeAction;
use Spatie\QueueableAction\QueueableAction;

class GetByModelTypeModelIdUserId
{
    use QueueableAction;

    public string $model_type;
    public string $model_id;
    public ?string $user_id;
    public HasExtraFieldGroupsContract $model;

    /**
     * Undocumented function.
     *
     * @return EloquentCollection<int, ExtraFieldGroup>
     */
    public function execute(string $model_type, string $model_id, string $user_id): EloquentCollection
    {
        if ('' === $user_id) {
            $user_id = null;
        }

        $this->model_type = $model_type;
        $this->model_id = $model_id;
        $this->user_id = $user_id;
        $this->model = $this->getModel();

        return $this->model->userExtraFieldGroups($user_id)->get();
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
