<?php

namespace App\Filament\Resources\ToolLendingResource\Pages;

use App\Filament\Resources\ToolLendingResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListToolLendings extends ListRecords
{
    protected static string $resource = ToolLendingResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()
            ->label('Request Peminjaman Alat')
            ->disableCreateAnother(),
        ];
    }

    public function getTitle(): string
    {
        return 'Data Peminjaman Alat';
    }
}
