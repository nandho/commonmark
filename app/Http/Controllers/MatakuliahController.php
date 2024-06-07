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
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cache;

class MatakuliahController extends Controller
{
    //
    public function index(Request $request)
    {
        $cacheKey = 'matkuls_' . md5(serialize($request->all()));

        $data = Cache::remember($cacheKey, 60, function () use ($request) {
            $query = Matkul::query()
                ->join('jurusan', 'matkuls.prodi', '=', 'jurusan.id')
                ->join('kurikulums', 'matkuls.kurikulum', '=', 'kurikulums.id')
                ->select('matkuls.*', 'jurusan.jurusan as nama_jurusan', 'kurikulums.nama_kurikulum');

            if ($request->has('kurikulum')) {
                $query->where('matkuls.kurikulum', $request->query('kurikulum'));
            }
            if ($request->has('prodi')) {
                $query->where('matkuls.prodi', $request->query('prodi'));
            }
            if ($request->has('kode_matkul')) {
                $query->where('matkuls.kode_matkul', 'like', '%' . $request->query('kode_matkul') . '%');
            }
            if ($request->has('nama')) {
                $query->where('matkuls.nama_matkul_indonesia', 'like', '%' . $request->query('nama') . '%');
            }

            return $query->get();
        });

        return new PostMatkul(true, 'Success', $data);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
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
            ], 400);
        }
        $requestData = $request->all();
        $requestData['file_silabus'] = $request->file('file_silabus')->storePublicly('public/matkuls/file_silabus');
        $requestData['file_silabus'] = str_replace('public/', 'storage/', $requestData['file_silabus']);
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
        $data =
            Matkul::query()
                ->join('jurusan', 'matkuls.prodi', '=', 'jurusan.id')
                ->join('kurikulums', 'matkuls.kurikulum', '=', 'kurikulums.id')
                ->join('dosen_models', 'matkuls.dosen_pengampu', '=', 'dosen_models.id')
                ->select('matkuls.*', 'jurusan.jurusan as nama_jurusan', 'kurikulums.nama_kurikulum', 'dosen_models.nama_lengkap as nama_dosen')
                ->where('matkuls.id', $id)
                ->first();

        if (!$data) {
            return new PostMatkul(false, 'Data Tidak Ditemukan', null);
        }
        return new PostMatkul(true, 'Success', $data);
    }


    // public function update(Request $request, $id)
    // {
    //     $validator = Validator::make($request->all(), [
    //         'prodi' => 'nullable',
    //         'kurikulum' => 'nullable',
    //         'kode_matkul' => 'nullable',
    //         'nama_matkul_indonesia' => 'nullable',
    //         'nama_matkul_singkat' => 'nullable',
    //         'nama_matkul_english' => 'nullable',
    //         'sifat_matkul' => 'nullable',
    //         'tipe_matkul' => 'nullable',
    //         'kategori_matkul' => 'nullable',
    //         'jenis_kurikulum' => 'nullable',
    //         'sks_kurikulum' => 'nullable',
    //         'teori_sks' => 'nullable',
    //         'praktikum_sks' => 'nullable',
    //         'praklap_sks' => 'nullable',
    //         'paket_semester' => 'nullable',
    //         'batas_ambil_ulang' => 'nullable',
    //         'status_matkul' => 'nullable',
    //         'satuan_acara_perkulihan' => 'nullable',
    //         'bahan_ajar' => 'nullable',
    //         'diktat' => 'nullable',
    //         'dosen_pengampu' => 'nullable',
    //         'tanggal_mulai_efektif' => 'nullable',
    //         'tanggal_selesai_efektif' => 'nullable',
    //         'bobot_nilai_minimal' => 'nullable',
    //         'matkul_wajib' => 'nullable',
    //         'matkul_pilihan' => 'nullable',
    //         'total_matkul' => 'nullable',
    //         'sks_matkul_wajib' => 'nullable',
    //         'sks_matkul_pilihan' => 'nullable',
    //         'total_sks_matkul' => 'nullable',
    //         'ipk_minimal' => 'nullable',
    //         'abstraksi' => 'nullable',
    //         'file_silabus' => 'mimes:pdf|max:10000',
    //     ]);

    //     if ($validator->fails()) {
    //         return response()->json([
    //             'success' => false,
    //             'message' => 'Gagal Menyimpan Data',
    //             'data' => $validator->errors()
    //         ], 400);
    //     }

    //     try {
    //         $data = Matkul::find($id);

    //         if (!$data) {
    //             return new PostMatkul(false, 'Data Tidak Ditemukan', null);
    //         }

    //         $requestData = $request->all();

    //         if (basename($data->file_silabus) != $requestData['file_silabus']) {
    //             $filename_lama = $data->file_silabus;
    //             if (Storage::exists($filename_lama)) {
    //                 Storage::delete($filename_lama);
    //             }
    //             //saving file into db
    //             $requestData['file_silabus'] = $request->file('file_silabus')->storePublicly('public/matkuls/file_silabus/');
    //             $requestData['file_silabus'] = str_replace('public/', 'storage/', $requestData['file_silabus']);
    //         }

    //         $data->update($requestData);

    //         return new PostMatkul(true, 'Success', $data);
    //     } catch (\Exception $e) {
    //         return response()->json([
    //             'success' => false,
    //             'message' => 'Gagal Menyimpan Data',
    //             'data' => $e->getMessage()
    //         ], 500);
    //     }
    // }
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'prodi' => 'nullable',
            'kurikulum' => 'nullable',
            'kode_matkul' => 'nullable',
            'nama_matkul_indonesia' => 'nullable',
            'nama_matkul_singkat' => 'nullable',
            'nama_matkul_english' => 'nullable',
            'sifat_matkul' => 'nullable',
            'tipe_matkul' => 'nullable',
            'kategori_matkul' => 'nullable',
            'jenis_kurikulum' => 'nullable',
            'sks_kurikulum' => 'nullable',
            'teori_sks' => 'nullable',
            'praktikum_sks' => 'nullable',
            'praklap_sks' => 'nullable',
            'paket_semester' => 'nullable',
            'batas_ambil_ulang' => 'nullable',
            'status_matkul' => 'nullable',
            'satuan_acara_perkulihan' => 'nullable',
            'bahan_ajar' => 'nullable',
            'diktat' => 'nullable',
            'dosen_pengampu' => 'nullable',
            'tanggal_mulai_efektif' => 'nullable',
            'tanggal_selesai_efektif' => 'nullable',
            'bobot_nilai_minimal' => 'nullable',
            'matkul_wajib' => 'nullable',
            'matkul_pilihan' => 'nullable',
            'total_matkul' => 'nullable',
            'sks_matkul_wajib' => 'nullable',
            'sks_matkul_pilihan' => 'nullable',
            'total_sks_matkul' => 'nullable',
            'ipk_minimal' => 'nullable',
            'abstraksi' => 'required',
            // Tambahkan aturan validasi lainnya di sini
            'file_silabus' => 'mimes:pdf|max:10000', // Aturan validasi untuk file
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Gagal Menyimpan Data',
                'data' => $validator->errors()
            ], 400);
        }

        try {
            $data = Matkul::find($id);


            if (!$data) {
                return new PostMatkul(false, 'Data Tidak Ditemukan', null);
            }

            $requestData =  $validator->valid();

            if (basename($data->file_silabus) != $requestData['file_silabus']) {
                $filename_lama = $data->file_silabus;
                $filename_lama = str_replace('storage/', 'public/', $filename_lama);
                if (Storage::exists($filename_lama)) {
                    Storage::delete($filename_lama);
                }
                //saving file into db

                $requestData['file_silabus'] = $request->file('file_silabus')->storePublicly('public/matkuls/file_silabus/');
                $requestData['file_silabus'] = str_replace('public/', 'storage/', $requestData['file_silabus']);
            }

            $data->update($requestData);

            return new PostMatkul(true, 'Success', $data);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Gagal Menyimpan Data',
                'data' => $e->getMessage()
            ], 500);
        }
    }


    public function destroy($id)
    {
        $data = Matkul::find($id);
        if (!$data) {
            return new PostMatkul(false, 'Data Tidak Ditemukan', null);
        }
        $data->delete();
        return new PostMatkul(true, 'Success', $data);
    }

    public function matakuliahquery(Request $request)
    {
        if ($request->has('kurikulum'))
            $kurikulum_id = $request->query('kurikulum');
        if ($request->has('tipe_matkul'))
            $tipe_matkul = $request->query('tipe_matkul');
        // if ($request->has('tipe_matkul')) $sifat_matkul = $request->query('kurikulum');

        $data = DB::table('matkuls')
            ->join('kurikulum', 'matkuls.kurikulum', '=', 'kurikulum.id')
            ->where('matkuls.kurikulum', $kurikulum_id)
            ->where('matkuls.tipe_matkul', $tipe_matkul)->get();
        // ->where('matkuls.sifat_matkul',$sifat_matkul);

        return new PostMatkul(true, 'Data berhasil di dapatkan', $data);
    }
}
