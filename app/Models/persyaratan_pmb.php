<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class persyaratan_pmb extends Model
{
    use HasFactory, HasUuids;
    public $timestamps = false;

    protected $table = 'persyaratan_pmb';

    protected $fillable = [
        'id_mahasiswa','ijazah', 'transkip', 'ktp', 'akta', 'surat_ket_narkoba',
    ];

}
