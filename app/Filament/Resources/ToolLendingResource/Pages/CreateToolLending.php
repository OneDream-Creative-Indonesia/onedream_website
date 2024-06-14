<?php

namespace App\Filament\Resources\ToolLendingResource\Pages;

use App\Filament\Resources\ToolLendingResource;
use Filament\Actions;
use Filament\Pages\Actions\Action;
use Filament\Resources\Pages\CreateRecord;

class CreateToolLending extends CreateRecord
{
    protected static string $resource = ToolLendingResource::class;
    public function getTitle(): string
    {
        return 'Data Peminjaman Alat';
    }
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    protected function getHeaderActions(): array
    {
        return [
            Action::make('back')->label(__('Back'))->url(ToolLendingResource::getUrl('index')),
        ];
    }
}
