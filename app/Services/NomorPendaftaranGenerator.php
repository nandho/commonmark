<?php

namespace App\Services;
use App\Models\PmbModel;

class NomorPendaftaranGenerator
{
    /**
     * Generate a unique registration number.
     *
     * @return string
     */
    public static function generate($kode_jurusan)
    {
        $lastnumber = count(PmbModel::all())+1; 
        $lastnumber = str_pad($lastnumber, 2, '0', STR_PAD_LEFT);
        $tanggal = date('ym');
        // Menggunakan uniqid() untuk menghasilkan ID unik berdasarkan waktu saat ini
        // Anda dapat menyesuaikan format sesuai kebutuhan, misalnya dengan menambahkan awalan atau akhiran tertentu
        // Mengembalikan nomor pendaftaran yang unik
        echo($tanggal.$kode_jurusan.$lastnumber);
        return $tanggal.$kode_jurusan.$lastnumber;

    }
}
