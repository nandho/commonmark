<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matkul extends Model
{
    use HasFactory;
    use HasUuid;

    protected $fillable = ['kode_matkul', 'nama_matkul', 'sks', 'semester', 'kelas', 'nama_dosen'];
}
