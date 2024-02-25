<?php

namespace App\Http\Controllers;

use App\Models\PmbModel;
use App\Services\NomorPendaftaranGenerator;
use Illuminate\Http\Request;
use App\Http\Resources\PmbResource;
use App\Models\JurusanModel;
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
        $daftarJurusan = JurusanModel::pluck('id')->toArray();

        // Menyimpan PMB baru ke service lain atau ke database lokal
        // Mendapatkan semua data yang dikirim dengan permintaan
        $validator = Validator::make($request->all(), [
            'nama_lengkap' => 'required|string',
            'nik' => 'required|string',
            'nisn' => 'required|string',
            'jenis_kelamin' => 'required|string|in:Laki-laki,Perempuan',
            'nomor_hp' => 'required|string',
            'email' => 'required|email',
            'provinsi' => 'required|string',
            'kabupaten' => 'required|string',
            'nama_sekolah' => 'required|string', //seharusnya nama sekolah
            'tahun_lulus_sekolah' => 'nullable|string',
            //ditambahkan jurusan asal
            'jurusan_asal' => 'required|string',
            'jurusan_id' => 'required|string|in:' . implode(',', $daftarJurusan),
            'nama_wali' => 'required|string',
            'no_hp_wali' => 'required|string',
            'no_telp_wali' => 'required|string',
            // tambahkan nik orang tua
            'nik_wali' => 'required|string',
            'tempat_lahir' => 'required|string',
            'tanggal_lahir' => 'required|date',
            // batas field pendaftaran
            'alamat' => 'nullable|string|nullable',
            'agama' => 'nullable|string|nullable',
            'kewarganegaraan' => 'nullable|string|nullable',
            'jalur_pendaftaran' => 'nullable|string|nullable',
            'periode_pendaftaran' => 'nullable|string|nullable',
            'kode_pos' => 'nullable|string|nullable',
            'provinsi_sekolah' => 'nullable|string|nullable',
            'kabupaten_sekolah' => 'nullable|string|nullable',
            'no_ijazah' => 'nullable|string|nullable',
            'perkerjaan_wali' => 'nullable|string|nullable',
            'sumber_b_kuliah' => 'nullable|string|nullable',
            'foto' => 'nullable|image|mimes:jpeg,jpg,png,gif|dimensions:min_width=100,min_height=100|nullable',
            'kecamatan' => 'nullable|string|nullable',
            'kelurahan' => 'nullable|string|nullable',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Gagal menyimpan data',
                'error' => $validator->errors(),
            ], 400);
        }

        $requestData = $request->all();

        //getting jurusan dan kode jurusan
        $jurusan = JurusanModel::find($requestData['jurusan_id']);

        $requestData['nomor_pendaftaran'] = NomorPendaftaranGenerator::generate($jurusan['kode_jurusan']);

        try {
            // Buat objek PmbModel baru dengan data dari request
            $pmb = new PmbModel();
            $pmb->fill($requestData);

            // Simpan objek ke database
            $pmb->save();
            $pmb->jurusan = $jurusan['jurusan'];

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
            return new PmbResource(false, 'not found', null);
        }

        return new PmbResource(true, 'success', $pmb);
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
        $validator = Validator::make($request->all(), [
            'nama_lengkap' => 'nullable|string',
            'nomor_hp' => 'nullable|string',
            'tempat_lahir' => 'nullable|string',
            'tanggal_lahir' => 'nullable|date',
            'jenis_kelamin' => 'nullable|string|in:Laki-laki,Perempuan',
            'alamat' => 'nullable|string',
            'agama' => 'nullable|string',
            'kewarganegaraan' => 'nullable|string',
            'jalur_pendaftaran' => 'nullable|string',
            'periode_pendaftaran' => 'nullable|string',
            'provinsi' => 'nullable|string',
            'kabupaten' => 'nullable|string',
            'kecamatan' => 'nullable|string',
            'kelurahan' => 'nullable|string',
            'kode_pos' => 'nullable|string',
            'provinsi_sekolah' => 'nullable|string',
            'kabupaten_sekolah' => 'nullable|string',
            'tahun_lulus_sekolah' => 'nullable|string',
            'no_ijazah' => 'nullable|string',
            'nama_wali' => 'nullable|string',
            'no_hp_wali' => 'nullable|string',
            'no_telp_wali' => 'nullable|string',
            'perkerjaan_wali' => 'nullable|string',
            'sumber_b_kuliah' => 'nullable|string',
            'foto' => 'nullable|image|mimes:jpeg,jpg,png,gif',
            'npsn' => 'nullable|string',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Gagal menyimpan data',
                'error' => $validator->errors(),
            ], 422);
        }
        
        $requestData = $request->all();

        if ($request->hasFile('foto')) {
            $image = $request->file('foto');
            $image->storeAs('public/pmbfoto', $image->hashName());
            $requestData['foto'] = $image->hashName();
        }

        try {
            // Dapatkan objek PmbModel berdasarkan ID yang diberikan
            $pmb = PmbModel::findOrFail($id);
            //deleting foto from database and storage
            //delete old image
            Storage::delete('public/pmbfoto/'.basename($pmb->foto));
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
