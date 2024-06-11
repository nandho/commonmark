<?php

namespace App\Http\Controllers;


use App\Models\KrsModel;
use Illuminate\Http\Request;
use App\Http\Resources\krsresource;
use Illuminate\Support\Facades\Validator;

class KrsController extends Controller
{
    public function index()
    {
        //will return all data
        $data = KrsModel::all();
        return new krsresource(true, 'success', $data);
    }

    public function store(Request $request)
    {
        //will input jurusan
        $validator = Validator::make($request->all(), [
            'kelas' => 'required',
            'kode_mk' => 'required',
            'nama_mk' => 'required',
            'sks' => 'required',
            'semester' => 'required',
            'tahun_akademik' => 'required',
            'status_krs' => 'nullable',
            'status_validasi' => 'nullable',
            'keterangan' => 'required',
            'id_dosen' => 'required|exists:dosen_models,id',
            'id_mahasiswa' => 'required|exists:mahasiswas,id',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Gagal menyimpan data',
                'error' => $validator->errors(),
            ], 400);
        }

        $requestData = $validator->valid();

        try {
            // Buat objek PmbModel baru dengan data dari request
            $data = new KrsModel();
            $data->fill($requestData);

            // Simpan objek ke database
            $data->save();

            // Jika penyimpanan berhasil, kirim respons sukses
            return new krsresource(true, 'success', $data);
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

        $data = KrsModel::find($id);

        if (!$data) {
            return new krsresource(false, 'not found', null);
        }

        return new krsresource(true, 'success', $data);
    }

    public function update(Request $request, $id)
    {
        // get data and update data
        $validator = Validator::make($request->all(), [
            'kelas' => 'nullable',
            'kode_mk' => 'nullable',
            'nama_mk' => 'nullable',
            'sks' => 'nullable',
            'semester' => 'nullable',
            'tahun_akademik' => 'nullable',
            'status_krs' => 'nullable',
            'status_validasi' => 'nullable',
            'keterangan' => 'nullable',
            'id_dosen' => 'nullable|exists:dosen_models,id',
            'id_mahasiswa' => 'nullable|exists:mahasiswas,id',
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
            $data = KrsModel::findOrFail($id);
            $data->fill($requestData);

            // Simpan objek ke database
            $data->save();

            // Jika penyimpanan berhasil, kirim respons sukses
            return new krsresource(true, 'success', $data);
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
        $data = KrsModel::findorfail($id);

        //delete post
        $data->delete();

        //return response
        return new krsresource(true, 'Data Post Berhasil Dihapus!', null);
    }
}
