<?php

namespace App\Http\Controllers;

use App\Http\Resources\persyaratan as persyaratanPmbResource;
use App\Models\persyaratan_pmb;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;


class persyaratancontroller extends Controller
{
    public function __construct()
    {
        //add authorization schema can update must pmb and admin
        //if backoffice > parse di explode 'backoffice|pmb|staff'
    }
    public function index()
    {
        $data = persyaratan_pmb::all();
        return new persyaratanPmbResource(true, 'success', $data);
    }
    public function store(Request $request)
    {
        //will input jurusan
        $validator = Validator::make($request->all(), [
            'ijazah' => 'mimes:pdf|max:10000',
            'transkip' => 'mimes:pdf|max:10000',
            'ktp' => 'mimes:pdf|max:10000',
            'akta' => 'mimes:pdf|max:10000',
            'surat_ket_narkoba' => 'mimes:pdf|max:10000',
            'id_mahasiswa' => 'required|exists:pmb,id',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Gagal menyimpan data',
                'error' => $validator->errors(),
            ], 400);
        }

        //saving data into storage
        //getting all files

        try {
            //save data into storage and returning filepath
            $requestData['ijazah'] = $request->file('ijazah')->storePublicly('public/pmb/ijazah');
            $requestData['transkrip'] = $request->file('transkrip')->storePublicly('public/pmb/transkrip');
            $requestData['ktp'] = $request->file('ktp')->storePublicly('public/pmb/ktp');
            $requestData['akta'] = $request->file('akta')->storePublicly('public/pmb/akta');
            $requestData['surat_ket_narkoba'] = $request->file('surat_ket_narkoba')->storePublicly('public/pmb/sk_narkoba');
            $requestData['id_mahasiswa'] = $request->id_mahasiswa;

            $requestData['ijazah'] = str_replace('public/', 'storage/', $requestData['ijazah']);
            $requestData['transkrip'] = str_replace('public/', 'storage/', $requestData['transkrip']);
            $requestData['ktp'] = str_replace('public/', 'storage/', $requestData['ktp']);
            $requestData['akta'] = str_replace('public/', 'storage/', $requestData['akta']);
            $requestData['surate_ket_narkoba'] = str_replace('public/', 'storage/', $requestData['surat_ket_narkoba']);

            // Buat objek PmbModel baru dengan data dari request
            $data = new persyaratan_pmb();
            $data->fill($requestData);

            // Simpan objek ke database
            $data->save();

            // Jika penyimpanan berhasil, kirim respons sukses
            return new persyaratanPmbResource(true, 'success', $data);
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

        $data = persyaratan_pmb::find($id);

        if (!$data) {
            return new persyaratanPmbResource(false, 'not found', null);
        }

        return new persyaratanPmbResource(true, 'success', $data);
    }

    public function update(Request $request, $id)
    {
        // get data and update data
        $validator = Validator::make($request->all(), [
            'ijazah' => 'mimes:pdf|max:10000',
            'transkip' => 'mimes:pdf|max:10000',
            'ktp' => 'mimes:pdf|max:10000',
            'akta' => 'mimes:pdf|max:10000',
            'surat_ket_narkoba' => 'mimes:pdf|max:10000',
            'id_mahasiswa' => 'required|exists:pmb,id',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Gagal menyimpan data',
                'error' => $validator->errors(),
            ], 400);
        }

        // $requestData = $request->all();
        try {
            $requestData['ijazah'] = isset($requestData['ijazah']) ? $request->file('ijazah')->storePublicly('public/pmb/ijazah') : '';
            $requestData['transkrip'] = isset($requestData['transkrip']) ? $request->file('transkrip')->storePublicly('public/pmb/transkrip') : '';
            $requestData['ktp'] = isset($requestData['ktp']) ? $request->file('ktp')->storePublicly('public/pmb/ktp') : '';
            $requestData['akta'] = isset($requestData['akta']) ? $request->file('akta')->storePublicly('public/pmb/akta') : '';
            $requestData['surat_ket_narkoba'] = isset($requestData['surat_ket_narkoba']) ? $request->file('surat_ket_narkoba')->storePublicly('public/pmb/sk_narkoba') : '';
            $requestData['id_mahasiswa'] = $request->id_mahasiswa;



            // Buat objek PmbModel baru dengan data dari request
            $data = persyaratan_pmb::findOrFail($requestData['id_pmb']);
            if (isset($requestData['ijazah'])) {
                //remove from internal file
                if (Storage::exists($data->ijazah)) {
                    Storage::delete($data->ijazah);
                }


            }
            if (isset($requestData['transkrip'])) {
                //remove from internal file
                if (Storage::exists($data->transkrip)) {
                    Storage::delete($data->transkrip);
                }
            }
            if (isset($requestData['ktp'])) {
                //remove from internal file
                if (Storage::exists($data->ktp)) {
                    Storage::delete($data->ktp);
                }
            }
            if (isset($requestData['akta'])) {
                //remove from internal file
                if (Storage::exists($data->akta)) {
                    Storage::delete($data->akta);
                }
            }
            if (isset($requestData['surat_ket_narkoba'])) {
                //remove from internal file
                if (Storage::exists($data->surat_ket_narkoba)) {
                    Storage::delete($data->surat_ket_narkoba);
                }
            }

            $data->fill($requestData);

            // Simpan objek ke database
            $data->save();

            // Jika penyimpanan berhasil, kirim respons sukses
            return new persyaratanPmbResource(true, 'success', $data);
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
        $data = persyaratan_pmb::findorfail($id);

        //remove from internal file
        if (Storage::exists($data->ijazah)) {
            Storage::delete($data->ijazah);
        }
        if (Storage::exists($data->transkrip)) {
            Storage::delete($data->transkrip);
        }
        if (Storage::exists($data->ktp)) {
            Storage::delete($data->ktp);
        }
        if (Storage::exists($data->akta)) {
            Storage::delete($data->akta);
        }
        if (Storage::exists($data->surat_ket_narkoba)) {
            Storage::delete($data->surat_ket_narkoba);
        }

        //delete post
        $data->delete();

        //return response
        return new persyaratanPmbResource(true, 'Data Post Berhasil Dihapus!', null);
    }
}
