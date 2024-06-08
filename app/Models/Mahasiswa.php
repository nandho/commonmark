<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;


class Mahasiswa extends Model
{
    use HasFactory;

    protected $fillable = [
    'nik',
    'nama_lengkap',
    'nomor_hp',
    'nomor_telp',
    'tempat_lahir',
    'tanggal_lahir',
    'jenis_kelamin',
    'alamat',
    'agama',
    'kewarganegaraan',
    'tinggi_badan',
    'berat_badan',
    'jalur_pendaftaran',
    'tahun_masuk',
    'provinsi',
    'kabupaten',
    'kecamatan',
    'kelurahan',
    'kode_pos',
    'provinsi_sekolah',
    'kabupaten_sekolah',
    'tahun_lulus_sekolah',
    'no_ijazah',
    'nama_wali',
    'no_hp_wali',
    'no_telp_wali',
    'pekerjaan_wali',
    'sumber_b_kuliah',
    'nama_sekolah'
    ];

    protected static function boot()
    {
        parent::boot();
        static::creating(function ($model) {
            if (empty($model->{$model->getKeyName()})) {
                $model->{$model->getKeyName()} = Str::uuid()->toString();
            }
        });
    }

    public function getIncrementing()
    {
        return false;
    }

    /**
     * Kita override getKeyType method
     *
     * Memberi tahu laravel bahwa model ini menggunakan primary key bertipe string
     */
    public function getKeyType()
    {
        return 'string';
    }
}
