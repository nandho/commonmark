<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Concern\HasUuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Rencana_Evaluasi extends Model
{
    use HasFactory;
    use HasUuids;

    protected $table = 'rencana_evaluasi'; // assuming the table name is 'rencana_evaluasi'

    protected $fillable = [
        'aktivitas_partisipatif',
        'hasil_proyek',
        'tugas',
        'quiz',
        'ujian_tengah_semester',
        'ujian_akhir_semester',
        'total_bobot',
    ];
}
