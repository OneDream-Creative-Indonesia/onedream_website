<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use App\Models\Finance;

class StatsOverviewSecondRow extends BaseWidget
{
    protected function getStats(): array
    {

        $totalMasuk = Finance::sum('masuk');
        $totalKeluar = Finance::sum('keluar');

        $total_keuangan = $totalMasuk - $totalKeluar;

        $formatted_total_keuangan = 'IDR ' . number_format($total_keuangan, 0, ',', '.');

        $stat4 = Stat::make('Total Keuangan ', $formatted_total_keuangan)
        ->descriptionIcon('heroicon-m-currency-dollar')
        ->description('Jumlah Keuangan Sekarang')
        ->color('gray');

        return [$stat4];
    }
}
