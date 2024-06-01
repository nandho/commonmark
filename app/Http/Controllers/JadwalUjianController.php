<?php

namespace App\Http\Controllers;

use App\Http\Resources\JadwalUjian as JadwalUjianResource;
use App\Models\JadwalUjian as JadwalUjianModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class JadwalUjianController extends Controller
{

    public function __construct(){

    }

    public function index()
    {
        //will return all data
        $data = JadwalUjianModel::all();
        return new JadwalUjianResource(true,'success',$data);
    }

    public function store(Request $request)
    {
        //will input JadwalUjian
        $validator = Validator::make($request->all(),[
            'id_mahasiswa'=> 'required|exist:mahasiswas,id',
            'hari'=> 'required|date',
            'waktu'=> 'required|time',
            'id_matakuliah'=> 'required|exists:kelas_kuliah,id',
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
            $data = new JadwalUjianModel();
            $data->fill($requestData);

            // Simpan objek ke database
            $data->save();

            // Jika penyimpanan berhasil, kirim respons sukses
            return new JadwalUjianResource(true, 'success', $data);
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
        //will return specified JadwalUjian

        $data = JadwalUjianModel::find($id);

        if (!$data) {
            return new JadwalUjianResource(false, 'not found', null);
        }

        return new JadwalUjianResource(true, 'success', $data);
    }

    public function update(Request $request, $id)
    {
        // get data and update data
        $validator = Validator::make($request->all(),[
            'id_mahasiswa'=> 'exists:mahasiswa,id',
            'hari'=> 'date',
            'waktu'=> 'time',
            'id_matakuliah'=> 'exists:kelas_kuliah,id',
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
            $data = JadwalUjianModel::findOrFail($id);
            $data->fill($requestData);

            // Simpan objek ke database
            $data->save();

            // Jika penyimpanan berhasil, kirim respons sukses
            return new JadwalUjianResource(true, 'success', $data);
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
        $data = JadwalUjianModel::findorfail($id);

        //delete post
        $data->delete();

        //return response
        return new JadwalUjianResource(true, 'Data Post Berhasil Dihapus!', null);
    }
}
