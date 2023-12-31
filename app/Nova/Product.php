<?php

namespace App\Nova;

use DmitryBubyakin\NovaMedialibraryField\Fields\Medialibrary;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\Date;
use Laravel\Nova\Fields\HasMany;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Textarea;
use Laravel\Nova\Http\Requests\NovaRequest;

class Product extends Resource
{
    public static $group = 'Main';

    /**
     * The model the resource corresponds to.
     *
     * @var class-string<\App\Models\Product>
     */
    public static $model = \App\Models\Product::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'name';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id',
        'name',
    ];

    /**
     * Get the fields displayed by the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function fields(NovaRequest $request)
    {
        return [

            Text::make('ID')->sortable(),

            Medialibrary::make('Images', 'products', 'public'),

            Text::make('Name')
                ->sortable()
                ->rules('required', 'max:255'),

            Text::make('Lot Number', 'lot_number')
                ->sortable()
                ->creationRules('unique:products,lot_number')
                ->rules('required'),

            Textarea::make('Description')
                ->rules('required'),

            Date::make('Production Date')
                ->rules('required')
                ->sortable(),

            Date::make('Expiry Date')
                ->rules('required')
                ->sortable(),

            Text::make('Weight')->rules('required'),


            Text::make('Origin')
                ->rules('required'),

            HasMany::make('Transactions', 'transactions', Transaction::class),
            HasMany::make('Inputs', 'inputs', self::class),
            HasMany::make('Outputs', 'outputs', self::class),

            BelongsTo::make('Party', 'party', Party::class)
                ->sortable()


        ];
    }

    /**
     * Get the cards available for the request.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function cards(NovaRequest $request)
    {
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function filters(NovaRequest $request)
    {
        return [];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function lenses(NovaRequest $request)
    {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function actions(NovaRequest $request)
    {
        return [];
    }
}
