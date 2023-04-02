<?php

namespace App\Filament\Widgets;

use App\Models\Product;
use App\Models\User;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Card;
use Illuminate\Support\Facades\Cache;

class StatsOverview extends BaseWidget
{
    protected function getCards(): array
    {
        return [
            Card::make('Number Registerd Users', User::count()),
                // ->description('32k increase')
                // ->descriptionIcon('heroicon-s-trending-up'),
            Card::make('Number of Online Users', Cache::get('visitors', 0)),
                    // ->description(Cache::get('visitors', 0) . ' users are visiting the website')
                    // ->descriptionIcon('heroicon-s-users'),
            Card::make('Number of Products', Product::count())
                ->descriptionIcon('heroicon-o-collection'),
            // Card::make('Unique views', '192.1k')
            //     ->description('32k increase')
            //     ->descriptionIcon('heroicon-s-trending-up')
            //     ->chart([7, 2, 10, 3, 15, 4, 17])
            //     ->color('success'),
        ];
    }
}
