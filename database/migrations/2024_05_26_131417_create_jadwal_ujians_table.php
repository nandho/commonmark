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
        Schema::create('jadwal_ujians', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('id_mahasiswa');
            $table->date('hari');
            $table->time('waktu');
            $table->uuid('id_matakuliah');


            $table->foreign('id_mahasiswa')->references('id')->on('mahasiswas')->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->foreign('id_matakuliah')->references('id')->on('matkuls')->onDelete('CASCADE')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jadwal_ujians');
    }
};
