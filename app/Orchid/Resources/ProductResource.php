<?php

namespace App\Orchid\Resources;

use Orchid\Crud\Resource;
use Orchid\Screen\TD;
use App\Models\Product;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\TextArea;
use Orchid\Screen\Sight;

class ProductResource extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = Product::class;

    /**
     * Get the fields displayed by the resource.
     *
     * @return array
     */
    public function fields(): array
    {
        return [
       
            Input::make('title')
                  ->type('text')
                  ->title('Nombre del producto')
                  ->placeholder('Indica el nombre')
                  ->required(),
            
            TextArea::make('content')
                     ->title('Descripción del producto')
                     ->placeholder('Indica la descripción')
                     ->rows(15)
                     ->required()
                     ->help('Añade toda la información del producto'),

            Input::make('price')
                  ->title('Precio en euros')
                  ->mask([
                         'numericInput' => true
                     ])

        ];
    }

    /**
     * Get the columns displayed by the resource.
     *
     * @return TD[]
     */
    public function columns(): array
    {
        return [
            TD::make('id'),

            TD::make('title', 'Producto'),
            TD::make('price', 'Precio'),

            TD::make('created_at', 'Fecha creación')
                ->render(function ($model) {
                    return $model->created_at->toDateTimeString();
                }),

            TD::make('updated_at', 'Fecha actualización')
                ->render(function ($model) {
                    return $model->updated_at->toDateTimeString();
                }),
        ];
    }

    /**
     * Get the sights displayed by the resource.
     *
     * @return Sight[]
     */
    public function legend(): array
    {
        return [

            Sight::make('id', 'ID'),
            Sight::make('title','Producto'),
            Sight::make('content','Descripción'),
            Sight::make('price','Precio')

        ];
    }

    /**
     * Get the filters available for the resource.
     *
     * @return array
     */
    public function filters(): array
    {
        return [];
    }
}
