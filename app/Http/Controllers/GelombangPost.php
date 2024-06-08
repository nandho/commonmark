<?php

namespace App\Http\Controllers;

use App\Http\Resources\GelombangResource;
use App\Models\GelombangModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class GelombangPost extends Controller
{
    public function __construst(){
        //add schema middleware to add some to edit db data
    }
    public function index()
    {
        $data = GelombangModel::all();
        return new GelombangResource(true, 'success', $data);
    }
    public function store(Request $request)
    {
        //will input jurusan
        $validator = Validator::make($request->all(),[
            'gelombang'=> 'required',
            'periode'=> 'required',
            'semester'=> 'required',
            'status'=> 'required',
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
            $data = new GelombangModel();
            $data->fill($requestData);

            // Simpan objek ke database
            $data->save();

            // Jika penyimpanan berhasil, kirim respons sukses
            return new GelombangResource(true, 'success', $data);
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

        $data = GelombangModel::find($id);

        if (!$data) {
            return new GelombangResource(false, 'not found', null);
        }

        return new GelombangResource(true, 'success', $data);
    }

    public function update(Request $request, $id)
    {
        // get data and update data
        $validator = Validator::make($request->all(),[
            'gelombang'=> 'required',
            'periode'=> 'required',
            'semester'=> 'required',
            'status'=> 'required',
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
            $data = GelombangModel::findOrFail($id);
            $data->fill($requestData);

            // Simpan objek ke database
            $data->save();

            // Jika penyimpanan berhasil, kirim respons sukses
            return new GelombangResource(true, 'success', $data);
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
        $data = GelombangModel::findorfail($id);

        //delete post
        $data->delete();

        //return response
        return new GelombangResource(true, 'Data Post Berhasil Dihapus!', null);
    }
}
