<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class ToolLending extends Model
{
    protected $fillable = [
        'nama',
        'nama_barang',
        'tanggal_pinjam',
        'tanggal_kembali',
        'status',
        'alasan',
    ];

    protected $guarded = ['id'];

    use HasFactory;

}
