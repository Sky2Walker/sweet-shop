<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

use MoonShine\Components\Boolean;
use MoonShine\Fields\Checkbox;
use MoonShine\Fields\File;
use MoonShine\Fields\Number;
use MoonShine\Fields\Relationships\BelongsTo;
use MoonShine\Fields\Slug;
use MoonShine\Fields\Text;
use MoonShine\Fields\Textarea;
use MoonShine\Resources\ModelResource;
use MoonShine\Decorations\Block;
use MoonShine\Fields\ID;
use MoonShine\Fields\Field;
use MoonShine\Components\MoonShineComponent;
use Nette\Utils\Image;

/**
 * @extends ModelResource<Product>
 */
class ProductResource extends ModelResource
{
    protected string $model = Product::class;

    protected string $title = 'Products';

    /**
     * @return list<MoonShineComponent|Field>
     */
    public function fields(): array
    {
        return [
            Block::make([
                ID::make()->sortable(),
                Text::make('Назва', 'name'),
                Slug::make('slug', 'slug')->from('name')->separator('-')->readonly(),
                Textarea::make('Опис', 'description')->hideOnIndex(),
                \MoonShine\Fields\Image::make('Image', 'image')
                ->disk('public')
                ->dir('uploads/images')->hideOnIndex(),
                Number::make('Ціна', 'price')->hideOnIndex(),
                BelongsTo::make('Категорія', 'category', 'name', resource: new CategoryResource() ),
                Checkbox::make('Розпродаж', 'sale'),
                Textarea::make('Повний опис', 'fullDescription')->hideOnIndex(),

            ]),
        ];
    }

    /**
     * @param Product $item
     *
     * @return array<string, string[]|string>
     * @see https://laravel.com/docs/validation#available-validation-rules
     */
    public function rules(Model $item): array
    {
        return [];
    }
}
