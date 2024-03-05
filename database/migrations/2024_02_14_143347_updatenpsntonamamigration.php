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
            // $table->changeColumn('npsn', 'nama_sekolah');
            DB::statement('ALTER TABLE pmb CHANGE npsn nama_sekolah VARCHAR(255)');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('pmb', function (Blueprint $table) {
            // $table->changeColumn('nama_sekolah', 'npsn');
            DB::statement('ALTER TABLE pmb CHANGE nama_sekolah npsn VARCHAR(255)');
        });
    }
};
