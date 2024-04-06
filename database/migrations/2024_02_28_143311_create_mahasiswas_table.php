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
        Schema::create('mahasiswas', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('nik');
            $table->string('nama_lengkap');
            $table->string('nomor_hp');
            $table->string('nomor_telp')->nullable();
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir'); //yyyy-mm-dd
            $table->string('jenis_kelamin');
            $table->string('alamat');
            $table->string('agama');
            $table->string('kewarganegaraan');
            $table->string('tinggi_badan');
            $table->string('berat_badan');
            $table->string('jalur_pendaftaran');
            $table->date('tahun_masuk'); //yyyy-mm-dd -> converter to_char / to_date
            $table->string('provinsi');
            $table->string('kabupaten');
            $table->string('kecamatan');
            $table->string('kelurahan');
            $table->string('kode_pos');
            $table->string('provinsi_sekolah');
            $table->string('kabupaten_sekolah');
            $table->string('tahun_lulus_sekolah');
            $table->string('no_ijazah');
            $table->string('nama_wali');
            $table->string('no_hp_wali');
            $table->string('no_telp_wali')->nullable();
            $table->string('pekerjaan_wali');
            $table->string('sumber_b_kuliah');
            $table->string('nama_sekolah');
            $table->uuid('jurusan');
            $table->integer('tahun_lulus');
            $table->string('status');
            $table->string('semester');
            $table->uuid('khs_id'); //fk 
            $table->uuid('krs_id');
            $table->uuid('pembimbing_akademik');
            $table->uuid('pembimbing_skripsi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mahasiswas');
    }
};
