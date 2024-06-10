<?php

namespace App\Http\Controllers;

use App\Models\Rencana_Evaluasi;
use Illuminate\Http\Request;

class RencanaEvaluasiController extends Controller
{
    public function index()
    {
        $rencana_evaluasi = Rencana_Evaluasi::all();
        return response()->json([
            'success' => true,
            'message' => 'Data Rencana Evaluasi berhasil diambil',
            'data' => $rencana_evaluasi
        ]);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'aktivitas_partisipatif' => 'required',
            'hasil_proyek' => 'required',
            'tugas' => 'required',
            'quiz' => 'required',
            'ujian_tengah_semester' => 'required',
            'ujian_akhir_semester' => 'required',
            'total_bobot' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Gagal menyimpan data Rencana Evaluasi',
                'error' => $validator->errors(),
            ], 400);
        }

        $requestData = $request->all();

        try {
            $rencana_evaluasi = new Rencana_Evaluasi();
            $rencana_evaluasi->fill($requestData);
            $rencana_evaluasi->save();

            return response()->json([
                'success' => true,
                'message' => 'Data Rencana Evaluasi berhasil disimpan',
                'data' => $rencana_evaluasi
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Gagal menyimpan data Rencana Evaluasi',
                'error' => $e->getMessage(),
            ], 500);
        }
    }

    public function show($id)
    {
        $rencana_evaluasi = Rencana_Evaluasi::find($id);

        if (!$rencana_evaluasi) {
            return response()->json([
                'success' => false,
                'message' => 'Data Rencana Evaluasi tidak ditemukan',
                'data' => null
            ]);
        }

        return response()->json([
            'success' => true,
            'message' => 'Data Rencana Evaluasi berhasil ditemukan',
            'data' => $rencana_evaluasi
        ]);
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'aktivitas_partisipatif' => 'required',
            'hasil_proyek' => 'required',
            'tugas' => 'required',
            'quiz' => 'required',
            'ujian_tengah_semester' => 'required',
            'ujian_akhir_semester' => 'required',
            'total_bobot' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Gagal memperbarui data Rencana Evaluasi',
                'error' => $validator->errors(),
            ], 400);
        }

        $requestData = $request->all();

        try {
            $rencana_evaluasi = Rencana_Evaluasi::findOrFail($id);
            $rencana_evaluasi->fill($requestData);
            $rencana_evaluasi->save();

            return response()->json([
                'success' => true,
                'message' => 'Data Rencana Evaluasi berhasil diperbarui',
                'data' => $rencana_evaluasi
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Gagal memperbarui data Rencana Evaluasi',
                'error' => $e->getMessage(),
            ], 500);
        }
    }

    public function destroy($id)
    {
        $rencana_evaluasi = Rencana_Evaluasi::findorfail($id);
        $rencana_evaluasi->delete();

        return response()->json([
            'success' => true,
            'message' => 'Data Rencana Evaluasi berhasil dihapus',
            'data' => null
        ]);
    }
}
