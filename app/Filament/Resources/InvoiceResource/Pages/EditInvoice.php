<?php

namespace App\Filament\Resources\InvoiceResource\Pages;

use App\Filament\Resources\InvoiceResource;
use App\Models\BankDetail;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use Filament\Forms\Form;
use Filament\Forms;
use Filament\Pages\Actions\Action;
use Illuminate\Support\HtmlString;
class EditInvoice extends EditRecord
{
    protected static string $resource = InvoiceResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
            Action::make('back')->label(__('Back'))->url(InvoiceResource::getUrl('index')),
        ];
    }

    public function form(Form $form): Form
    {
        return $form
        ->schema([
            Forms\Components\Section::make('Detail Invoice')
            ->schema([
                Forms\Components\TextInput::make('invoice_number')
                    ->label('Nomor Invoice')
                    ->regex('/^ODCI\/ADM\/\d{3}\/(I|II|III|IV|V|VI|VII|VIII|IX|X|XI|XII)\/\d{4}$/i')
                    ->placeholder('Contoh Nomor : ODCI/ADM/001/I/2024')
                    ->unique(ignoreRecord:true)
                    ->helperText(new HtmlString('Ubah <strong>001</strong> dengan nomor surat, ubah <strong>I/2024</strong> dengan bulan/tahun keluar surat'))
                    ->required(),
                Forms\Components\TextInput::make('customer_name')
                    ->label('Nama Pelanggan')
                    ->required(),
                Forms\Components\Textarea::make('customer_address')
                    ->label('Alamat Pelanggan')
                    ->required(),
                Forms\Components\Select::make('invoice_type')
                    ->options([
                        'masuk' => 'Invoice Masuk',
                        'keluar' => 'Invoice Keluar',
                    ])
                    ->label('Jenis Invoice')
                    ->required()
                    ->reactive(),
                Forms\Components\DatePicker::make('invoice_date')
                    ->label('Tanggal Invoice')
                    ->required(),
                Forms\Components\DatePicker::make('due_date')
                    ->label('Tanggal Jatuh Tempo')
                    ->hidden(fn ($get) => $get('invoice_type') !== 'masuk')
                    ->required(),
            ])->collapsible()->collapsed(),

        // Invoice Items Section
        Forms\Components\Section::make('Item Invoice')
            ->schema([
                Forms\Components\Repeater::make('items')
                    ->relationship('items')
                    ->schema([
                        Forms\Components\TextInput::make('item')
                            ->label('Nama Item')
                            ->required(),
                        Forms\Components\TextInput::make('qty')
                            ->label('Kuantitas')
                            ->numeric()
                            ->required(),
                        Forms\Components\TextInput::make('price')
                            ->label('Harga')
                            ->required()
                            ->currencyMask(thousandSeparator: ',', decimalSeparator: '.'),
                    ]),
            ])->collapsible()->collapsed(),

            Forms\Components\Section::make('Info Pembayaran')
            ->schema([
                Forms\Components\Select::make('bank_detail_id')->label('Info Pembayaran')->required()
                    ->relationship('bankDetail', 'id')
                    ->options(BankDetail::pluck('id')->mapWithKeys(function ($id) {
                            $bankDetail = BankDetail::find($id);
                            $label = "{$bankDetail->bank} - {$bankDetail->cabang} - {$bankDetail->no_rek} - {$bankDetail->owner_rek}";
                            return [$id => $label];
                        }))
                        ->getOptionLabelUsing(function ($value) {
                            $bankDetail = BankDetail::find($value);
                            return "{$bankDetail->bank} - {$bankDetail->cabang} - {$bankDetail->no_rek} - {$bankDetail->owner_rek}";
                        })
                    ->reactive()
                    ->searchable(['$bankDetail'])
                    ->createOptionForm([
                        Forms\Components\TextInput::make('bank')
                            ->required(),
                        Forms\Components\TextInput::make('cabang')
                            ->required(),
                        Forms\Components\TextInput::make('no_rek')
                            ->required(),
                        Forms\Components\TextInput::make('owner_rek')
                            ->required(),
                    ])->default(function () {
                        $latestBankDetailId = BankDetail::first();
                        if ($latestBankDetailId) {
                            return $latestBankDetailId->id;
                        }
                        return null;

                    })->createOptionUsing(function ($data) {
                        $bankDetail = new BankDetail($data);
                        $bankDetail->save();
                        return $bankDetail->id;
                    }),
            ])->collapsible()->collapsed(),
        ]);
    }
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
