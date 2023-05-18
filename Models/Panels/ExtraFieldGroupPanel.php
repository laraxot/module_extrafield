<?php

declare(strict_types=1);

namespace Modules\ExtraField\Models\Panels;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Modules\Cms\Models\Panels\XotBasePanel;
use Modules\ExtraField\Models\ExtraField;
use Modules\ExtraField\Models\ExtraFieldGroup;
use Modules\ExtraField\Models\Panels\Actions\ExtraFieldGroup\ManageAction;
use Modules\Xot\Contracts\RowsContract;

class ExtraFieldGroupPanel extends XotBasePanel
{
    /**
     * The model the resource corresponds to.
     */
    public static string $model = 'ExtraFieldGroup';

    /**
     * The single value that should be used to represent the resource when being displayed.
     */
    public static string $title = 'title';

    /**
     * on select the option label.
     *
     * @param ExtraFieldGroup $row
     */
    public function optionLabel($row): string
    {
        /**
         * @var string $panel_name
         */
        $panel_name = $row->name;

        return strval($panel_name);
    }

    /**
     * index navigation.
     */
    public function indexNav(): ?Renderable
    {
        return null;
    }

    /**
     * Build an "index" query for the given resource.
     *
     * @param RowsContract $query
     *
     * @return RowsContract
     */
    public function indexQuery(array $data, $query)
    {
        // return $query->where('user_id', $request->user()->id);
        return $query;
    }

    /**
     * Get the fields displayed by the resource.
        'value'=>'..',
     */
    public function fields(): array
    {
        return [
            // (object) [
            //     'type' => 'Id',
            //     'name' => 'id',
            //     'comment' => null,
            // ],
            (object) [
                'type' => 'String',
                'name' => 'name',
                'rules' => 'required',
                'comment' => null,
            ],
            // (object) [
            //     'type' => 'Integer',
            //     'name' => 'cardinality',
            //     'rules' => 'required',
            //     'comment' => 'not in Doctrine',
            // ],
            (object) [
                'type' => 'Integer',
                'name' => 'pivot.cardinality',
                'rules' => 'required',
                'comment' => 'not in Doctrine',
            ],
            (object) [
                'type' => 'Select2Sides',
                'name' => 'noUserFields',
                'comment' => 'not in Doctrine',
                'col_size' => 4,
                'options' => $this->optionsModelClass(ExtraField::class),
            ],
            (object) [
                'type' => 'Cell',
                'name' => 'categories',
                'fields' => $this->infoCategories(),
            ],
            // (object) [
            //     'type' => 'SelectCategories',
            //     'name' => 'categories',
            //     'comment' => 'not in Doctrine',
            //     'col_size' => 4,
            // ],
        ];
    }

    public function infoCategories(): array
    {
        return [
            (object) [
                'type' => 'SelectCategories',
                'name' => 'categories',
                'comment' => 'not in Doctrine',
                'col_size' => 4,
            ],
        ];
    }

    /**
     * Get the tabs available.
     */
    public function tabs(): array
    {
        $tabs_name = ['noUserExtraFieldGroupMorphs'];

        return $tabs_name;
    }

    /**
     * Get the cards available for the request.
     */
    public function cards(Request $request): array
    {
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param \Illuminate\Http\Request $request
     */
    public function filters(Request $request = null): array
    {
        return [];
    }

    /**
     * Get the lenses available for the resource.
     */
    public function lenses(Request $request): array
    {
        return [];
    }

    /**
     * Get the actions available for the resource.
     */
    public function actions(): array
    {
        return [
            // new ManageAction(),
        ];
    }
}
