<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;
use App\Models\Matakuliah;

class Kurikulum extends Model
{
    use HasFactory;
    use HasUuid;

    protected $table = 'kurikulums';

    protected $fillable =
    [
        'nama_kurikulum',
        'tahun',
        'nomor',
        'tanggal',
        'pihak_acc',
        'tanggal_acc',
        'studi_ideal',
        'studi_maks',
        'keterangan',
    ];

    protected $primaryKey = 'id';
    protected $keyType = 'string';
    public $incrementing = false;
}
