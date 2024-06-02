<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Matkul;
use App\Models\DosenModel;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use App\Http\Resources\DosenResource;

class MatakuliahController extends Controller
{
    //
    public function index()
    {
        $data = Matkul::all();
        return new PostMatkul(true,'Success',$data);
    }
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'kode_matkul' => 'required',
            'nama_matkul' => 'required',
            'nama_dosen' => 'required',
            'sks' => 'required',
            'semester' => 'required',
            'kelas' => 'required',
            'kurikulum' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Gagal Menyimpan Data',
                'data' => $validator->errors()
            ],400);
        }
        $requestData = $request->all();

        try {
            $data = Matkul::create($requestData);
            return response()->json([
                'success' => true,
                'message' => 'Data berhasil disimpan',
                'uuid' => $data->id
            ], 200);
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
        $data = Matkul::find($id);
        if (!$data) {
            return new PostMatkul(false,'Data Tidak Ditemukan',null);
        }
        return new PostMatkul(true,'Success',$data);
    }
    public function update(Request $request, $id)
    {
       $validator = Validator::make($request->all(),[
        'kode' => 'required',
        'nama' => 'required',
        'sks' => 'required',
        'semester' => 'required',
        'kelas' => 'required',
        'kurikulum' => 'required',
       ]);
       if ($validator->fails()) {
        return response()->json([
            'success' => false,
            'message' => 'Gagal Menyimpan Data',
            'data' => $validator->errors()
        ],400);
       }
       try{
        $data = Matkul::find($id);
        if (!$data) {
            return new PostMatkul(false,'Data Tidak Ditemukan',null);
        }
        $data->update($request->all());
        return new PostMatkul(true,'Success',$data);
       } catch (\Exception $e) {
        return response()->json([
            'success' => false,
            'message' => 'Gagal Menyimpan Data',
            'data' => $e->getMessage()
        ],500);
       }
    }
    public function destroy($id)
    {
        $data = Matkul::find($id);
        if (!$data) {
            return new PostMatkul(false,'Data Tidak Ditemukan',null);
        }
        $data->delete();
        return new PostMatkul(true,'Success',$data);
    }
}

