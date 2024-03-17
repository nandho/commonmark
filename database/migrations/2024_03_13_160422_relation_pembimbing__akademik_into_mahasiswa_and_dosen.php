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
        Schema::table('pem__akademik_models', function (Blueprint $table) {
            $table->foreign('id_dosen')->references('id')->on('dosen_models')->onDelete('cascade');
        });
        Schema::table('pem__akademik_models', function (Blueprint $table) {
            $table->foreign('id_mahasiswa')->references('id')->on('mahasiswas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('pem__akademik_models', function (Blueprint $table) {
            $table->dropForeign('id_dosen');
        });
        Schema::table('pem__akademik_models', function (Blueprint $table) {
            $table->dropForeign('id_mahasiswa');
        });
    }
};
