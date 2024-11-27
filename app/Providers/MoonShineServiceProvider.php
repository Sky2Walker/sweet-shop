<?php

declare(strict_types=1);

namespace App\Providers;

use App\MoonShine\Resources\CategoryGroupResource;
use App\MoonShine\Resources\CategoryResource;
use App\MoonShine\Resources\CouponResource;
use App\MoonShine\Resources\OrderResource;
use App\MoonShine\Resources\ProductResource;
use MoonShine\Providers\MoonShineApplicationServiceProvider;
use MoonShine\MoonShine;
use MoonShine\Menu\MenuGroup;
use MoonShine\Menu\MenuItem;
use MoonShine\Resources\MoonShineUserResource;
use MoonShine\Resources\MoonShineUserRoleResource;
use MoonShine\Contracts\Resources\ResourceContract;
use MoonShine\Menu\MenuElement;
use MoonShine\Pages\Page;
use Closure;

class MoonShineServiceProvider extends MoonShineApplicationServiceProvider
{
    /**
     * @return list<ResourceContract>
     */
    protected function resources(): array
    {
        return [];
    }

    /**
     * @return list<Page>
     */
    protected function pages(): array
    {
        return [];
    }

    /**
     * @return Closure|list<MenuElement>
     */
    protected function menu(): array
    {
        return [
            MenuGroup::make(static fn() => __('moonshine::ui.resource.system'), [
               MenuItem::make(
                   static fn() => __('moonshine::ui.resource.admins_title'),
                   new MoonShineUserResource()
               ),
               MenuItem::make(
                   static fn() => __('moonshine::ui.resource.role_title'),
                   new MoonShineUserRoleResource()
               ),
            ]),

            MenuGroup::make('Замовлення',[
                MenuItem::make('Замовлення', new OrderResource()),
                MenuItem::make('Купони', new CouponResource())
            ]),

            MenuGroup::make('Категорії', [
                MenuItem::make('Категорії', new CategoryResource()),
                MenuItem::make('Група категорій', new CategoryGroupResource())
            ]),

            MenuGroup::make('Продукти',[
                MenuItem::make('Продукти', new ProductResource())
            ])
        ];
    }

    /**
     * @return Closure|array{css: string, colors: array, darkColors: array}
     */
    protected function theme(): array
    {
        return [];
    }
}
