<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'invoice_id', 'total'
    ];

    public function invoice()
    {
        return $this->belongsTo(Invoice::class);
    }

    protected static function booted()
    {
        static::creating(function ($item) {
            // Ambil invoice terkait
            $invoice = Invoice::find($item->invoice_id);

            if ($invoice) {
                // Hitung total pembayaran dari invoice
                $totalPayment = $invoice->items()->sum('subtotal');
                
                // Isi properti total dengan nilai total pembayaran
                $item->total = $totalPayment;
            }
        });
    }
}
