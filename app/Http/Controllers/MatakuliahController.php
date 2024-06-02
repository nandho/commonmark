<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Matkul;
use App\Models\DosenModel;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use App\Http\Resources\DosenResource;
use App\Http\Resources\PostMatkul;
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
            'kode' => 'required',
            'nama' => 'required',
            'sks' => 'required',
            'semester' => 'required',
            'kelas' => 'required',
            'kurikulum' => 'required',
            'kurikulum_id' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Gagal Menyimpan Data',
                'data' => $validator->errors()
            ],400);
        }
        $requestData = $request->all();

        try{
            $user = User::create([
                'username'=>$request->nidn,
                'email'=>$request->email,
                'password'=>bcrypt($request->password)
            ]);

            $requestData['id_akun'] = $user->id;

            // Buat objek PmbModel baru dengan data dari request
            $data = new DosenModel();
            $data->fill($requestData);

            // Simpan objek ke database
            $data->save();

            // Jika penyimpanan berhasil, kirim respons sukses
            return new DosenResource(true, 'success', $data);
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
        'kurikulum_id' => 'required',
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

