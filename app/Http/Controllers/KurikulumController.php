<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kurikulum;

class KurikulumController extends Controller
{

    public function index()
    {
        $data = Kurikulum::all();
        return new PostKurikulum(true,'Success',$data);
    }

    // Menyimpan kurikulum baru ke dalam database
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama_kurikulum' => 'required',
            'kode_kurikulum' => 'required',
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
        $requestData = request->all();

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

    // Menampilkan form untuk mengedit kurikulum
    public function show($id){
        $data = kurikulum::find($id);
        if(!$data){
            return new PostKurikulum(false,'Data Tidak Ditemukan',null);
        }
        return new PostKurikulum(true,'Data Ditemukan',$data);
    }

    // Memperbarui kurikulum di database
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'nama_kurikulum' => 'required',
            'kode_kurikulum' => 'required',
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
        $requestData = request->all();

        try{
            $data = Kurikulum::find($id);
            $data->update($requestData);
            return new PostKurikulum(true,'Data Berhasil Diupdate',$data);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Gagal menyimpan data',
                'error' => $e->getMessage(),
            ], 500);
        }
    }

    // Menghapus kurikulum dari database
    public function destroy($id)
    {
        $kurikulum = Kurikulum::findOrFail($id);
        $kurikulum->delete();
        return redirect()->route('kurikulum.index')->with('success', 'Kurikulum berhasil dihapus.');
    }
}

