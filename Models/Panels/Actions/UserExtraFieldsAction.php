<?php

declare(strict_types=1);

namespace Modules\ExtraField\Models\Panels\Actions;

// -------- services --------
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Database\Eloquent\Model;
use Modules\Cms\Models\Panels\Actions\XotBasePanelAction;

class UserExtraFieldsAction extends XotBasePanelAction
{
    public bool $onItem = true;

    public string $icon = '<i class="fas fa-plus-circle">U</i>';

    public array $html = [];

    public Model $model;

    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    public function handle(): Renderable
    {
        /**
         *  @phpstan-var view-string
         */
        $view = 'extrafield::admin.acts.user.extra_fields';

        $view_params = [
            'view' => $view,
            'model' => $this->model,
        ];

        return view($view, $view_params);
        // return $this->panel->out();
    }
}
