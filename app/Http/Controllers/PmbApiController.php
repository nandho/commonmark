<?php

namespace App\Http\Controllers;

use App\Models\PmbModel;
use App\Services\NomorPendaftaranGenerator;
use Illuminate\Http\Request;
use App\Http\Resources\PmbResource;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class PmbApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Mengambil daftar PMB dari service lain atau dari database lokal jika menggunakan monolithic architecture
        $pmblist = PmbModel::paginate(50);

        return new PmbResource(true, 'success', $pmblist);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Menyimpan PMB baru ke service lain atau ke database lokal
        // Mendapatkan semua data yang dikirim dengan permintaan
        $validator = Validator::make($request->all(),[
            'nama_lengkap' => 'required|string',
            'nomor_hp' => 'required|string',
            'tempat_lahir' => 'required|string',
            'tanggal_lahir' => 'required|date',
            'jenis_kelamin' => 'required|string|in:Laki-laki,Perempuan',
            'alamat' => 'required|string',
            'agama' => 'required|string',
            'kewarganegaraan' => 'required|string',
            'jalur_pendaftaran' => 'required|string',
            'periode_pendaftaran' => 'required|string',
            'provinsi' => 'required|string',
            'kabupaten' => 'required|string',
            'kecamatan' => 'required|string',
            'kelurahan' => 'required|string',
            'kode_pos' => 'required|string',
            'provinsi_sekolah' => 'required|string',
            'kabupaten_sekolah' => 'required|string',
            'tahun_lulus_sekolah' => 'nullable|string',
            'no_ijazah' => 'nullable|string',
            'nama_wali' => 'nullable|string',
            'no_hp_wali' => 'nullable|string',
            'no_telp_wali' => 'nullable|string',
            'perkerjaan_wali' => 'nullable|string',
            'sumber_b_kuliah' => 'nullable|string',
            'npsn' => 'nullable|string',
        ]);

        if ($validator->fails()){
            return response()->json([
                'success' => false,
                'message' => 'Gagal menyimpan data',
                'error' => $validator->errors(),
            ], 400);
        }

        $requestData = $request->all();

        //Todo if photo exist into $requestData
        

        $requestData['nomor_pendaftaran'] = NomorPendaftaranGenerator::generate();

        try {
            // Buat objek PmbModel baru dengan data dari request
            $pmb = new PmbModel();
            $pmb->fill($requestData);
            
            // Simpan objek ke database
            $pmb->save();
    
            // Jika penyimpanan berhasil, kirim respons sukses
            return new PmbResource(true, 'success', $pmb);
        } catch (\Exception $e) {
            // Jika terjadi kesalahan, kirim respons error
            return response()->json([
                'success' => false,
                'message' => 'Gagal menyimpan data',
                'error' => $e->getMessage(),
            ], 500);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pmb = PmbModel::find($id);

        if (!$pmb) {
            return new PmbResource(false,'not found', null);
        }

        return new PmbResource(true,'success', $pmb);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Memperbarui data PMB berdasarkan ID di service lain atau di database lokal
        // Menampilkan form untuk mengedit data PMB
        $validator = Validator::make($request->all(),[
            'nama_lengkap' => 'required|string',
            'nomor_hp' => 'required|string',
            'tempat_lahir' => 'required|string',
            'tanggal_lahir' => 'required|date',
            'jenis_kelamin' => 'required|string|in:Laki-laki,Perempuan',
            'alamat' => 'required|string',
            'agama' => 'required|string',
            'kewarganegaraan' => 'required|string',
            'jalur_pendaftaran' => 'required|string',
            'periode_pendaftaran' => 'required|string',
            'provinsi' => 'required|string',
            'kabupaten' => 'required|string',
            'kecamatan' => 'required|string',
            'kelurahan' => 'required|string',
            'kode_pos' => 'required|string',
            'provinsi_sekolah' => 'required|string',
            'kabupaten_sekolah' => 'required|string',
            'tahun_lulus_sekolah' => 'nullable|string',
            'no_ijazah' => 'nullable|string',
            'nama_wali' => 'nullable|string',
            'no_hp_wali' => 'nullable|string',
            'no_telp_wali' => 'nullable|string',
            'perkerjaan_wali' => 'nullable|string',
            'sumber_b_kuliah' => 'nullable|string',
            'npsn' => 'nullable|string',
        ]);

        if ($validator->fails()){
            return response()->json([
                'success' => false,
                'message' => 'Gagal menyimpan data',
                'error' => $validator->errors(),
            ], 422);
        }

        $requestData = $request->all();

        //Todo if photo exist

        try {
            // Dapatkan objek PmbModel berdasarkan ID yang diberikan
            $pmb = PmbModel::findOrFail($id);
            
            // Isi objek dengan data dari request
            $pmb->fill($requestData);
            
            // Simpan perubahan ke database
            $pmb->save();
        
            // Jika pembaruan berhasil, kirim respons sukses
            return response()->json([
                'success' => true,
                'message' => 'Data berhasil diperbarui',
                'data' => $pmb,
            ], 200);
        } catch (\Exception $e) {
            // Jika terjadi kesalahan, kirim respons error
            return response()->json([
                'success' => false,
                'message' => 'Gagal memperbarui data',
                'error' => $e->getMessage(),
            ], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Menghapus data PMB berdasarkan ID dari service lain atau dari database lokal
        $pmb = PmbModel::findorfail($id);
        //delete image
        //Storage::delete('public/posts/'.basename($pmb->image));
        

        //delete post
        $pmb->delete();

        //return response
        return new PmbResource(true, 'Data Post Berhasil Dihapus!', null);
    }
}
