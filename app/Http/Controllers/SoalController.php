<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\soal;
use App\Http\Resources\soalResource;

class SoalController extends Controller
{
    public function index()
    {
        //will return all data
        $data = soal::select(
            'id',
            'soal',
            'pilihan1',
            'pilihan2',
            'pilihan3',
            'pilihan4',
            'foto'
        )->get();
        $data['count'] = count($data);
        return new soalResource(true, 'success', $data);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'soal' => 'required|string',
            'deskripsi' => 'required|string',
            'foto' => 'nullable|image|mimes:jpeg,jpg,png,gif',
            'pilihan1' => 'required|string',
            'pilihan2' => 'required|string',
            'pilihan3' => 'required|string',
            'pilihan4' => 'required|string',
            'kunci_jawaban' => 'required|string|size:1|in:A,B,C,D',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Gagal menyimpan data',
                'error' => $validator->errors(),
            ], 400);
        }

        $requestData = $request->all();

        if ($request->hasFile('foto')) {
            $image = $request->file('foto');
            $image->storePubliclyAs('public/soalfoto/', $image->hashName());
            $requestData['foto'] = $image->hashName();
        }

        try {
            $soal = new Soal();
            $soal->fill($requestData);
            $soal->save();

            return new SoalResource(true, 'success', $soal);
        } catch (\Exception $e) {
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

        $data = soal::find($id);

        if (!$data) {
            return new soalResource(false, 'not found', null);
        }

        return new soalResource(true, 'success', $data);
    }

    public function update(Request $request, $id)
    {
        // get data and update data
        $validator = Validator::make($request->all(), [
            'soal' => 'nullable|string',
            'pilihan1' => 'nullable|string',
            'pilihan2' => 'nullable|string',
            'pilihan3' => 'nullable|string',
            'pilihan4' => 'nullable|string',
            'foto' => 'nullable|image|mimes:jpeg,jpg,png,gif',
            'kunci_jawaban' => 'nullable|string|size:1|in:A,B,C,D',
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
            // Buat objek soal baru dengan data dari request
            $data = soal::findOrFail($id);
            $data->fill($requestData);

            // Simpan objek ke database
            $data->save();

            // Jika penyimpanan berhasil, kirim respons sukses
            return new soalResource(true, 'success', $data);
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
        $data = soal::findorfail($id);

        //delete foto jika ada
        if ($data->foto) {
        }

        //delete post
        $data->delete();


        //return response
        return new soalResource(true, 'Data Post Berhasil Dihapus!', null);
    }
}
