<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Model;
use App\Models\Coupon;

use MoonShine\Fields\Date;
use MoonShine\Fields\Number;
use MoonShine\Fields\Text;
use MoonShine\Resources\ModelResource;
use MoonShine\Decorations\Block;
use MoonShine\Fields\ID;
use MoonShine\Fields\Field;
use MoonShine\Components\MoonShineComponent;

/**
 * @extends ModelResource<Coupon>
 */
class CouponResource extends ModelResource
{
    protected string $model = Coupon::class;

    protected string $title = 'Coupons';

    /**
     * @return list<MoonShineComponent|Field>
     */
    public function fields(): array
    {
        return [
            Block::make([
                ID::make()->sortable(),
                Text::make('Код', 'code'),
                Number::make('Знижка у відсодках', 'discountInPercent	'),
                Date::make('Дата закінчення дії купону', 'expired')->withTime()
            ]),
        ];
    }

    /**
     * @param Coupon $item
     *
     * @return array<string, string[]|string>
     * @see https://laravel.com/docs/validation#available-validation-rules
     */
    public function rules(Model $item): array
    {
        return [];
    }
}
