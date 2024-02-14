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
        Schema::create('pmb', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('nomor_pendaftaran');
            $table->string('nik');
            $table->string('nama_lengkap');
            $table->string('nomor_hp');
            $table->string('nomor_telp')->nullable();
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('jenis_kelamin');
            $table->string('alamat');
            $table->string('agama');
            $table->string('kewarganegaraan');
            $table->string('tinggi_badan')->nullable();
            $table->string('berat_badan')->nullable();
            $table->string('jalur_pendaftaran');
            $table->string('periode_pendaftaran');
            $table->string('provinsi');
            $table->string('kabupaten');
            $table->string('kecamatan');
            $table->string('kelurahan');
            $table->string('kode_pos');
            $table->string('provinsi_sekolah');
            $table->string('kabupaten_sekolah');
            $table->string('tahun_lulus_sekolah');
            $table->string('no_ijazah');
            $table->string('nama_wali')->nullable();
            $table->string('no_hp_wali')->nullable();
            $table->string('no_telp_wali')->nullable();
            $table->string('pekerjaan_wali')->nullable();
            $table->string('sumber_b_kuliah')->nullable();
            $table->string('npsn')->nullable();
            $table->uuid('jurusan')->nullable();
            $table->timestamps();
        });  
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pmb');   
    }
};
