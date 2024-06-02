<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class Kurikulum extends Model
{
    use HasFactory;
    use HasUuids;

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
