<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

class TranskripNilai extends Model
{
    use HasFactory;
    use HasUuids;

    protected $fillable = [
        'nim',
        'kode_matakuliah',
        'nilai',
        'semester',
        'kelas',
        'kurikulum',
        'kurikulum_id',
    ];
}
