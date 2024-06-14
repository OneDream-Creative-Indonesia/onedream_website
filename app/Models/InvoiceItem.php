<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InvoiceItem extends Model
{
    use HasFactory;
    protected $fillable = ['item', 'qty', 'price', 'subtotal','invoice_id'];

    public function invoice()
    {
        return $this->belongsTo(Invoice::class);
    }

    protected static function booted()
    {
        static::creating(function ($item) {
            $item->price = self::convertToNumber($item->price);
            $price = static::convertToNumber($item->price);
            
            if (!isset($item->subtotal)) {
                $item->subtotal = $item->qty * $price;
            }
        });
        static::updating(function ($item) {
            // Ubah harga item menjadi angka jika diperlukan
            $item->price = self::convertToNumber($item->price);

            // Hitung subtotal baru jika ada perubahan pada kuantitas atau harga
            if ($item->isDirty('qty') || $item->isDirty('price')) {
                $price = static::convertToNumber($item->price);
                $item->subtotal = $item->qty * $price;
            }
        });
        static::saved(function ($item) {
            $invoice = $item->invoice;
            $total = $invoice->items()->sum('subtotal');
    
            $paymentDetail = PaymentDetail::firstOrNew(['invoice_id' => $invoice->id]);
            $paymentDetail->total = $total;
            $paymentDetail->save();
        });
        static::updating(function ($item) {
            $invoice = $item->invoice;
            $total = $invoice->items()->sum('subtotal');
        
            $paymentDetail = PaymentDetail::firstOrNew(['invoice_id' => $invoice->id]);
            $paymentDetail->total = $total;
            $paymentDetail->save();
        });
     }

    protected static function convertToNumber($value)
    {
        $value = str_replace(',', '', $value);
        $value = str_replace('.', '', $value);
        return (float) $value;
    }

}
