<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Support\Facades\Validator;
use App\Http\Resources\mahasiswaResource;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class MahasiswaPost extends Controller
{
    //
    public function index() 
    {
        $data = Mahasiswa::all();
        return new MahasiswaResource(true, 'success', $data);
    }

    public function store(Request $request)
    {
        //will input jurusan
        $validator = Validator::make($request->all(),[
            'nik'=> 'required',
            'nama_lengkap'=> 'required',
            'nomor_hp'=> 'required',
            'nomor_telp'=> 'nullable',
            'tempat_lahir'=> 'required',
            'tanggal_lahir'=> 'required',
            'jenis_kelamin'=> 'required|in:Laki-laki,Perempuan',
            'alamat'=> 'required',
            'agama'=> 'required',
            'kewarganegaraan'=> 'required',
            'tinggi_badan'=> 'required',
            'berat_badan'=> 'required',
            'jalur_pendaftaran'=> 'required',
            'tahun_masuk'=> 'required',
            'provinsi'=> 'required',
            'kabupaten'=> 'required',
            'kecamatan'=> 'required',
            'kelurahan'=> 'required',
            'kode_pos'=> 'required',
            'provinsi_sekolah'=> 'required',
            'kabupaten_sekolah'=> 'required',
            'tahun_lulus_sekolah'=> 'required',
            'no_ijazah'=> 'required',
            'nama_wali'=> 'required',
            'no_hp_wali'=> 'required',
            'no_telp_wali'=> 'nullable',
            'pekerjaan_wali'=> 'required',
            'sumber_b_kuliah'=> 'required',
            'nama_sekolah'=> 'required',
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
            $data = new Mahasiswa();
            $data->fill($requestData);

            // Simpan objek ke database
            $data->save();

            // Jika penyimpanan berhasil, kirim respons sukses
            return new MahasiswaResource(true, 'success', $data);
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

        $data = MahasiswaModel::find($id);

        if (!$data) {
            return new MahasiswaResource(false, 'not found', null);
        }

        return new MahasiswaResource(true, 'success', $data);
    }

    public function update(Request $request, $id)
    {
        // get data and update data
        $validator = Validator::make($request->all(),[
            'nik'=> 'required',
            'nama_lengkap'=> 'required',
            'nomor_hp'=> 'required',
            'nomor_telp'=> 'nullable|required',
            'tempat_lahir'=> 'required',
            'tanggal_lahir'=> 'required',
            'jenis_kelamin'=> 'required|in:Laki-laki,Perempuan',
            'alamat'=> 'required',
            'agama'=> 'required',
            'kewarganegaraan'=> 'required',
            'tinggi_badan'=> 'required',
            'berat_badan'=> 'required',
            'jalur_pendaftaran'=> 'required',
            'tahun_masuk'=> 'required',
            'provinsi'=> 'required',
            'kabupaten'=> 'required',
            'kecamatan'=> 'required',
            'kelurahan'=> 'required',
            'kode_pos'=> 'required',
            'provinsi_sekolah'=> 'required',
            'kabupaten_sekolah'=> 'required',
            'tahun_lulus_sekolah'=> 'required',
            'no_ijazah'=> 'required',
            'nama_wali'=> 'required',
            'no_hp_wali'=> 'required',
            'no_telp_wali'=> 'nullable|required',
            'pekerjaan_wali'=> 'required',
            'sumber_b_kuliah'=> 'required',
            'nama_sekolah'=> 'required',
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
            $data = Mahasiswa::findOrFail($id);
            $data->fill($requestData);

            // Simpan objek ke database
            $data->save();

            // Jika penyimpanan berhasil, kirim respons sukses
            return new MahaiswaResource(true, 'success', $data);
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
        $data = Mahasiswa::findorfail($id);

        //delete post
        $data->delete();

        //return response
        return new MahasiswaResource(true, 'Data Post Berhasil Dihapus!', null);
    }
}
