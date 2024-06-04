<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Matkul;
use App\Models\DosenModel;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use App\Http\Resources\DosenResource;
use App\Http\Resources\PostMatkul;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

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
        'prodi' => 'required',
        'kurikulum' => 'required',
        'kode_matkul' => 'required',
        'nama_matkul_indonesia' => 'required',
        'nama_matkul_singkat' => 'required',
        'nama_matkul_english' => 'required',
        'nama_matkul_singkat_english' => 'required',
        'sifat_matkul' => 'required',
        'tipe_matkul' => 'required',
        'kategori_matkul' => 'required',
        'jenis_kurikulum' => 'required',
        'sks_kurikulum' => 'required',
        'teori_sks' => 'required',
        'praktikum_sks' => 'required',
        'praklap_sks' => 'required',
        'paket_semester' => 'required',
        'batas_ambil_ulang' => 'required',
        'status_matkul' => 'required',
        'satuan_acara_perkulihan' => 'required',
        'bahan_ajar' => 'required',
        'diktat' => 'required',
        'dosen_pengampu' => 'required',
        'tanggal_mulai_efektif' => 'required',
        'tanggal_selesai_efektif' => 'required',
        'bobot_nilai_minimal' => 'required',
        'matkul_wajib' => 'required',
        'matkul_pilihan' => 'required',
        'total_matkul' => 'required',
        'sks_matkul_wajib' => 'required',
        'sks_matkul_pilihan' => 'required',
        'total_sks_matkul' => 'required',
        'ipk_minimal' => 'required',
        'abstraksi' => 'required',
        'file_silabus' => 'mimes:pdf|max:50000',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Gagal Menyimpan Data',
                'data' => $validator->errors()
            ],400);
        }
        $requestData = $request->all();
        $requestData['file_silabus'] = $request->file('file_silabus')->storePublicly('public/matkuls/file_silabus');

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
        'prodi' => 'required',
        'kurikulum' => 'required',
        'kode_matkul' => 'required',
        'nama_matkul_indonesia' => 'required',
        'nama_matkul_singkat' => 'required',
        'nama_matkul_english' => 'required',
        'sifat_matkul' => 'required',
        'tipe_matkul' => 'required',
        'kategori_matkul' => 'required',
        'jenis_kurikulum' => 'required',
        'sks_kurikulum' => 'required',
        'teori_sks' => 'required',
        'praktikum_sks' => 'required',
        'praklap_sks' => 'required',
        'paket_semester' => 'required',
        'batas_ambil_ulang' => 'required',
        'status_matkul' => 'required',
        'satuan_acara_perkulihan' => 'required',
        'bahan_ajar' => 'required',
        'diktat' => 'required',
        'dosen_pengampu' => 'required',
        'tanggal_mulai_efektif' => 'required',
        'tanggal_selesai_efektif' => 'required',
        'bobot_nilai_minimal' => 'required',
        'matkul_wajib' => 'required',
        'matkul_pilihan' => 'required',
        'total_matkul' => 'required',
        'sks_matkul_wajib' => 'required',
        'sks_matkul_pilihan' => 'required',
        'total_sks_matkul' => 'required',
        'ipk_minimal' => 'required',
        'abstraksi' => 'required',
        'file_silabus' => 'mimes:pdf|max:10000',
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

