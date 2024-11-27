<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use App\Models\Order;

use MoonShine\Fields\Email;
use MoonShine\Fields\Number;
use MoonShine\Fields\Relationships\BelongsToMany;
use MoonShine\Fields\Relationships\HasMany;
use MoonShine\Fields\Select;
use MoonShine\Fields\Text;
use MoonShine\Resources\ModelResource;
use MoonShine\Decorations\Block;
use MoonShine\Fields\ID;
use MoonShine\Fields\Field;
use MoonShine\Components\MoonShineComponent;

/**
 * @extends ModelResource<Order>
 */
class OrderResource extends ModelResource
{
    protected string $model = Order::class;

    protected string $title = 'Orders';

    /**
     * @return list<MoonShineComponent|Field>
     */
    public function fields(): array
    {
        return [
            Block::make([
                ID::make()->sortable(),
                Text::make('Імя', 'name')->readonly(),
                Text::make('Прізвище', 'surname')->hideOnIndex(),
                Email::make('Емейл', 'email')->readonly(),
                Number::make('Телефон','phone')->readonly(),
                Number::make('Всього до сплати', 'total')->readonly(),
                Select::make('Статус', 'status')->options([
                    '0' => ' Створюєтся клієнтом',
                    '1' => ' Опубліковано клієнтом',
                    '2' => ' Опрацьовується менеджером',
                    '3' => ' Оплачено',
                    '4' => ' Комплектуєтся',
                    '5' => ' Відправлено',
                    '6' => ' Доставлено',
                    '7' => 'Завершено',
                    '8' => ' Скасовано',
                    '9' => 'Скасовано клієнтом'
                ]),
                BelongsToMany::make('Продукти', 'products', function ($product) {
                    return "{$product->name}. Кількість: {$product->pivot->count}";
                }, resource: new ProductResource())->hideOnIndex(),
                Text::make('Адреса', 'adress')->hideOnIndex(),
                Text::make('Місто', 'town')->hideOnIndex(),
                Text::make('Область', 'oblast')->hideOnIndex(),
                Text::make('Поштовий індекс', 'postalcode')->hideOnIndex(),


            ]),
        ];
    }

    /**
     * @param Order $item
     *
     * @return array<string, string[]|string>
     * @see https://laravel.com/docs/validation#available-validation-rules
     */
    public function rules(Model $item): array
    {
        return [];
    }
}
