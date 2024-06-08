<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use app\Models\Mahasiswa;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Tagihan extends Model
{
    use HasFactory, HasUuids;

    protected $table = 'tagihans';

    protected $fillable = [
        'id_mahasiswa',
        'jenis_tagihan',
        'jumlah_pembayaran',
        'tanggal_awal_pembayaran',
        'batas_pembayaran',
        'tanggal_pembayaran',
        'status_pembayaran',
        'status_pembayaran',
    ];

    protected $primaryKey = "id";
    protected $keyType = "string";
    public function id_mahasiswa():HasMany
    {
        return $this->hasMany(Mahasiswa::class, 'nama_lengkap');
    }
}
