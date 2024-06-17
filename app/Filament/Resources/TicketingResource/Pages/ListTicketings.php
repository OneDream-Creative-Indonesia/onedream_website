<?php

namespace App\Filament\Resources\TicketingResource\Pages;

use App\Filament\Resources\TicketingResource;
use Filament\Actions;
use Filament\Actions\Action;
use Filament\Resources\Pages\ListRecords;
use Filament\Support\Colors\Color;

class ListTicketings extends ListRecords
{
    protected static string $resource = TicketingResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Action::make('exportCsv')
            ->label('Export CSV')
            ->url(route('ticketings_reports.export'))
            ->color(Color::hex('#01013D')),
        ];
    }
}
