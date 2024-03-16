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
        Schema::table('dosen_models', function (Blueprint $table){
            $table->uuid('id_akun');
        });
        Schema::table('mahasiswas', function (Blueprint $table){
            $table->uuid('id_akun');
        });
        Schema::table('dosen_models', function (Blueprint $table){
            $table->foreign('id_akun')->references('id')->on('users')->onDelete('cascade');
        });
        Schema::table('mahasiswas', function (Blueprint $table){
            $table->foreign('id_akun')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //deleting foreign key
        Schema::table('dosen_models', function (Blueprint $table){
            $table->dropForeign('id_akun');
        });
        Schema::table('mahasiswas', function (Blueprint $table){
            $table->dropForeign('id_akun');
        });

        //remove field from table
        Schema::table('dosen_models', function (Blueprint $table){
            $table->dropColumn('id_akun');
        });
        Schema::table('mahasiswas', function (Blueprint $table){
            $table->dropColumn('id_akun');
        });
    }
};
