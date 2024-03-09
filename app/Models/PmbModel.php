<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Support\Str;

class PmbModel extends Model
{
    use HasFactory;
    protected $table = 'pmb';

    protected $fillable = [
        'nomor_pendaftaran',
        'nik',
        'nama_lengkap',
        'nomor_hp',
        'nomor_telp',
        'tempat_lahir',
        'tanggal_lahir',
        'jenis_kelamin',
        'jenis_sekolah',
        'alamat',
        'agama',
        'kewarganegaraan',
        'tinggi_badan',
        'berat_badan',
        'jalur_pendaftaran',
        'periode_pendaftaran',
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
        'perkerjaan_wali',
        'sumber_b_kuliah',
        'npsn',
        'jurusan',
        'foto',
        'jurusan_asal',
        'nik_wali'
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

    public function jurusan()
    {
        return $this->belongsTo('App\Jurusan');
    }

    protected function foto(): Attribute
    {
        return Attribute::make(
            get: fn ($image) => asset('/storage/pmbfoto/' . $image),
        );
    }
}
