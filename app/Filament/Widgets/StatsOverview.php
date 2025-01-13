<?php

namespace App\Filament\Widgets;

use App\Models\Anak;
use App\Models\IbuHamil;
use App\Models\User;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            // Stat::make('Total Ibu Hamil', IbuHamil::whereNotNull('id')->count())
            //     ->description('Ibu Hamil')
            //     ->descriptionIcon('heroicon-m-arrow-trending-up')
            //     ->chart([7, 2, 10, 3, 15, 4, 17])
            //     ->color('success'),
            Stat::make('Total Anak', Anak::count())
                ->description('Anak')
                ->descriptionIcon('heroicon-m-arrow-trending-up')
                ->color('success'),
            Stat::make('Total Ibu Hamil', IbuHamil::count())
                ->description('Ibu Hamil')
                ->descriptionIcon('heroicon-m-user')
                ->color('success'),
        ];
    }
}
