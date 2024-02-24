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
        Schema::table('jawabans', function (Blueprint $table) {
            $table->foreign('id_calon_mahasiswa')->references('id')->on('pmb');
            $table->foreign('id_soal')->references('id')->on('soals');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('jawabans', function (Blueprint $table) {
            $table->dropForeign(['id_calon_mahasiswa']);
            $table->dropForeign(['id_soal']);
            $table->dropColumn('id_calon_mahasiswa');
            $table->dropColumn('id_soal');
        });
    }
};
