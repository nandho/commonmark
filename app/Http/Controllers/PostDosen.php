<?php

namespace App\Http\Controllers;

use App\Http\Resources\dosenResource;
use App\Models\DosenModel;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PostDosen extends Controller
{
    public function index()
    {
        $data = DosenModel::all();
        return new DosenResource(true, 'success', $data);
    }
        public function store(Request $request)
    {
        //will input jurusan
        $validator = Validator::make($request->all(),[
            'nidn'=> 'required',
            'nama_lengkap'=> 'required',
            'gelar_depan'=> 'nullable',
            'gelar_belakang'=> 'required',
            'program_studi'=> 'required',
            'nomor_ktp'=> 'required',
            'tanggal_lahir'=> 'required',
            'kotatempat_lahir'=> 'required',
            'negara_tempat_lahir'=> 'nullable',
            'kartu_pegawai'=> 'required',
            'stambuk'=> 'required',
            'jenis_kelamin'=> 'required',
            'golongan_darah'=> 'required',
            'agama'=> 'required',
            'status_nikah'=> 'required',
            'alamat_rumah'=> 'required',
            'kota'=> 'required',
            'negara'=> 'required',
            'kode_pos'=> 'required',
            'telepon_rumah'=> 'required',
            'fax'=> 'required',
            'telepon_selular'=> 'required',
            'telepon_kantor'=> 'required',
            'jenis_pegawai'=> 'required',
            'nomor_sk_cpns'=> 'nullable',
            'tanggal_sk_cpns'=> 'nullable',
            'tmt_pns'=> 'nullable',
            'golongan_pnd'=> 'required',
            'tanggal_masuk_pt'=> 'nullable',
            'sumpah_pns'=> 'required',
            'nomor_taspen'=> 'required',
            'instansi_asal'=> 'required',
            'catatan'=> 'nullable',
            'nomor_dosen'=> 'required',
            'gelar_akademik_tertinggi'=> 'required',
            'pt_gelar_diperoleh'=> 'required',
            'jabatan'=> 'required',
            'status_ikatan_kerja'=> 'required',
            'bidang_ilmu'=> 'required',
            'kode_instansi_induk'=> 'required',
            'status_sertifikat_mengajar'=> 'required',
            'nomor_sertifikat_mengajar'=> 'required',
            'status_surat_ijin_mengajar'=> 'required',
            'nomor_surat_ijin_mengajar'=> 'required',
            'status_aktifitas'=> 'required',
            'semester_keluar'=> 'required',
            'password'=>'required|min:8',
            'email'=>'required|email',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Gagal menyimpan data',
                'error' => $validator->errors(),
            ], 400);
        }

        $requestData = $request->all();

        try {
            //daftarkan akun dengan role dosen
            // 'username',
            // 'email',
            // 'password',
            $user = User::create([
                'username' => $request->nidn,
                'email' => $request->email,
                'password' => bcrypt($request->password)
            ]);

            $user->assignRole('dosen');

            $requestData['id_akun'] = $user->id;

            // Buat objek PmbModel baru dengan data dari request
            $data = new DosenModel();
            $data->fill($requestData);

            // Simpan objek ke database
            $data->save();

            // Jika penyimpanan berhasil, kirim respons sukses
            return new DosenResource(true, 'success', $data);
        } catch (\Exception $e) {
            // Jika terjadi kesalahan, kirim respons error
            return response()->json([
                'success' => false,
                'message' => 'Gagal menyimpan data',
                'error' => $e->getMessage(),
            ], 500);
        }
    }

    public function show($id)
    {
        //will return specified jurusan

        $data = DosenModel::find($id);

        if (!$data) {
            return new DosenResource(false, 'not found', null);
        }

        return new DosenResource(true, 'success', $data);
    }

    public function update(Request $request, $id)
    {
        // get data and update data
        $validator = Validator::make($request->all(),[
            'nidn'=> 'required',
            'nama_lengkap'=> 'required',
            'gelar_depan'=> 'nullable',
            'gelar_belakang'=> 'required',
            'program_studi'=> 'required',
            'nomor_ktp'=> 'required',
            'tanggal_lahir'=> 'required',
            'kotatempat_lahir'=> 'required',
            'negara_tempat_lahir'=> 'nullable',
            'kartu_pegawai'=> 'required',
            'stambuk'=> 'required',
            'jenis_kelamin'=> 'required',
            'golongan_darah'=> 'required',
            'agama'=> 'required',
            'status_nikah'=> 'required',
            'alamat_rumah'=> 'required',
            'kota'=> 'required',
            'negara'=> 'required',
            'kode_pos'=> 'required',
            'telepon_rumah'=> 'required',
            'fax'=> 'required',
            'telepon_selular'=> 'required',
            'telepon_kantor'=> 'required',
            'jenis_pegawai'=> 'required',
            'nomor_sk_cpns'=> 'nullable',
            'tanggal_sk_cpns'=> 'nullable',
            'tmt_pns'=> 'nullable',
            'golongan_pnd'=> 'required',
            'tanggal_masuk_pt'=> 'nullable',
            'sumpah_pns'=> 'required',
            'nomor_taspen'=> 'required',
            'instansi_asal'=> 'required',
            'catatan'=> 'nullable',
            'nomor_dosen'=> 'required',
            'gelar_akademik_tertinggi'=> 'required',
            'pt_gelar_diperoleh'=> 'required',
            'jabatan'=> 'required',
            'status_ikatan_kerja'=> 'required',
            'bidang_ilmu'=> 'required',
            'kode_instansi_induk'=> 'required',
            'status_sertifikat_mengajar'=> 'required',
            'nomor_sertifikat_mengajar'=> 'required',
            'status_surat_ijin_mengajar'=> 'required',
            'nomor_surat_ijin_mengajar'=> 'required',
            'status_aktifitas'=> 'required',
            'semester_keluar'=> 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Gagal menyimpan data',
                'error' => $validator->errors(),
            ], 400);
        }

        $requestData = $request->all();

        try {

            // Buat objek PmbModel baru dengan data dari request
            $data = DosenModel::findOrFail($id);
            $data->fill($requestData);

            // Simpan objek ke database
            $data->save();

            // Jika penyimpanan berhasil, kirim respons sukses
            return new DosenResource(true, 'success', $data);
        } catch (\Exception $e) {
            // Jika terjadi kesalahan, kirim respons error
            return response()->json([
                'success' => false,
                'message' => 'Gagal menyimpan data',
                'error' => $e->getMessage(),
            ], 500);
        }
    }

    public function destroy($id)
    {
        //will delete data
        $data = DosenModel::findorfail($id);

        //delete post
        $data->delete();

        //return response
        return new DosenResource(true, 'Data Post Berhasil Dihapus!', null);
    }
}
