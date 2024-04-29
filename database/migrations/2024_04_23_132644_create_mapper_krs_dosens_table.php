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
        Schema::create('mapper_krs_dosens', function (Blueprint $table) {
            $table->id();
            $table->uuid('id_krs');
            $table->uuid('id_dosen');
        });

        Schema::table('mapper_krs_dosens',function (Blueprint $table){
            $table->foreign('id_dosen')->references('id')->on('dosen_models');
            $table->foreign('id_krs')->references('id')->on('krs');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mapper_krs_dosens');
    }
};
