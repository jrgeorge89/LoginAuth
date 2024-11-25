<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use App\Models\Product;

class ProductOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Total de productos', Product::count()),
            Stat::make('Valor total del inventario', Product::sum('price')),
            Stat::make('Productos con bajo stock', Product::where('stock', '<', 10)->get()),
        ];
    }
}
