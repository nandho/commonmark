<?php

namespace App\Http\Controllers;

use App\Http\Resources\jawabanResource;
use App\Models\jawaban;
use App\Models\nilai;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class JawabanController extends Controller
{
    public function index()
    {
        //will return all data
        $data = jawaban::all();
        return new jawabanResource(true,'success',$data);
    }

    public function store(Request $request)
    {
        //will input jawaban
        $validator = Validator::make($request->all(),[
            'id_soal' => 'required',
            'id_calon_mahasiswa' => 'required',
            'jawaban' => 'required',
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
            $data = new jawaban();
            $data->fill($requestData);

            // Simpan objek ke database
            $data->save();

            $id_data = $data->id;
            //proses untuk generating nilai
            $jawaban_benar = DB::table('jawabans')
            ->join('soals', 'jawabans.id_soal', '=', 'soals.id')
            ->select('jawabans.*', 'soal.*') // Pilih kolom yang Anda perlukan
            ->where('jawabans.id', $id_data)
            ->count();

            $count_soal = DB::table('soals')->count();

            $nilai = ($jawaban_benar/$count_soal) * 100;

            //input nilai
            $data_nilai['nilai'] = $nilai;
            $data_nilai['id_calon_mahasiswa'] = $requestData['id_calon_mahasiswa'];
           
            try {
                $nilai_model = new nilai;
                $nilai_model->fill($data_nilai);
                $nilai_model->save();
                $data['nilai'] = $nilai;
            } catch (\Exception $e){
                // Jika terjadi kesalahan, kirim respons error
                return response()->json([
                    'success' => false,
                    'message' => 'Gagal menyimpan data',
                    'error' => $e->getMessage(),
                ], 500);
            }      
            
            // Jika penyimpanan berhasil, kirim respons sukses
            return new jawabanResource(true, 'success', $data);
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
        //will return specified jawaban

        $data = jawaban::find($id);

        if (!$data) {
            return new jawabanResource(false, 'not found', null);
        }

        return new jawabanResource(true, 'success', $data);
    }

    public function update(Request $request, $id)
    {
        // get data and update data
        $validator = Validator::make($request->all(),[
            'id_soal' => 'required',
            'id_calon_mahasiswa' => 'required',
            'jawaban' => 'required',
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
            $data = jawaban::findOrFail($id);
            $data->fill($requestData);

            // Simpan objek ke database
            $data->save();

            // Jika penyimpanan berhasil, kirim respons sukses
            return new jawabanResource(true, 'success', $data);
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
        $data = jawaban::findorfail($id);

        //delete post
        $data->delete();

        //return response
        return new jawabanResource(true, 'Data Post Berhasil Dihapus!', null);
    }
}
