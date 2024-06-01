<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\HasUuids;

class Kurikulum extends Model
{
    use HasFactory;
    use HasUuid;

    protected $table = 'kurikulums';

    protected $fillable = [
        'kode_kurikulum',
        'nama_kurikulum',
        'sks',
        'semester',
        'kelas',
        'kurikulum',
    ];

    protected $primaryKey = 'id';
    protected $keyType = 'string';
    public $incrementing = false;
}
