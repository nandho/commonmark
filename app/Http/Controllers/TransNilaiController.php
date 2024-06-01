<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nilai; // Pastikan Anda sudah memiliki model Nilai

class TransNilaiController extends Controller
{
    /**
     * Menampilkan daftar nilai.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nilai = Nilai::all();
        return view('nilai.index', compact('nilai'));
    }

    /**
     * Menampilkan form untuk membuat nilai baru.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('nilai.create');
    }

    /**
     * Menyimpan nilai baru ke dalam database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'mahasiswa_id' => 'required',
            'mata_kuliah_id' => 'required',
            'nilai' => 'required',
        ]);

        $nilai = new Nilai([
            'mahasiswa_id' => $request->get('mahasiswa_id'),
            'mata_kuliah_id' => $request->get('mata_kuliah_id'),
            'nilai' => $request->get('nilai'),
        ]);
        $nilai->save();

        return redirect('/nilai')->with('success', 'Nilai berhasil ditambahkan.');
    }

    /**
     * Menampilkan detail nilai tertentu.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $nilai = Nilai::findOrFail($id);
        return view('nilai.show', compact('nilai'));
    }

    /**
     * Menampilkan form untuk mengedit nilai tertentu.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $nilai = Nilai::findOrFail($id);
        return view('nilai.edit', compact('nilai'));
    }

    /**
     * Memperbarui nilai dalam database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'mahasiswa_id' => 'required',
            'mata_kuliah_id' => 'required',
            'nilai' => 'required',
        ]);

        $nilai = Nilai::findOrFail($id);
        $nilai->mahasiswa_id = $request->get('mahasiswa_id');
        $nilai->mata_kuliah_id = $request->get('mata_kuliah_id');
        $nilai->nilai = $request->get('nilai');
        $nilai->save();

        return redirect('/nilai')->with('success', 'Nilai berhasil diperbarui.');
    }
}


