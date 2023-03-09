<?php

declare(strict_types=1);

namespace Modules\ExtraField\Models\Panels;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Modules\Blog\Models\Category;
use Modules\Cms\Models\Panels\XotBasePanel;
use Modules\ExtraField\Models\ExtraFieldGroup;
use Modules\Xot\Contracts\RowsContract;

class ExtraFieldPanel extends XotBasePanel
{
    /**
     * The model the resource corresponds to.
     */
    public static string $model = 'Modules\ExtraField\Models\ExtraField';

    /**
     * The single value that should be used to represent the resource when being displayed.
     */
    public static string $title = 'title';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [];

    /**
     * The relationships that should be eager loaded on index queries.
     */
    public function with(): array
    {
        return [];
    }

    public function search(): array
    {
        return [];
    }

    /**
     * on select the option label.
     *
     * @param Modules\ExtraField\Models\ExtraField $row
     */
    public function optionLabel($row): string
    {
        if (is_null($row->name)) {
            return '';
        }

        return $row->name;
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
            (object) [
                'type' => 'String',
                'name' => 'name',
                'rules' => 'required',
                'comment' => null,
                'col_size' => 6,
            ],
            (object) [
                'type' => 'Select',
                'name' => 'type',
                'rules' => 'required',
                'comment' => null,
                'col_size' => 6,
                'options' => [
                    'string' => 'string',
                    'checkbox.options' => 'checkbox.options',
                    'radio.options' => 'radio.options',
                    'email.verified' => 'email.verified',
                    'sms.verified' => 'sms.verified',
                ],
            ],
            (object) [
                'type' => 'Array',
                'name' => 'options',
                // 'rules' => 'required',
                'comment' => null,
                'col_size' => 6,
            ],
            /* (object) [
                'type' => 'Select',
                'name' => 'group',
                'rules' => 'required',
                'comment' => null,
                'col_size' => 6,
                'options' => $this->optionsModelClass(ExtraFieldGroup::class),
            ], */
            // le categorie vanno in extrafieldgroup e non in extrafield, come da richiesta
            // (object) [
            //     'type' => 'Select',
            //     'name' => 'categories',
            //     'rules' => 'required',
            //     'comment' => null,
            //     'col_size' => 6,
            //     'options' => $this->optionsModelClass(Category::class),
            // ],
            (object) [
                'type' => 'Json',
                'name' => 'rules',
                'comment' => null,
                'col_size' => 6,
            ],
        ];
    }

    /**
     * Get the tabs available.
     */
    public function tabs(): array
    {
        $tabs_name = [];

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
        return [];
    }
}
