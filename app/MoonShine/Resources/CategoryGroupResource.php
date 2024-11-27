<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Model;
use App\Models\CategoryGroup;

use MoonShine\Fields\Relationships\HasMany;
use MoonShine\Fields\Slug;
use MoonShine\Fields\Text;
use MoonShine\Resources\ModelResource;
use MoonShine\Decorations\Block;
use MoonShine\Fields\ID;
use MoonShine\Fields\Field;
use MoonShine\Components\MoonShineComponent;

/**
 * @extends ModelResource<CategoryGroup>
 */
class CategoryGroupResource extends ModelResource
{
    protected string $model = CategoryGroup::class;

    protected string $title = 'CategoryGroups';

    /**
     * @return list<MoonShineComponent|Field>
     */
    public function fields(): array
    {
        return [
            Block::make([
                ID::make()->sortable(),
                Text::make('Назва', 'name'),
                Slug::make('Slug', 'slug') ->from('name')->separator('-')->readonly(),

            ]),
        ];
    }

    /**
     * @param CategoryGroup $item
     *
     * @return array<string, string[]|string>
     * @see https://laravel.com/docs/validation#available-validation-rules
     */
    public function rules(Model $item): array
    {
        return [];
    }
}
