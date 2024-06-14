<?php

namespace App\Filament\Resources\ToolLendingResource\Pages;

use App\Filament\Resources\ToolLendingResource;
use Filament\Actions;
use Filament\Pages\Actions\Action;
use Filament\Resources\Pages\EditRecord;

class EditToolLending extends EditRecord
{
    protected static string $resource = ToolLendingResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
            Action::make('back')->label(__('Back'))->url(ToolLendingResource::getUrl('index')),
        ];
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

}
