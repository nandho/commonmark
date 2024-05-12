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
        Schema::table('backoffices',function (Blueprint $table){
            $table->uuid('jabatan')->change();
        });

        Schema::table('backoffices',function (Blueprint $table){
            $table->foreign('jabatan')->references('id')->on('divisi')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('backoffices', function (Blueprint $table) {
            // Drop foreign key constraint
            $table->dropForeign(['jabatan']);

            // Change column type back to its original type
            $table->string('jabatan')->change();
        });
    }
};
