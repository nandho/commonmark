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
        Schema::create('kelas_kuliah',function (Blueprint $table){
            $table->uuid('id')->primary();
            $table->string('kelas');
            $table->string('dosen');
            $table->string('rombel')->default('A');
            $table->uuid('semester');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kelas_kuliah');
    }
};
