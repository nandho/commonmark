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
        Schema::create('soals', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->text('soal');
            $table->text('pilihan1');
            $table->text('pilihan2');
            $table->text('pilihan3');
            $table->text('pilihan4');
            $table->char('kunci_jawaban', 1)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('soals');
    }
};
