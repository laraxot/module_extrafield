<?php

declare(strict_types=1);

namespace Modules\ExtraField\Http\Livewire\Input;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Database\Eloquent\Model;
use Livewire\Component;

// use Modules\PFed\Models\Profile as ProfileModel;

class ExtraFields extends Component
{
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
    public function mount(string $name, Model $model, $value): void
    {
        $this->name = $name;
        $this->model = $model;
        $this->value = $value;

        $this->groups = $this->getGroups()->toArray();
    }

    public function getGroups()
    {
        return $this->model->extraFields()->wherePivot('user_id', null)->get()->groupBy('group.name');
    }

    public function render(): Renderable
    {
        /**
         * @phpstan-var view-string
         */
        $view = 'extrafield::livewire.input.extra_fields.'.$this->tpl;
        $view_params = [];

        return view($view, $view_params);
    }
}
