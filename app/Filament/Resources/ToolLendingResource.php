<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ToolLendingResource\Pages;
use App\Models\ToolLending;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;

class ToolLendingResource extends Resource
{
    protected static ?string $model = ToolLending::class;

    protected static ?string $navigationIcon = 'heroicon-o-clipboard-document-list';
    protected static ?string $navigationGroup = 'Operasional Bisnis';
    protected static ?int $navigationSort = 2;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('nama')
                    ->label('Nama Peminjam')
                    ->required()
                    ->minLength(3)
                    ->maxLength(255),
                TextInput::make('nama_barang')
                    ->label('Nama Alat yang dipinjam')
                    ->required()
                    ->minLength(3)
                    ->maxLength(255),
                DatePicker::make('tanggal_pinjam')
                    ->label('Tanggal Peminjaman')
                    ->required(),
                DatePicker::make('tanggal_kembali')
                    ->label('Tanggal Pengembalian')
                    ->required(),
                Select::make('status')->options([
                    'todo' => 'Dalam Antrean',
                    'in_progress' => 'Di Pinjam',
                    'done' => 'Di Kembalikan',
                ])
                    ->label('Status Peminjaman Alat')
                    ->required(),
                Textarea::make('alasan')
                    ->label('Keperluan Peminjaman')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        $tasks = [
            'todo' => ToolLending::where('status', 'todo')->get(),
            'in_progress' => ToolLending::where('status', 'in_progress')->get(),
            'done' => ToolLending::where('status', 'done')->get()
        ];
        return $table
            ->columns([

            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make()
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])->view('tasks', compact('tasks'));
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListToolLendings::route('/'),
            'create' => Pages\CreateToolLending::route('/create'),
            'edit' => Pages\EditToolLending::route('/{record}/edit'),
        ];
    }

    public static function getPluralLabel(): string
    {
        return 'Peminjaman Alat';
    }
}
