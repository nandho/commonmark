<?php

namespace App\Http\Controllers;

use App\Http\Resources\Pem_SkripsiResource;
use App\Models\Pem_SkripsiModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class Pem_SkripsiPost extends Controller
{
    public function index()
    {
        $data = Pem_SkripsiModel::all();
        return new Pem_SkripsiResource(true, 'success', $data);
    }
    public function store(Request $request)
    {
        //will input jurusan
        $validator = Validator::make($request->all(), [
            'id_dosen' => 'required',
            'id_mahaiswa' => 'required',
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
            $data = new Pem_SkripsiModel();
            $data->fill($requestData);

            // Simpan objek ke database
            $data->save();

            // Jika penyimpanan berhasil, kirim respons sukses
            return new Pem_SkripsiResource(true, 'success', $data);
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

        $data = Pem_SkripsiModel::find($id);

        if (!$data) {
            return new Pem_SkripsiResource(false, 'not found', null);
        }

        return new Pem_SkripsiResource(true, 'success', $data);
    }

    public function update(Request $request, $id)
    {
        // get data and update data
        $validator = Validator::make($request->all(), [
            'id_dosen' => 'required',
            'id_mahaiswa' => 'required',
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
            $data = Pem_SkripsiModel::findOrFail($id);
            $data->fill($requestData);

            // Simpan objek ke database
            $data->save();

            // Jika penyimpanan berhasil, kirim respons sukses
            return new Pem_SkripsiResource(true, 'success', $data);
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
        $data = Pem_SkripsiModel::findorfail($id);

        //delete post
        $data->delete();

        //return response
        return new Pem_SkripsiResource(true, 'Data Post Berhasil Dihapus!', null);
    }
}
