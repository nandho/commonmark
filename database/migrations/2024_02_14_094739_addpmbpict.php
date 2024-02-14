<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class addpmbpict extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pmb', function (Blueprint $table) {
            $table->string('foto')->nullable()->after('jurusan');
            // Tambahkan kolom 'photo' yang dapat berisi path atau nama file foto
            // 'nullable()' digunakan agar kolom ini bisa kosong (tidak wajib memiliki nilai)
            // 'after('jurusan')' digunakan untuk menempatkan kolom baru setelah kolom 'jurusan'
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pmb', function (Blueprint $table) {
            $table->dropColumn('foto');
            // Hapus kolom 'photo' jika migrasi di-rollback
        });
    }
}
