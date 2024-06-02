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
        Schema::create('nilai_matkuls', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('kode_matkul');
            $table->string('nama_matkul');
            $table->string('sks');
            $table->string('semester');
            $table->string('kelas');
            $table->string('nilai');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nilai_matkuls');
    }
};
