<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DosenModel extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'nidn',
        'nama_lengkap',
        'gelar_depan',
        'gelar_belakang',
        'program_studi',
        'nomor_ktp',
        'tanggal_lahir',
        'kotatempat_lahir',
        'negara_tempat_lahir',
        'kartu_pegawai',
        'stambuk',
        'jenis_kelamin',
        'golongan_darah',
        'agama',
        'status_nikah',
        'alamat_rumah',
        'kota',
        'negara',
        'kode_pos',
        'telepon_rumah',
        'fax',
        'telepon_selular',
        'telepon_kantor',
        'jenis_pegawai',
        'nomor_sk_cpns',
        'tanggal_sk_cpns',
        'tmt_pns',
        'golongan_pnd',
        'tanggal_masuk_pt',
        'sumpah_pns',
        'nomor_taspen',
        'instansi_asal',
        'catatan',
        'nomor_dosen',
        'gelar_akademik_tertinggi',
        'pt_gelar_diperoleh',
        'jabatan',
        'status_ikatan_kerja',
        'bidang_ilmu',
        'kode_instansi_induk',
        'status_sertifikat_mengajar',
        'nomor_sertifikat_mengajar',
        'status_surat_ijin_mengajar',
        'nomor_surat_ijin_mengajar',
        'status_aktifitas',
        'semester_keluar',
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