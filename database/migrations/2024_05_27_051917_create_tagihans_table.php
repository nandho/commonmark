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
        Schema::create('tagihans', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('id_mahasiswa');
            $table->string('jenis_tagihan');
            $table->integer('jumlah_pembayaran');
            $table->timestamp('tanggal_awal_transaksi');
            $table->timestamp('batas_pembayaran');
            $table->timestamp('tanggal_pembayaran');
            $table->enum('status_pembayaran',['Lunas','Belum Dibayarkan']);
            $table->timestamps();

            $table->foreign('id_mahasiswa')->references('id')->on('mahasiswa')->onDelete('CASCADE')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tagihans');
    }
};
