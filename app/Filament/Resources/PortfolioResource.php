<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PortfolioResource\Pages;
use App\Models\Portfolio;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Forms;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;

class PortfolioResource extends Resource
{
    protected static ?string $model = Portfolio::class;

    protected static ?string $navigationIcon = 'heroicon-o-rocket-launch';
    protected static ?string $navigationGroup = 'Operasional Bisnis';
    protected static ?int $navigationSort = 1;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make()
                ->columns()
                ->schema([
                TextInput::make('title')
                    ->label('Judul Portofolio')
                    ->required()
                    ->minLength(3)
                    ->maxLength(255),
                Select::make('category')
                    ->label('Pilih Kategori')
                    ->options([
                        'fotografi' => 'Fotografi',
                        'Desain' => 'Desain Grafis',
                        'videografi' => 'Videografi',
                    ])
                    ->required()
                    ->reactive(),
                FileUpload::make('image')
                    ->label('Masukan Portfolio')
                    ->hint('Uploud Image jika anda memilih category selain Videografi')
                    ->preserveFilenames()
                    ->previewable(true),
                TextInput::make('video')
                    ->label('Masukan Link Video')
                    ->hidden(fn ($get) => $get('category') !== 'videografi')
                    ->required(),
                ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')
                    ->label('Judul Portofolio')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('category')
                    ->label('Jenis Kategori')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('image')
                    ->label('Portofolio')
                    ->sortable()
                    ->searchable()
                    ->getStateUsing(function($record){
                        if($record->image !== null) return $record->image;
                        return $record->video;
                    })
                    ->toggleable(isToggledHiddenByDefault: false),
            ])
            ->filters([
               SelectFilter::make('category')
                ->options([
                    'fotografi' => 'Fotografi',
                    'Desain' => 'Desain Grafis',
                    'videografi' => 'Videografi',
                ])
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
            'index' => Pages\ListPortfolio::route('/'),
            'create' => Pages\CreatePortfolio::route('/create'),
            'edit' => Pages\EditPortfolio::route('/{record}/edit'),
        ];
    }
    public static function getPluralLabel(): string
    {
        return 'Portfolio';
    }
}
