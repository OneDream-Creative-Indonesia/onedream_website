<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;
   protected $fillable = ['invoice_number', 'customer_name', 'customer_address', 'invoice_date', 'due_date', 'invoice_type', 'bank_detail_id'];
    protected $casts = [
        'invoice_date' => 'date',
        'due_date' => 'date',
    ];
    public function items()
    {
        return $this->hasMany(InvoiceItem::class);
    }

    public function paymentDetails()
    {
        return $this->hasOne(PaymentDetail::class);
    }
   
    public function bankDetail()
    {
        return $this->belongsTo(BankDetail::class, 'bank_detail_id');
    }

}
