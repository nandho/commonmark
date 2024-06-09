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
        // nama_lengkap varchar
        // jabatan varchar //kaprodi admisi dsb
        // nip varchar
        // email varchar
        // no_hp varchar
        Schema::create('backoffices', function (Blueprint $table) {
            $table->uuid('id')->nullable(false)->primary();
            $table->string('nama_lengkap');
            $table->string('jabatan');
            $table->string('nip');
            $table->string('email');
            $table->string('no_hp');
            $table->uuid('id_akun');
            $table->timestamps();
        });

        Schema::table('backoffices', function (Blueprint $table) {
            $table->foreign('id_akun')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('backoffices');
    }
};
