<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use App\Models\backoffice;
use App\Models\DosenModel;

class ProdiModel extends Model
{
    use HasFactory, HasUuids;

    protected $table = 'prodi';
    protected $fillable = [
        'nama_program_studi_dikti',
        'jenjang',
        'nama',
        'nama_asing',
        'nama_singkat',
        'kode_ujian',
        'kode_universitas',
        'fakultas',
        'jurusan',
        'model_perkuliahan',
        'jumlah_sks_lulus',
        'alamat',
        'telepon',
        'fax',
        'email',
        'website',
        'kontak_person',
        'frekuensi_peninjauan_kurikulum',
        'pelaksanaan_peninjauan_kurikulum',
        'tanggal_berdiri',
        'status',
        'semester_mulai',
        'no_sk_dikti',
        'tanggal_sk_dikti',
        'tanggal_akhir_berlaku_sk',
        'kepala_prodi',
        'no_telp_kepala_prodi',
        'nama_operator',
        'nomor_telepon_operator',
    ];

    protected $keyType = 'string';
    public $incrementing = 'false';
    public $timestamps = false;


    public function kepala_prodi(): HasOne
    {
        return $this->hasOne(DosenModel::class);
    }

    public function nama_operator(): HasOne
    {
        return $this->hasOne(backoffice::class);
    }
}
