<?php

namespace App\Filament\Resources\CustomersResource\Pages;

use App\Filament\Resources\CustomersResource;
use Filament\Actions;
use Filament\Pages\Actions\Action;
use Filament\Resources\Pages\CreateRecord;

class CreateCustomers extends CreateRecord
{
    protected static string $resource = CustomersResource::class;
    public function getTitle(): string
    {
        return 'Data Pelanggan';
    }
    public function getSubTitle(): string
    {
        return 'Data Pelanggan';
    }
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }


    protected function getHeaderActions(): array
    {
        return [
            Action::make('back')->label(__('Back'))->url(CustomersResource::getUrl('index')),
        ];
    }
}
