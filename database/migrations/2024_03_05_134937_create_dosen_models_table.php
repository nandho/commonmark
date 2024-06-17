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
        Schema::create('dosen_models', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->integer('nidn');
            $table->string('nama_lengkap');
            $table->string('gelar_depan');
            $table->string('gelar_belakang');
            $table->string('program_studi');
            $table->string('nomor_ktp');
            $table->string('tanggal_lahir');
            $table->string('kotatempat_lahir');
            $table->string('negara_tempat_lahir');
            $table->string('kartu_pegawai');
            $table->string('stambuk');
            $table->string('jenis_kelamin');
            $table->string('golongan_darah');
            $table->string('agama');
            $table->string('status_nikah');
            $table->string('alamat_rumah');
            $table->string('kota');
            $table->string('negara');
            $table->string('kode_pos');
            $table->string('telepon_rumah')->nullable();
            $table->string('fax');
            $table->string('telepon_selular');
            $table->string('telepon_kantor')->nullable();
            $table->string('jenis_pegawai');
            $table->string('nomor_sk_cpns');
            $table->string('tanggal_sk_cpns');
            $table->string('tmt_pns');
            $table->string('golongan_pnd');
            $table->string('tanggal_masuk_pt');
            $table->string('sumpah_pns');
            $table->string('nomor_taspen');
            $table->string('instansi_asal');
            $table->string('catatan');
            $table->string('nomor_dosen');
            $table->string('gelar_akademik_tertinggi');
            $table->string('pt_gelar_diperoleh');
            $table->string('jabatan');
            $table->string('status_ikatan_kerja');
            $table->string('bidang_ilmu');
            $table->string('kode_instansi_induk');
            $table->string('status_sertifikat_mengajar');
            $table->string('nomor_sertifikat_mengajar');
            $table->string('status_surat_ijin_mengajar');
            $table->string('nomor_surat_ijin_mengajar');
            $table->string('status_aktifitas');
            $table->string('semester_keluar');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dosen_models');
    }
};
