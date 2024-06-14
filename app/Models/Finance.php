<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Finance extends Model
{
    protected $fillable = [
        'tanggal',
        'finance_type',
        'masuk',
        'keluar',
        'total',
        'description',
    ];

    protected $guarded = ['id'];
    use HasFactory;
}
