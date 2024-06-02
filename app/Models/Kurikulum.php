<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kurikulum extends Model
{
    use HasFactory;
    use Uuid;

    protected $fillable = [
        'kode_kurikulum',
        'nama_kurikulum',
        'sks',
        'semester',
        'kelas',
        'kurikulum',
        'kurikulum_id',
    ];
}
