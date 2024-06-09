<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    //ijazah, transkip, ktp, akta, surat bebas narkoba
    public function up(): void
    {
        Schema::create('persyaratan_pmb', function (Blueprint $table){
            $table->uuid('id')->primary();
            $table->string('ijazah')->nullable();
            $table->string('transkrip')->nullable();
            $table->string('ktp')->nullable();
            $table->string('akta')->nullable();
            $table->string('surat_ket_narkoba')->nullable();
            $table->uuid('id_calon_mahasiswa')->unique();
        });

        Schema::table('persyaratan_pmb', function (Blueprint $table) {
            $table->foreign('id_calon_mahasiswa')->references('id')->on('pmb');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('persyaratan_pmb');
    }
};
