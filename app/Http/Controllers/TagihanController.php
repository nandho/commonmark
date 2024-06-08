<?php

namespace App\Http\Controllers;

use App\Http\Resources\TagihanResource;
use App\Models\Tagihan as TagihanModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TagihanController extends Controller
{
    public function __construct()
    {

    }

    public function index()
    {
        //will return all data
        $data = TagihanModel::all();
        return new TagihanResource(true, 'success', $data);
    }

    public function store(Request $request)
    {
        //will input ruang_kelas
        $validator = Validator::make($request->all(), [
            'tanggal' => 'required|date',
            'ruang_kelas' => 'required',
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
            $data = new TagihanModel();
            $data->fill($requestData);

            // Simpan objek ke database
            $data->save();

            // Jika penyimpanan berhasil, kirim respons sukses
            return new TagihanResource(true, 'success', $data);
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
        //will return specified ruang_kelas

        $data = TagihanModel::find($id);

        if (!$data) {
            return new TagihanResource(false, 'not found', null);
        }

        return new TagihanResource(true, 'success', $data);
    }

    public function update(Request $request, $id)
    {
        // get data and update data
        $validator = Validator::make($request->all(), [
            'tanggal' => 'date',
            'ruang_kelas' => 'string',
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
            $data = TagihanModel::findOrFail($id);
            $data->fill($requestData);

            // Simpan objek ke database
            $data->save();

            // Jika penyimpanan berhasil, kirim respons sukses
            return new TagihanResource(true, 'success', $data);
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
        $data = TagihanModel::findorfail($id);

        //delete post
        $data->delete();

        //return response
        return new TagihanResource(true, 'Data Post Berhasil Dihapus!', null);
    }
}
