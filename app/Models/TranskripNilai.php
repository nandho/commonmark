<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TranskripNilai extends Model
{
    use HasFactory;
    use Uuid;

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
