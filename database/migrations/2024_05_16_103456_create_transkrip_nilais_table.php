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
        Schema::create('transkrip_nilais', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('nim');
            $table->string('kode_matakuliah');
            $table->string('nilai');
            $table->string('semester');
            $table->string('kelas');
            $table->string('kurikulum');
            $table->string('kurikulum_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transkrip_nilais');
    }
};
