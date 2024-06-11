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
        // id uuid
        // pembimbing_akademik_id uuid
        // mata_kuliah varchar
        // jumlah_sks int
        Schema::create('krs', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('kelas');
            $table->string('kode_mk');
            $table->string('nama_mk');
            $table->string('sks');
            $table->string('semester');
            $table->string('tahun_akademik');
            $table->string('status_krs')->default('Belum di setujui');
            $table->string('status_validasi')->default('Belum di setujui');
            $table->string('keterangan');
            $table->uuid('id_dosen');
            $table->uuid('id_mahasiswa');

            $table->foreign('id_dosen')->references('id')->on('mahasiswas');
            $table->foreign('id_mahasiswa')->references('id')->on('dosen_models');
        });

        // //creating relation into table pembimbing akademik
        // Schema::table('krs', function (Blueprint $table) {
        //     // $table->foreign('pembimbing_akademik')->references('id')->on('pem__akademik_models');
        //     $table->foreign('kelas')->references('id')->on('kelas_kuliah');
        //     $table->foreign('kode_mk')->references('id')->on('matkuls');
        // });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Schema::table('krs', function (Blueprint $table) {
        //     $table->dropForeign('krs_to_pem_ak_relation');
        // });

        Schema::dropIfExists('krs');
    }
};
