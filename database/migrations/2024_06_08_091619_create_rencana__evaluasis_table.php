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
        Schema::create('rencana__evaluasis', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('aktivitas_partisipatif');
            $table->string('hasil_proyek');
            $table->string('tugas');
            $table->string('quiz');
            $table->string('ujian_tengah_semester');
            $table->string('ujian_akhir_semester');
            $table->string('total_bobot');
            $table->timestamps();
        });

        // Schema::table('rencana__evaluasis', function (Blueprint $table) {

        // });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rencana__evaluasis');
    }
};
