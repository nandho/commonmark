<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PmbModel extends Model
{
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
        'foto', // tambahkan kolom 'photo' ke dalam fillable
    ];

    public function jurusan()
    {
        return $this->belongsTo('App\Jurusan');
    }

    public function getPhotoUrlAttribute()
    {
        // Ambil nama file foto dari atribut 'photo'
        $photoName = $this->attributes['foto'];

        // Jika foto tidak kosong
        if ($photoName) {
            // Ganti 'storage_path' dengan lokasi penyimpanan foto di proyek Laravel Anda
            return asset('storage/pmbfoto/' . $photoName);
        }

        // Jika foto kosong, return null atau URL default sesuai kebutuhan Anda
        return null;
    }
}
