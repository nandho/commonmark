<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class Matkul extends Model
{
    use HasFactory;
    use HasUuids;

    protected $fillable = ['kode_matkul', 'nama_matkul', 'sks', 'semester', 'kelas', 'nama_dosen'];
}
