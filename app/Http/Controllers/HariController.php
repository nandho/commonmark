<?php

namespace App\Http\Controllers;

use App\Http\Resources\HariResource;
use App\Models\HariModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class HariController extends Controller
{

    public function __construct(){

    }

    public function index()
    {
        //will return all data
        $data = HariModel::all();
        return new HariResource(true,'success',$data);
    }

    public function store(Request $request)
    {
        //will input hari
        $validator = Validator::make($request->all(),[
            'tanggal'=> 'required|date',
            'hari'=> 'required',
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
            $data = new HariModel();
            $data->fill($requestData);

            // Simpan objek ke database
            $data->save();

            // Jika penyimpanan berhasil, kirim respons sukses
            return new HariResource(true, 'success', $data);
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
        //will return specified hari

        $data = HariModel::find($id);

        if (!$data) {
            return new HariResource(false, 'not found', null);
        }

        return new HariResource(true, 'success', $data);
    }

    public function update(Request $request, $id)
    {
        // get data and update data
        $validator = Validator::make($request->all(),[
            'tanggal'=> 'date',
            'hari'=> 'string',
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
            $data = HariModel::findOrFail($id);
            $data->fill($requestData);

            // Simpan objek ke database
            $data->save();

            // Jika penyimpanan berhasil, kirim respons sukses
            return new HariResource(true, 'success', $data);
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
        $data = HariModel::findorfail($id);

        //delete post
        $data->delete();

        //return response
        return new HariResource(true, 'Data Post Berhasil Dihapus!', null);
    }
}

