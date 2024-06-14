<?php

namespace App\Filament\Resources\FinanceResource\Pages;

use App\Filament\Resources\FinanceResource;
use App\Models\Finance;
use Filament\Pages\Actions\Action;
use Filament\Resources\Pages\CreateRecord;

class CreateFinance extends CreateRecord
{
    protected static string $resource = FinanceResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $masuk = $this->convertToNumber($data['masuk'] ?? 0);
        $keluar = $this->convertToNumber($data['keluar'] ?? 0);

        $totalMasukLama = Finance::sum('masuk');
        $totalKeluarLama = Finance::sum('keluar');

        $data['total'] = ($masuk + $totalMasukLama) - ($keluar + $totalKeluarLama);

        $data['masuk'] = $masuk;
        $data['keluar'] = $keluar;

        return $data;
    }
    
    protected function convertToNumber($value)
    {
        $value = str_replace('.', '', $value);
        return (float) $value;
    }
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    protected function getHeaderActions(): array
    {
        return [
            Action::make('back')->label(__('Back'))->url(FinanceResource::getUrl('index')),
        ];
    }
}
