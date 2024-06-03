<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
use App\Models\Matkul;
use App\Models\Kurikulum;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('matkuls', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('prodi');
            $table->string('kurikulum');
            $table->string('kode_matkul');
            $table->string('nama_matkul_indonesia');
            $table->string('nama_matkul_singkat');
            $table->string('nama_matkul_english');
            $table->string('sifat_matkul');
            $table->string('tipe_matkul');
            $table->string('kategori_matkul');
            $table->string('jenis_kurikulum');
            $table->string('sks_kurikulum');
            $table->string('teori_sks');
            $table->string('praktikum_sks');
            $table->string('praklap_sks');
            $table->string('paket_semester');
            $table->string('batas_ambil_ulang');
            $table->string('status_matkul');
            $table->string('satuan_acara_perkulihan');
            $table->string('bahan_ajar');
            $table->string('diktat');
            $table->string('dosen_pengampu');
            $table->date('tanggal_mulai_efektif');
            $table->date('tanggal_selesai_efektif');
            $table->string('bobot_nilai_minimal');
            $table->string('matkul_wajib');
            $table->string('matkul_pilihan');
            $table->string('total_matkul');
            $table->string('sks_matkul_wajib');
            $table->string('sks_matkul_pilihan');
            $table->string('total_sks_matkul');
            $table->string('ipk_minimal');
            $table->string('abstraksi');
            $table->string('file_silabus');
            $table->timestamps();
        });

        Schema::table('matkuls', function (Blueprint $table) {
            $table->foreign('kurikulum')->references('id')->on('kurikulums');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('matkuls');
    }
};
