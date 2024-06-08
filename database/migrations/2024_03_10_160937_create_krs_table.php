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
        // id uuid
        // pembimbing_akademik_id uuid
        // mata_kuliah varchar
        // jumlah_sks int
        Schema::table('krs', function (Blueprint $table) {
            $table->uuid('pembimbing_akademik');
            $table->string('mata_kuliah');
            $table->integer('jumlah_sks');
            $table->boolean('status_persetujuan');
        });

        //creating relation into table pembimbing akademik
        Schema::table('krs', function (Blueprint $table) {
            $table->foreign('pembimbing_akademik')->references('id')->on('pem__akademik_models');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('krs', function (Blueprint $table) {
            $table->dropForeign('krs_to_pem_ak_relation');
        });

        Schema::dropIfExists('krs');
    }
};
