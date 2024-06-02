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
        Schema::create('jadwal', function (Blueprint $table){
            $table->uuid('id')->primary();
            $table->uuid('id_kelas');
            $table->uuid('id_ruang_kelas');
            $table->uuid('id_hari');

            $table->foreign('id_kelas')->references('id')->on('kelas_kuliah')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_ruang_kelas')->references('id')->on('ruang_kelas')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_hari')->references('id')->on('hari')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jadwal');
    }
};
