<?php

namespace App\Filament\Widgets;

use App\Models\Customers;
use App\Models\Portfolio;
use App\Models\ToolLending;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Filament\Infolists\Components\Tabs;

class StatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        $total_peminjaman = ToolLending::whereIn('status', ['todo', 'in_progress'])->count();
        $total_customers = Customers::Count();
        $total_portfolio = Portfolio::count();

        $stat = Stat::make('Total Peminjaman', $total_peminjaman)
        ->descriptionIcon('heroicon-m-document-chart-bar')
        ->description('Total Peminjaman Barang')
        ->chart([$total_peminjaman])
        ->color('gray');

        $stat2 = Stat::make('Total Project ', $total_customers)
        ->descriptionIcon('heroicon-m-user-group')
        ->description('Total Project Masuk')
        ->color('gray');

        $stat3 = Stat::make('Total Portofolio ', $total_portfolio)
        ->descriptionIcon('heroicon-m-rocket-launch')
        ->description('Total Portofolio Masuk')
        ->color('gray');

        return [$stat, $stat2, $stat3];
    }
}
