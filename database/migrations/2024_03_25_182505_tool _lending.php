<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tool_lendings', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('nama_barang');
            $table->date('tanggal_pinjam');
            $table->date('tanggal_kembali');
            $table->string('alasan');
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tool_lendings');
    }
};
