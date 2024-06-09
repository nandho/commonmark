<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class KrsModel extends Model
{
    use HasUuids;

    protected $table = 'krs';

    protected $fillable = [
        'kelas',
        'kode_mk',
        'nama_mk',
        'sks',
        'semester',
        'tahun_akademik',
        'status_krs',
        'keterangan'
    ];

    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $keyType = 'string';
}
