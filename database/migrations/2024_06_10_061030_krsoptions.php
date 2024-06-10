<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        //membuat view menggunakan query raw
        //krs matkuls
        DB::unprepared("CREATE VIEW vw_matkul_options AS
                SELECT kode_matkul, nama_matkul_indonesia, nama_matkul_singkat, nama_matkul_english, nama_matkul_singkat_english
                FROM matkuls;
                ");

        //create view semester
        DB::unprepared("CREATE VIEW vw_smester_options AS
                SELECT nama_semester, status, tanggal_mulai, tanggal_selesai
                FROM semesters;
                ");

        DB::unprepared("CREATE VIEW vw_kelas_options AS
                SELECT kelas,dosen
                FROM kelas_kuliah;
                ");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::unprepared('DROP VIEW vw_kelas_option');
        DB::unprepared('DROP VIEW vw_semester_option');
        DB::unprepared('DROP VIEW vw_matkul_option');
    }
};
