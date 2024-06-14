<?php

namespace App\Http\Controllers;

use App\Http\Resources\JurusanResource;
use App\Models\JurusanModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class JurusanController extends Controller
{

    public function __construct(){

    }

    public function index()
    {
        //will return all data
        $data = JurusanModel::all();
        return new JurusanResource(true,'success',$data);
    }

    public function store(Request $request)
    {
        //will input jurusan
        $validator = Validator::make($request->all(),[
            'kode_jurusan'=> 'required',
            'jurusan'=> 'required',
            // 'ukt'=> 'required',
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
            $data = new JurusanModel();
            $data->fill($requestData);

            // Simpan objek ke database
            $data->save();

            // Jika penyimpanan berhasil, kirim respons sukses
            return new JurusanResource(true, 'success', $data);
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

        $data = JurusanModel::find($id);

        if (!$data) {
            return new JurusanResource(false, 'not found', null);
        }

        return new JurusanResource(true, 'success', $data);
    }

    public function update(Request $request, $id)
    {
        // get data and update data
        $validator = Validator::make($request->all(),[
            'kode_jurusan'=> 'string',
            'jurusan'=> 'string',
            'ukt'=> 'integer',
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
            $data = JurusanModel::findOrFail($id);
            $data->fill($requestData);

            // Simpan objek ke database
            $data->save();

            // Jika penyimpanan berhasil, kirim respons sukses
            return new JurusanResource(true, 'success', $data);
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
        $data = JurusanModel::findorfail($id);

        //delete post
        $data->delete();

        //return response
        return new JurusanResource(true, 'Data Post Berhasil Dihapus!', null);
    }
}
