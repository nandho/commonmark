<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
        /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::table('pmb', function (Blueprint $table) {
            $table->dropForeign(['jurusan']);
            // Tambahkan kolom baru jurusan_id sebagai foreign key dengan tipe data UUID
            $table->uuid('jurusan_id')->nullable();

            // Hapus kolom jurusan
            $table->dropColumn('jurusan');
        });

        Schema::table('pmb', function (Blueprint $table) {
            // Tambahkan foreign key constraint
            $table->foreign('jurusan_id')->references('id')->on('jurusan');
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
            // Drop foreign key constraint
            $table->dropForeign(['jurusan_id']);

            // Drop kolom jurusan_id
            $table->dropColumn('jurusan_id');

            // Tambahkan kembali kolom jurusan
            $table->string('jurusan');
        });
    }
};
