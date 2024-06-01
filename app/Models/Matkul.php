<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;


class Matkul extends Model
{
    use HasFactory;
    use HasUuids;

    protected $fillable = ['kode_matkul', 'nama_matkul', 'sks', 'semester', 'kelas', 'nama_dosen', 'kurikulum'];
}
