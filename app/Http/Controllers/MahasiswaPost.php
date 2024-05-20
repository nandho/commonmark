<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Support\Facades\Validator;
use App\Http\Resources\mahasiswaResource;
use App\Models\PmbModel;
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
        // Validate the input data
        $validator = Validator::make($request->all(), [
            'data' => 'required|array',
            'data.*.id' => 'required|exists:pmb,id'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Validation failed',
                'errors' => $validator->errors(),
            ], 400);
        }

        // Retrieve all validated data
        $validatedData = $validator->validated();

        try {
            // Collect all PMB IDs from the request
            $pmbIds = array_column($validatedData['data'], 'id');

            // Fetch all corresponding PMB records in one query
            $pmbRecords = PmbModel::whereIn('id', $pmbIds)->get();

            // Initialize an array to hold the Mahasiswa data for batch insertion
            $mahasiswaData = [];

            foreach ($pmbRecords as $pmbRecord) {
                $mahasiswaData[] = [
                    'nik' => $pmbRecord->nik,
                    'nama_lengkap' => $pmbRecord->nama_lengkap,
                    'nomor_hp' => $pmbRecord->nomor_hp,
                    'nomor_telp' => $pmbRecord->nomor_telp,
                    'tempat_lahir' => $pmbRecord->tempat_lahir,
                    'tanggal_lahir' => $pmbRecord->tanggal_lahir,
                    'jenis_kelamin' => $pmbRecord->jenis_kelamin,
                    'alamat' => $pmbRecord->alamat,
                    'agama' => $pmbRecord->agama,
                    'kewarganegaraan' => $pmbRecord->kewarganegaraan,
                    'tinggi_badan' => $pmbRecord->tinggi_badan,
                    'berat_badan' => $pmbRecord->berat_badan,
                    'jalur_pendaftaran' => $pmbRecord->jalur_pendaftaran,
                    'tahun_masuk' => $pmbRecord->tahun_masuk,
                    'provinsi' => $pmbRecord->provinsi,
                    'kabupaten' => $pmbRecord->kabupaten,
                    'kecamatan' => $pmbRecord->kecamatan,
                    'kelurahan' => $pmbRecord->kelurahan,
                    'kode_pos' => $pmbRecord->kode_pos,
                    'provinsi_sekolah' => $pmbRecord->provinsi_sekolah,
                    'kabupaten_sekolah' => $pmbRecord->kabupaten_sekolah,
                    'tahun_lulus_sekolah' => $pmbRecord->tahun_lulus_sekolah,
                    'no_ijazah' => $pmbRecord->no_ijazah,
                    'nama_wali' => $pmbRecord->nama_wali,
                    'no_hp_wali' => $pmbRecord->no_hp_wali,
                    'no_telp_wali' => $pmbRecord->no_telp_wali,
                    'pekerjaan_wali' => $pmbRecord->pekerjaan_wali,
                    'sumber_b_kuliah' => $pmbRecord->sumber_b_kuliah,
                    'nama_sekolah' => $pmbRecord->nama_sekolah,
                    'created_at' => now(),
                    'updated_at' => now()
                ];
            }

            // Perform batch insert
            Mahasiswa::insert($mahasiswaData);

            // Return a successful response with the imported data
            return response()->json([
                'success' => true,
                'message' => 'Data saved successfully',
                'data' => array_column($mahasiswaData['data'], 'id')
            ], 201);

        } catch (\Exception $e) {
            // Handle any errors that occur during the save process
            return response()->json([
                'success' => false,
                'message' => 'Failed to save data',
                'error' => $e->getMessage(),
            ], 500);
        }
    }

    public function show($id)
    {
        //will return specified jurusan

        $data = Mahasiswa::find($id);

        if (!$data) {
            return new MahasiswaResource(false, 'not found', null);
        }

        return new MahasiswaResource(true, 'success', $data);
    }

    public function update(Request $request, $id)
    {
        // get data and update data
        $validator = Validator::make($request->all(), [
            'nik' => 'required',
            'nama_lengkap' => 'required',
            'nomor_hp' => 'required',
            'nomor_telp' => 'nullable|required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'jenis_kelamin' => 'required|in:Laki-laki,Perempuan',
            'alamat' => 'required',
            'agama' => 'required',
            'kewarganegaraan' => 'required',
            'tinggi_badan' => 'required',
            'berat_badan' => 'required',
            'jalur_pendaftaran' => 'required',
            'tahun_masuk' => 'required',
            'provinsi' => 'required',
            'kabupaten' => 'required',
            'kecamatan' => 'required',
            'kelurahan' => 'required',
            'kode_pos' => 'required',
            'provinsi_sekolah' => 'required',
            'kabupaten_sekolah' => 'required',
            'tahun_lulus_sekolah' => 'required',
            'no_ijazah' => 'required',
            'nama_wali' => 'required',
            'no_hp_wali' => 'required',
            'no_telp_wali' => 'nullable|required',
            'pekerjaan_wali' => 'required',
            'sumber_b_kuliah' => 'required',
            'nama_sekolah' => 'required',
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
            //kodingan untuk menambahkan foto
            $data->fill($requestData);

            // Simpan objek ke database
            $data->save();

            //membuat akun mahasiswa

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
