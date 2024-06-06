<?php

namespace App\Http\Controllers;

use App\Models\Semester;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SemesterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Ambil semua data semester
        $semesters = Semester::all();

        // Kembalikan response dengan data semester
        return response()->json($semesters);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi request
        $validator = Validator::make($request->all(), [
            'nama_semester' => 'required|string|max:255',
            'tanggal_mulai' => 'required|date',
            'tanggal_selesai' => 'required|date',
            // 'status' => 'required|string|max:255',
        ]);

        // Jika validasi gagal, kembalikan error
        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }
        $data = $request->validated();

        $data['status'] = 'Aktif';

        $semesteraktif = Semester::where('status', 'Aktif')->first();

        //update semester
        $semesteraktif->update(['status' => 'Tidak Aktif']);

        // Jika validasi berhasil, buat semester baru
        $semester = Semester::create($data);

        // Kembalikan response berhasil dengan data semester
        return response()->json(['message' => 'Semester berhasil dibuat', 'data' => $semester], 201);
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Cari semester berdasarkan ID
        $semester = Semester::find($id);

        // Jika semester tidak ditemukan, kembalikan error
        if (!$semester) {
            return response()->json(['message' => 'Semester tidak ditemukan'], 404);
        }

        // Kembalikan response dengan data semester
        return response()->json($semester);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Cari semester berdasarkan ID
        $semester = Semester::find($id);

        // Jika semester tidak ditemukan, kembalikan error
        if (!$semester) {
            return response()->json(['message' => 'Semester tidak ditemukan'], 404);
        }

        // Validasi request
        $validator = Validator::make($request->all(), [
            'nama_semester' => 'required|string|max:255',
            'tanggal_mulai' => 'required|date',
            'tanggal_selesai' => 'required|date',
            'status' => 'required|string|max:255',
        ]);

        // Jika validasi gagal, kembalikan error
        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        // Update data semester
        $semester->update($validator->validated());

        // Kembalikan response berhasil dengan data semester yang diperbarui
        return response()->json(['message' => 'Semester berhasil diperbarui', 'data' => $semester]);
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Cari semester berdasarkan ID
        $semester = Semester::find($id);

        // Jika semester tidak ditemukan, kembalikan error
        if (!$semester) {
            return response()->json(['message' => 'Semester tidak ditemukan'], 404);
        }

        // Hapus data semester
        $semester->delete();

        // Kembalikan response berhasil
        return response()->json(['message' => 'Semester berhasil dihapus']);
    }
}
