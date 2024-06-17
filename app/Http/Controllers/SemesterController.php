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
            'status' => 'required|string|max:255',
        ]);

        // Jika validasi gagal, kembalikan error
        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        // Jika validasi berhasil, buat semester baru
        $semester = Semester::create($validator->validated());

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
            'nama_semester' => 'string|max:255',
            'tanggal_mulai' => 'date',
            'tanggal_selesai' => 'date',
            'status' => 'string|max:255',
        ]);

        // Jika validasi gagal, kembalikan error
        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        $data = $validator->validated();

        if (isset($data['status']) && $data['status'] === 'Aktif') {
            // Update status lain menjadi 'Tidak Aktif'
            Semester::where('status', 'Aktif')->update(['status' => 'Tidak Aktif']);
        }

        // Update data semester
        $semester->update($validator->valid());

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
    public function getActiveSemester()
    {
        $activeSemester = Semester::where('status', 'Aktif')->first();

        if (!$activeSemester) {
            return response()->json(['message' => 'Tidak ada semester aktif saat ini'], 404);
        }

        return response()->json($activeSemester);
    }
}
