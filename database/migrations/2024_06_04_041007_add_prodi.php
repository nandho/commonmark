<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('prodi', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('nama_program_studi_dikti');
            $table->string('jenjang');
            $table->string('nama');
            $table->string('nama_asing');
            $table->string('nama_singkat');
            $table->string('kode_ujian');
            $table->string('kode_universitas');
            $table->string('fakultas');
            $table->string('jurusan');
            $table->string('model_perkuliahan');
            $table->int('jumlah_sks_lulus');
            $table->string('alamat');
            $table->string('telepon');
            $table->string('fax');
            $table->email('email');
            $table->string('website');
            $table->string('kontak_person');
            $table->string('frekuensi_peninjauan_kurikulum');
            $table->string('pelaksanaan_peninjauan_kurikulum');
            $table->date('tanggal_berdiri');
            $table->string('status');
            $table->string('semester_mulai');
            $table->string('no_sk_dikti');
            $table->date('tanggal_sk_dikti');
            $table->date('tanggal_akhir_berlaku_sk');
            $table->uuid('kepala_prodi');
            $table->string('no_telp_kepala_prodi');
            $table->uuid('nama_operator');
            $table->string('nomor_telepon_operator');

            $table->foreign('kepala_prodi')->references('id')->on('dosen')->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->foreign('nama_operator')->references('id')->on('backoffice')->onDelete('CASCADE')->onUpdate('CASCADE');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prodi');
    }
};
