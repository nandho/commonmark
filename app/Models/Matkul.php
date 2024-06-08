<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Matkul extends Model
{
    use HasFactory;
    use HasUuids;
    protected $table = 'matkuls';

    protected $fillable = [
        'prodi',
        'kurikulum',
        'kode_matkul',
        'nama_matkul_indonesia',
        'nama_matkul_singkat',
        'nama_matkul_english',
        'nama_matkul_singkat_english',
        'sifat_matkul',
        'tipe_matkul',
        'kategori_matkul',
        'jenis_kurikulum',
        'sks_kurikulum',
        'teori_sks',
        'praktikum_sks',
        'praklap_sks',
        'paket_semester',
        'batas_ambil_ulang',
        'status_matkul',
        'satuan_acara_perkulihan',
        'bahan_ajar',
        'diktat',
        'dosen_pengampu',
        'tanggal_mulai_efektif',
        'tanggal_selesai_efektif',
        'bobot_nilai_minimal',
        'matkul_wajib',
        'matkul_pilihan',
        'total_matkul',
        'sks_matkul_wajib',
        'sks_matkul_pilihan',
        'total_sks_matkul',
        'ipk_minimal',
        'abstraksi',
        'file_silabus'
    ];
}
