<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PmbModel;

use App\Models\User;

class PmbModelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Menambahkan data dummy ke dalam tabel PMB
        $user = User::create([
            'username' => '2032001',
            'email' => 'testing@testing.com',
            'password' => bcrypt('12345678')
        ]);

        $user->assignRole('calonmahasiswa');

        PmbModel::create([
            'nomor_pendaftaran' => '20220001',
            'nik' => '1234567890123456',
            'nama_lengkap' => 'John Doe',
            'nomor_hp' => '08123456789',
            'nomor_telp' => '021123456',
            'tempat_lahir' => 'Jakarta',
            'tanggal_lahir' => '1990-05-15',
            'jenis_kelamin' => 'Laki-laki',
            'alamat' => 'Jl. Sudirman No. 123',
            'agama' => 'Islam',
            'kewarganegaraan' => 'Indonesia',
            'jalur_pendaftaran' => 'UMPTKIN',
            'periode_pendaftaran' => '2024',
            'provinsi' => 'DKI Jakarta',
            'kabupaten' => 'Jakarta Selatan',
            'kecamatan' => 'Kebayoran Lama',
            'kelurahan' => 'Gandaria Utara',
            'kode_pos' => '12345',
            'provinsi_sekolah' => 'DKI Jakarta',
            'kabupaten_sekolah' => 'Jakarta Selatan',
            'tahun_lulus_sekolah' => '2010',
            'no_ijazah' => '123456789',
            'nama_wali' => 'Jane Doe',
            'no_hp_wali' => '08123456700',
            'no_telp_wali' => '021123456',
            'pekerjaan_wali' => 'Pegawai Swasta',
            'sumber_b_kuliah' => 'Hasil Ujian Nasional',
            'npsn' => '12345678',
            'jurusan_id' => '53998129-bd10-4fc9-8dfa-64747429d32e', // assuming you have a valid `jurusan_id`
            'jenis_sekolah'=> 'smk',
            // 'foto' => 'default.jpg', // assuming you have a default or a specific file name
            'jurusan_asal' => 'Science',
            'id_akun' => $user->id, // assuming you have a valid `id_akun`
            'nik_wali' => '9876543210987654' // example value
        ]);


        // PmbModel::create([
        //     'nomor_pendaftaran' => '20220002',
        //     'nik' => '1234567890123457',
        //     'nama_lengkap' => 'Jane Doe',
        //     'nomor_hp' => '08123456700',
        //     'tempat_lahir' => 'Bandung',
        //     'tanggal_lahir' => '1992-10-20',
        //     'jenis_kelamin' => 'Perempuan',
        //     'alamat' => 'Jl. Ahmad Yani No. 456',
        //     'agama' => 'Kristen',
        //     'kewarganegaraan' => 'Indonesia',
        //     'jalur_pendaftaran' => 'UMPTKIN',
        //     'periode_pendaftaran' => '2024',
        //     'provinsi' => 'Jawa Barat',
        //     'kabupaten' => 'Bandung',
        //     'kecamatan' => 'Cicendo',
        //     'kelurahan' => 'Cihapit',
        //     'kode_pos' => '67890',
        //     'provinsi_sekolah' => 'Jawa Barat',
        //     'kabupaten_sekolah' => 'Bandung',
        //     'tahun_lulus_sekolah' => '2012',
        //     'no_ijazah' => '987654321',
        //     'nama_wali' => 'John Doe',
        //     'no_hp_wali' => '08123456789',
        //     'no_telp_wali' => '022987654',
        //     'perkerjaan_wali' => 'Wiraswasta',
        //     'sumber_b_kuliah' => 'Rekomendasi Guru',
        //     'npsn' => '87654321',
        //     // Isi atribut lainnya sesuai kebutuhan
        // ]);
    }
}
