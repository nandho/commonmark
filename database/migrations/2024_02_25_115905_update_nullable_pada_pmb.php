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
        Schema::table('pmb', function (Blueprint $table) {
            $table->string('alamat')->nullable()->change();
            $table->string('agama')->nullable()->change();
            $table->string('kewarganegaraan')->nullable()->change();
            $table->string('jalur_pendaftaran')->nullable()->change();
            $table->string('periode_pendaftaran')->nullable()->change();
            $table->string('kode_pos')->nullable()->change();
            $table->string('provinsi_sekolah')->nullable()->change();
            $table->string('kabupaten_sekolah')->nullable()->change();
            $table->string('no_ijazah')->nullable()->change();
            $table->string('pekerjaan_wali')->nullable()->change();
            $table->string('sumber_b_kuliah')->nullable()->change();
            // Remove 'nullable' from 'foto' validation rule since it's already specified here
            $table->string('foto')->nullable()->change();
            $table->string('kecamatan')->nullable()->change();
            $table->string('kelurahan')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('pmb', function (Blueprint $table) {
            $table->string('alamat')->nullable(false)->change();
            $table->string('agama')->nullable(false)->change();
            $table->string('kewarganegaraan')->nullable(false)->change();
            $table->string('jalur_pendaftaran')->nullable(false)->change();
            $table->string('periode_pendaftaran')->nullable(false)->change();
            $table->string('kode_pos')->nullable(false)->change();
            $table->string('provinsi_sekolah')->nullable(false)->change();
            $table->string('kabupaten_sekolah')->nullable(false)->change();
            $table->string('no_ijazah')->nullable(false)->change();
            $table->string('pekerjaan_wali')->nullable(false)->change();
            $table->string('sumber_b_kuliah')->nullable(false)->change();
            $table->string('foto')->nullable(false)->change();
            $table->string('kecamatan')->nullable(false)->change();
            $table->string('kelurahan')->nullable(false)->change();
        });
    }
};
