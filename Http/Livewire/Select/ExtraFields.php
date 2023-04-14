<?php

declare(strict_types=1);

namespace Modules\ExtraField\Http\Livewire\Select;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Database\Eloquent\Model;
use Livewire\Component;
use Modules\Cms\Actions\GetViewAction;

// use Modules\PFed\Models\Profile as ProfileModel;

class ExtraFields extends Component {
    public string $tpl = 'v1';
    public string $name;
    public array $groups;
    /**
     * @var mixed
     */
    public $value;

    public Model $model;

    /**
     * @param mixed $value
     */
    public function mount($group): void {
        dddx($group);
    }

    public function getGroups() {
        // return $this->model->extraFields()->wherePivot('user_id', null)->get()->groupBy('group.name');
    }

    public function render(): Renderable {
        /**
         * @phpstan-var view-string
         */
        $view = app(GetViewAction::class)->execute($this->tpl);
        $view_params = [];

        return view($view, $view_params);
    }
}
