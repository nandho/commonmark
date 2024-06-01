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
        // Schema::table('khs', function (Blueprint $table) {
        //     // $table->uuid('id')->nullable(false)->primary()->change();

        Schema::table('khs', function (Blueprint $table) {
            // Cek apakah kolom 'id' sudah ada, jika tidak, tambahkan
            if (!Schema::hasColumn('khs', 'id')) {
                $table->uuid('id')->nullable(false);
                $table->primary('id');
            } else {
                // Jika kolom 'id' sudah ada, pastikan hanya mengubahnya menjadi primary
                $table->uuid('id')->primary()->change();
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Schema::table('khs', function (Blueprint $table) {
        //     $table->dropPrimary();
        // });
        // Schema::table('khs', function (Blueprint $table) {
        //     $table->uuid('id');
        // });
        Schema::table('khs', function (Blueprint $table) {
            // Cek apakah kunci primer ada
            $sm = Schema::getConnection()->getDoctrineSchemaManager();
            $indexes = $sm->listTableIndexes('khs');
            if (array_key_exists('primary', $indexes)) {
                $table->dropPrimary();
            }
        });
        Schema::table('khs', function (Blueprint $table) {
            $table->uuid('id');
        });
    }
};
