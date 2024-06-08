<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NilaiMatKul; // Pastikan Anda memiliki model yang sesuai
use App\Models\HasUuid;

class NilaiMatKulController extends Controller
{
    // Menampilkan daftar nilai mata kuliah
    public function index()
    {
        $nilaiMatKul = NilaiMatKul::all();
        return view('nilaiMatKul.index', compact('nilaiMatKul'));
    }

    // Menampilkan form untuk menambah nilai mata kuliah baru
    public function create()
    {
        return view('nilaiMatKul.create');
    }

    // Menyimpan nilai mata kuliah baru ke database
    public function store(Request $request)
    {
        $request->validate([
            'nim' => 'required',
            'kode_matkul' => 'required',
            'nilai' => 'required'
        ]);

        $nilaiMatKul = new NilaiMatKul([
            'nim' => $request->get('nim'),
            'kode_matkul' => $request->get('kode_matkul'),
            'nilai' => $request->get('nilai')
        ]);
        $nilaiMatKul->save();

        return redirect('/nilaiMatKul')->with('success', 'Nilai Mata Kuliah telah ditambahkan');
    }

    // Menampilkan form untuk mengedit nilai mata kuliah
    public function edit($id)
    {
        $nilaiMatKul = NilaiMatKul::find($id);
        return view('nilaiMatKul.edit', compact('nilaiMatKul'));
    }

    // Memperbarui nilai mata kuliah di database
    public function update(Request $request, $id)
    {
        $request->validate([
            'nim' => 'required',
            'kode_matkul' => 'required',
            'nilai' => 'required'
        ]);

        $nilaiMatKul = NilaiMatKul::find($id);
        $nilaiMatKul->nim = $request->get('nim');
        $nilaiMatKul->kode_matkul = $request->get('kode_matkul');
        $nilaiMatKul->nilai = $request->get('nilai');
        $nilaiMatKul->save();

        return redirect('/nilaiMatKul')->with('success', 'Nilai Mata Kuliah telah diperbarui');
    }

    // Menghapus nilai mata kuliah dari database
    public function destroy($id)
    {
        $nilaiMatKul = NilaiMatKul::find($id);
        $nilaiMatKul->delete();

        return redirect('/nilaiMatKul')->with('success', 'Nilai Mata Kuliah telah dihapus');
    }
}

