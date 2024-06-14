<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BankDetail extends Model
{
    protected $fillable = [
        'bank',
        'cabang',
        'no_rek',
        'owner_rek',
    ];

    public function invoices()
    {
        return $this->hasMany(Invoice::class, 'bank_detail_id');
    }
    use HasFactory;
}
