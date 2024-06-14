<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CustomersResource\Pages;
use App\Filament\Resources\CustomersResource\RelationManagers;
use App\Models\Customers;
use Filament\Forms;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\Filter;
use Filament\Tables\Table;

class CustomersResource extends Resource
{
    protected static ?string $model = Customers::class;

    protected static ?string $navigationIcon = 'heroicon-o-user-group';
    protected static ?string $navigationGroup = 'Operasional Bisnis';
    protected static ?int $navigationSort = 3;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make()
                ->columns()
                ->schema([
                TextInput::make('name')
                    ->label('Nama Pelanggan')
                    ->required()
                    ->minLength(3)
                    ->maxLength(255),
                TextInput::make('kontak')
                    ->label('Kontak Pelanggan')
                    ->required()
                    ->tel()
                    ->minLength(3)
                    ->maxLength(255),
                DatePicker::make('tanggal')
                    ->label('Tanggal Project')
                    ->required(),
                TextInput::make('link')
                    ->label('Link Project')
                    ->required()
                    ->minLength(3)
                    ->maxLength(255)
                    ->prefix('https://'),
                Textarea::make('testimoni')
                    ->label('Testimoni Pelanggan')
                    ->required(),
                ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->label('Nama Pelanggan')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('kontak')
                    ->label('Kontak Pelanggan')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('tanggal')
                    ->label('Tanggal Project')
                    ->date()
                    ->searchable()
                    ->sortable(),
                TextColumn::make('link')
                    ->label('Link Project')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('testimoni')
                    ->label('Testimoni Pelanggan')
                    ->limit(50)
                    ->searchable()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: false),

            ])
            ->filters([
                Filter::make('min_tanggal')
                    ->form([
                        DatePicker::make('min_tanggal')
                            ->label('Min Tanggal'),
                    ])->query(function ($query, array $data) {
                        return $query
                            ->when(
                                $data['min_tanggal'],
                                function ($query) use ($data) { 
                                    return $query->whereDate('tanggal', '>=', $data['min_tanggal']);
                                }
                            );
                    }),
                    Filter::make('max_tanggal')
                    ->form([
                        DatePicker::make('max_tanggal')
                            ->label('Max Tanggal'),
                    ])->query(function ($query, array $data) {
                        return $query
                            ->when(
                                $data['max_tanggal'],
                                function ($query) use ($data) {
                                    return $query->whereDate('tanggal', '<=', $data['max_tanggal']);
                                }
                            );
                    })
                ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ]);
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
            'index' => Pages\ListCustomers::route('/'),
            'create' => Pages\CreateCustomers::route('/create'),
            'edit' => Pages\EditCustomers::route('/{record}/edit'),
        ];
    }
    public static function getPluralLabel(): string
    {
        return 'Pelanggan';
    }
}
