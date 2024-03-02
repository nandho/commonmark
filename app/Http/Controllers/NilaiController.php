<?php

namespace App\Http\Controllers;
use App\Http\Resources\nilaiResource;
use App\Models\nilai;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class NilaiController extends Controller
{
    public function index()
    {
        //will return all data
        $data = nilai::all();
        return new nilaiResource(true,'success',$data);
    }

    public function store(Request $request)
    {
        //will input jurusan
        $validator = Validator::make($request->all(),[
            'id_calon_mahasiswa' => 'required',
            'nilai'=> 'required',
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
            $data = new nilai();
            $data->fill($requestData);

            // Simpan objek ke database
            $data->save();

            // Jika penyimpanan berhasil, kirim respons sukses
            return new nilaiResource(true, 'success', $data);
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

        $data = nilai::find($id);

        if (!$data) {
            return new nilaiResource(false, 'not found', null);
        }

        return new nilaiResource(true, 'success', $data);
    }

    public function update(Request $request, $id)
    {
        // get data and update data
        $validator = Validator::make($request->all(),[
            'id_calon_mahasiswa' => 'required',
            'nilai'=> 'required',
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
            $data = nilai::findOrFail($id);
            $data->fill($requestData);

            // Simpan objek ke database
            $data->save();

            // Jika penyimpanan berhasil, kirim respons sukses
            return new nilaiResource(true, 'success', $data);
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
        $data = nilai::findorfail($id);

        //delete post
        $data->delete();

        //return response
        return new nilaiResource(true, 'Data Post Berhasil Dihapus!', null);
    }
}
