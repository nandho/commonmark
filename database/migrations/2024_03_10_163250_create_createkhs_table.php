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
        Schema::create('khs', function (Blueprint $table) {
            $table->uuid('id');
            $table->uuid('pembimbing_akademik');
            $table->string('mata_kuliah');
            $table->integer('jumlah_sks');
        });
        Schema::create('khs', function (Blueprint $table) {
            $table->foreign('pembimbing_akademik')->references('id')->on('pem__akademik_models');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::create('khs', function (Blueprint $table) {
            $table->dropForeign('khs_to_pem_ak_relation')->references('id')->on('pem__akademik_models');
        });

        Schema::dropIfExists('createkhs');
    }
};
