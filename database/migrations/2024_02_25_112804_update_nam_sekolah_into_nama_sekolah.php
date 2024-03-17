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
            // $table->renameColumn('nam_sekolah', 'nama_sekolah');
            // DB::statement('ALTER TABLE pmb CHANGE nam_sekolah nama_sekolah VARCHAR(255)');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('pmb', function (Blueprint $table) {
            // $table->renameColumn('nama_sekolah', 'nam_sekolah');
            // DB::statement('ALTER TABLE pmb CHANGE nama_sekolah nam_sekolah VARCHAR(255)');
        });
    }
};
