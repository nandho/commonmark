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
        Schema::create('kurikulums', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('nama_kurikulum');
            $table->string('tahun');
            $table->string('nomor');
            $table->date('tanggal');
            $table->string('pihak_acc');
            $table->string('tanggal_acc');
            $table->string('studi_ideal');
            $table->string('studi_maks');
            $table->string('keterangan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kurikulums');
    }
};