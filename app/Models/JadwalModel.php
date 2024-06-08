<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\kelas_kuliah;
use App\Models\ruang_kelas;


class JadwalModel extends Model
{
    use HasFactory,HasUuids;

    protected $table = 'Jadwals';

    protected $fillable = [
        'id_kelas',
        'id_ruang_kelas',
        'id_hari',
        'id_waktu'
    ];

    public function id_kelas():HasMany
    {
        return $this->hasMany(kelas_kuliah::class,'kelas');
    }

    public function id_ruang_kelas():HasMany
    {
        return $this->hasMany(ruang_kelas::class,'ruang_kelas');

    }
    public function id_waktu():HasMany
    {
        return $this->hasMany(slotwaktu::class, 'waktu');
    }
}
