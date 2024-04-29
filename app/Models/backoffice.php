<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

class backoffice extends Model
{
    use HasUuids;

    protected $fillable = [
        'nama_lengkap',
        'jabatan',
        'nip',
        'email',
        'no_hp',
        'id_akun'
    ] ;

    protected $table = 'backoffices';
    protected $primarykey = 'id';
    protected $keyType = 'string';
    public $incrementing = 'false';
}
