<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customers extends Model
{

    protected $fillable = ['name', 'kontak', 'tanggal', 'link', 'testimoni'];

    protected $guarded = ['id'];

    use HasFactory;
}
