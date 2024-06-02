<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids; // Import trait HasUuids

class Kurikulum extends Model
{
    use HasFactory;
    use HasUuids;

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
