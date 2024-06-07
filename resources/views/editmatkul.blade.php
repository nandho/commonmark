@extends('base')

@section('title', 'SIAKAD')
@section('head')
<!-- Tempatkan impor CSS khusus untuk halaman ini di sini jika ada -->
<style>
    .dataTables_wrapper {
        padding: 1rem;
    }

    .dataTables_wrapper .dataTables_length,
    .dataTables_wrapper .dataTables_filter {
        padding: 0.5rem;
    }

    .dosenTable {
        border-collapse: collapse;
        background: white;
        border-radius: 6px;
        overflow: hidden;
        width: 100%;
        position: relative;
        margin-bottom: 5%;
    }

    .dosenTable thead th {
        background-color: #65b8e0;
        color: white;
        font-weight: 700;
        padding: 0.75rem;
        text-align: left;
        height: 60px;
        font-size: 16px;
    }

    .dosenTable tbody td {
        background-color: white;
        padding: 0.75rem;
        border-bottom: 2px solid #f3f4f6;
        border-radius: 0.375rem;
    }

    .dosenTable tbody tr {
        height: 48px;
        border-bottom: 1px solid #E3F1D5;
    }

    /* Mengatur posisi modal lebih ke atas */
    #dosen_modal {
        top: 10%;
        /* Atau nilai lain yang Anda inginkan */
    }

    .dataTables_wrapper .dataTables_paginate .paginate_button {
        padding: 0.5rem 1rem;
        margin: 0 0.25rem;
        border-radius: 0.375rem;
        border: 1px solid transparent;
        background-color: #65b8e0;
        color: white;
        cursor: pointer;
    }

    .dataTables_wrapper .dataTables_paginate .paginate_button:hover {
        background-color: #3730a3;
    }

    .dataTables_wrapper .dataTables_paginate .paginate_button.current,
    .dataTables_wrapper .dataTables_paginate .paginate_button.current:hover {
        background-color: #65b8e0;
        color: white;
        border-color: transparent;
    }

    .dataTables_wrapper .dataTables_paginate .paginate_button.disabled,
    .dataTables_wrapper .dataTables_paginate .paginate_button.disabled:hover {
        background-color: #e2e8f0;
        color: #a1a1aa;
        cursor: not-allowed;
    }

    .dataTables_wrapper .dataTables_filter input {
        margin-left: 0.5rem;
        padding: 0.5rem;
        border-radius: 0.375rem;
        border: 1px solid #e2e8f0;
    }

    .dataTables_wrapper .dataTables_length select {
        padding: 0.5rem;
        border-radius: 0.375rem;
        border: 1px solid #e2e8f0;
    }

    @media screen and (max-width: 640px) {

        .dataTables_wrapper .dataTables_length,
        .dataTables_wrapper .dataTables_filter {
            float: none;
            text-align: center;
        }

        .dataTables_wrapper .dataTables_length label,
        .dataTables_wrapper .dataTables_filter label {
            display: block;
        }

        .dataTables_wrapper .dataTables_paginate {
            float: none;
            text-align: center;
        }
    }
</style>
@endsection
@section('content')
<div class="w-full p-6 mx-auto">
    <div class="flex flex-wrap -mx-3">
        <div class="w-full max-w-full px-3 shrink-0  md:flex-0">
            <div class="relative flex flex-col min-w-0 break-words bg-white border-0 shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
                <div class="border-black/12.5 rounded-t-2xl border-b-0 border-solid p-6 pb-0">
                    <div class="flex items-center">
                        <h4 class="mb-0 dark:text-white/80">Tambah Matakuliah Baru</h4>
                        <a type="button" class="inline-block px-8 py-2 mb-4 ml-auto font-bold leading-normal text-center text-white align-middle transition-all ease-in bg-blue-500 border-0 rounded-lg shadow-md cursor-pointer text-xs tracking-tight-rem hover:shadow-xs hover:-translate-y-px active:opacity-85" href="{{ url('matkul') }}">Kembali</a>
                    </div>
                </div>
                <div class="flex-auto p-6">


                    <!-- Modal untuk memilih dosen -->
                    <div id="dosen_modal" class="w-8/12 fixed inset-0 items-center justify-center p-4 bg-opacity-50 hidden">
                        <div class="w-4/5 bg-white dark:bg-slate-850 shadow-xl rounded-lg p-6 mx-auto">
                            <h2 class="text-xl font-bold mb-4">Pilih Dosen</h2>
                            <table id="dosen_table" class="dosenTable w-full table-auto border-collapse">
                                <thead>
                                    <tr>
                                        <th class="border px-4 py-2">NIDN</th>
                                        <th class="border px-4 py-2">Nama Dosen</th>
                                        <th class="border px-4 py-2">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- Data dosen akan dimasukkan di sini -->
                                </tbody>
                            </table>
                            <button type="button" id="close_modal_btn" class="mt-4 bg-blue-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Tutup</button>
                        </div>
                    </div>
                    <form id="mkForm" enctype="multipart/form-data">
                        <button type="submit" id="simpanMKBtn" class="inline-block px-8 py-2 mb-4 ml-auto font-bold leading-normal text-center text-white align-middle transition-all ease-in bg-blue-500 border-0 rounded-lg shadow-md cursor-pointer text-xs tracking-tight-rem hover:shadow-xs hover:-translate-y-px active:opacity-85">Simpan</button>

                        <h6 class="leading-normal uppercase">Tambah Matakuliah</h6>
                        <div class="flex flex-wrap -mx-3">
                            <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                                <div class="mb-4">
                                    <label for="jurusan" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Semester</label>
                                    <select id="jurusan" name="jurusan" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none">
                                        <option value="">Pilih Jurusan</option>
                                    </select>
                                </div>
                            </div>
                            <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                                <div class="mb-4">
                                    <label for="nama_kurikulum" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Kurikulum</label>
                                    <select id="nama_kurikulum" name="nama_kurikulum" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none">
                                        <option value="">Pilih Kurikulum</option>
                                    </select>
                                </div>
                            </div>
                            <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                                <div class="mb-4">
                                    <label for="kode_matkul" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Kode Matakuliah</label>
                                    <input type="text" id="kode_matkul" name="kode_matkul" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
                                    <small class="text-gray-500">[Maksimal 20 karakter]</small>
                                </div>
                            </div>
                            <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                                <div class="mb-4">
                                    <label for="sifat_matkul" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Sifat Matakuliah</label>
                                    <select id="sifat_matkul" name="sifat_matkul" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none">
                                        <option value="">Pilih Sifat Matakuliah</option>
                                        <option value="A">[W] Wajib Program Studi</option>
                                        <option value="B">[P] Pilihan</option>
                                        <option value="C">[W] Peminatan</option>
                                        <option value="S">[W] Tugas Akhir/Skripsi/Tesis/Disertasi</option>
                                        <option value="W">[W] Wajib Nasional</option>
                                    </select>
                                </div>
                            </div>
                            <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                                <div class="mb-4">
                                    <label for="tipe_matkul" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Tipe Matakuliah</label>
                                    <select id="tipe_matkul" name="tipe_matkul" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none">
                                        <option value="">Pilih Tipe Matakuliah</option>
                                        <option value="MBB">MBB - Mata Kuliah Berkehidupan Bermasyarakat</option>
                                        <option value="MKB"> MKB - Mata Kuliah Keahlian Berkarya</option>
                                        <option value="MKK">MKK - Mata Kuliah Keilmuan dan Ketrampilan</option>
                                        <option value="MPB">MPB - Mata Kuliah Perilaku Berkarya</option>
                                    </select>
                                </div>
                            </div>
                            <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                                <div class="mb-4">
                                    <label for="kategori_matkul" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Kategori Matakuliah</label>
                                    <select id="kategori_matkul" name="kategori_matkul" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none">
                                        <option value="">Pilih Kategori Matakuliah</option>
                                        <option value="1">UMUM</option>
                                    </select>
                                </div>
                            </div>
                            <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                                <div class="mb-4">
                                    <label for="jenis_kurikulum" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Jenis Kurikulum</label>
                                    <select id="jenis_kurikulum" name="jenis_kurikulum" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none">
                                        <option value="">Pilih Jenis Kurikulum</option>
                                        <option value="A">A - Inti</option>
                                        <option value="B">B - Institusi</option>
                                    </select>
                                </div>
                            </div>
                            <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                                <div class="mb-4">
                                    <label for="paket_semester" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Jenis Paket Semester</label>
                                    <select id="paket_semester" name="paket_semester" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none">
                                        <option value="">Pilih Paket Semester</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                    </select>
                                </div>
                            </div>
                            <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                                <div class="mb-4">
                                    <label for="batas_ambil_ulang" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Batas Maksimal Pengambilan Ulang</label>
                                    <input type="text" id="batas_ambil_ulang" name="batas_ambil_ulang" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
                                </div>
                            </div>
                            <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                                <div class="mb-4">
                                    <label for="status_matkul" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Status Matakuliah</label>
                                    <select id="status_matkul" name="status_matkul" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none">
                                        <option value="">Pilih Status Matakuliah</option>
                                        <option value="A">A-Aktif</option>
                                        <option value="H">H-Hapus</option>
                                    </select>
                                </div>
                            </div>
                            <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                                <div class="mb-4">
                                    <label for="satuan_acara_perkulihan" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Satuan Acara Perkuliahan</label>
                                    <input type="text" id="satuan_acara_perkulihan" name="satuan_acara_perkulihan" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
                                </div>
                            </div>
                            <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                                <div class="mb-4">
                                    <label for="bahan_ajar" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Bahan Ajar</label>
                                    <input type="text" id="bahan_ajar" name="bahan_ajar" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
                                </div>
                            </div>
                            <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                                <div class="mb-4">
                                    <label for="diktat" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Diktat</label>
                                    <input type="text" id="diktat" name="diktat" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
                                </div>
                            </div>

                            <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                                <div class="mb-4">
                                    <label for="dosen_nama" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Dosen Pengampu</label>
                                    <div class="flex">
                                        <input type="text" id="dosen_nama" name="dosen_nama" class="flex-1 focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" readonly />
                                        <input type="hidden" id="dosen_id" name="dosen_id" /> <!-- Input untuk menyimpan ID dosen -->
                                        <button type="button" id="pilih_dosen_btn" class="ml-2 px-4 py-2 bg-blue-500 text-white rounded-lg">Pilih</button>
                                    </div>
                                </div>
                            </div>
                            <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                                <div class="mb-4">
                                    <label for="tanggal_mulai_efektif" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Tanggal Mulai Efektif</label>
                                    <input type="date" id="tanggal_mulai_efektif" name="tanggal_mulai_efektif" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
                                </div>
                            </div>
                            <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                                <div class="mb-4">
                                    <label for="diktat" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Tanggal Akhir Efektif</label>
                                    <input type="date" id="tanggal_selesai_efektif" name="tanggal_selesai_efektif" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
                                </div>
                            </div>

                            <div class="w-full max-w-full px-3 shrink-0">
                                <h6 class="leading-normal uppercase">Nama Matakuliah</h6>
                                <div class="flex flex-wrap -mx-3">
                                    <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                                        <div class="mb-4">
                                            <label for="nama_matkul_indonesia" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Indonesia</label>
                                            <input type="text" id="nama_matkul_indonesia" name="nama_matkul_indonesia" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
                                        </div>
                                    </div>
                                    <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                                        <div class="mb-4">
                                            <label for="nama_matkul_singkat" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Singkat Indonesia</label>
                                            <input type="text" id="nama_matkul_singkat" name="nama_matkul_singkat" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
                                        </div>
                                    </div>
                                    <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                                        <div class="mb-4">
                                            <label for="nama_matkul_english" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Inggris</label>
                                            <input type="text" id="nama_matkul_english" name="nama_matkul_english" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
                                        </div>
                                    </div>
                                    <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                                        <div class="mb-4">
                                            <label for="nama_matkul_singkat_english" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Singkat Inggris</label>
                                            <input type="text" id="nama_matkul_singkat_english" name="nama_matkul_singkat_english" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="w-full max-w-full px-3 shrink-0">
                                <p class="leading-normal uppercase dark:text-white dark:opacity-60 text-sm mb-4">
                                <h6 class="leading-normal uppercase">Jumlah SKS</h6>
                                <div class="flex flex-wrap -mx-3">
                                    <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                                        <div class="mb-4">
                                            <label for="sks_kurikulum" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">SKS Kurikulum</label>
                                            <input type="text" id="sks_kurikulum" name="sks_kurikulum" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
                                        </div>
                                    </div>
                                    <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                                        <div class="mb-4">
                                            <label for="teori_sks" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Teori</label>
                                            <input type="text" id="teori_sks" name="teori_sks" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
                                        </div>
                                    </div>
                                    <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                                        <div class="mb-4">
                                            <label for="praktikum_sks" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Praktikum</label>
                                            <input type="text" id="praktikum_sks" name="praktikum_sks" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
                                        </div>
                                    </div>
                                    <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                                        <div class="mb-4">
                                            <label for="praklap_sks" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Praktikum Lapangan</label>
                                            <input type="text" id="praklap_sks" name="praklap_sks" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="w-full max-w-full px-3 shrink-0">
                                <h6 class="leading-normal uppercase">Data Prasyarat Matakuliah</h6>
                                <div class="flex flex-wrap -mx-3">
                                    <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                                        <div class="mb-4">
                                            <label for="bobot_nilai_minimal" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Bobot Nilai Minimal untuk Lulus</label>
                                            <input type="text" id="bobot_nilai_minimal" name="bobot_nilai_minimal" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
                                            <small class="text-gray-500">[Diisi dengan angka boleh desimal, dengan nilai: 0.00 s/d 4.00]</small>
                                        </div>
                                    </div>
                                    <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                                        <div class="mb-4">
                                            <label for="ipk_minimal" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Syarat IPK Minimal</label>
                                            <input type="text" id="ipk_minimal" name="ipk_minimal" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
                                            <small class="text-gray-500">[Diisi dengan angka boleh desimal, dengan nilai: 0.00 s/d 4.00]</small>
                                        </div>
                                    </div>

                                </div>
                                <div class="w-full max-w-full px-3 shrink-0">
                                    <h6 class="leading-normal capitalize">Jumlah Minimal sks Matakuliah Telah Diambil</h6>
                                    <div class="flex flex-wrap -mx-3">
                                        <div class="w-full max-w-full px-3 shrink-0 md:w-4/12 md:flex-0">
                                            <div class="mb-4">
                                                <label for="matkul_wajib" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Matakuliah Wajib</label>
                                                <div class="flex items-center">
                                                    <input type="text" id="matkul_wajib" name="matkul_wajib" class="flex-grow focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
                                                    <p class="ml-2">SKS</p>
                                                </div>
                                                <small class="text-gray-500">[Diisi dengan angka [0-9], dengan nilai: 0 s/d 200]</small>
                                            </div>
                                        </div>
                                        <div class="w-full max-w-full px-3 shrink-0 md:w-4/12 md:flex-0">
                                            <div class="mb-4">
                                                <label for="matkul_pilihan" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Matakuliah Pilihan</label>
                                                <div class="flex items-center">
                                                    <input type="text" id="matkul_pilihan" name="matkul_pilihan" class="flex-grow focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
                                                    <p class="ml-2">SKS</p>
                                                </div>
                                                <small class="text-gray-500">[Diisi dengan angka [0-9], dengan nilai: 0 s/d 200]</small>
                                            </div>
                                        </div>
                                        <div class="w-full max-w-full px-3 shrink-0 md:w-4/12 md:flex-0">
                                            <div class="mb-4">
                                                <label for="total_matkul" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Total Matakuliah</label>
                                                <div class="flex items-center">
                                                    <input type="text" id="total_matkul" name="total_matkul" class="flex-grow focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
                                                    <p class="ml-2">SKS</p>
                                                </div>
                                                <small class="text-gray-500">[Diisi dengan angka [0-9], dengan nilai: 0 s/d 200]</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="w-full max-w-full px-3 shrink-0">
                                    <h6 class="leading-normal capitalize">Jumlah Minimal sks Matakuliah Telah Lulus</h6>
                                    <div class="flex flex-wrap -mx-3">
                                        <div class="w-full max-w-full px-3 shrink-0 md:w-4/12 md:flex-0">
                                            <div class="mb-4">
                                                <label for="sks_matkul_wajib" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">SKS Matakuliah Wajib</label>
                                                <div class="flex items-center">
                                                    <input type="text" id="sks_matkul_wajib" name="sks_matkul_wajib" class="flex-grow focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
                                                    <p class="ml-2">SKS</p>
                                                </div>
                                                <small class="text-gray-500">[Diisi dengan angka [0-9], dengan nilai: 0 s/d 200]</small>
                                            </div>
                                        </div>
                                        <div class="w-full max-w-full px-3 shrink-0 md:w-4/12 md:flex-0">
                                            <div class="mb-4">
                                                <label for="sks_matkul_pilihan" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">SKS Matakuliah Pilihan</label>
                                                <div class="flex items-center">
                                                    <input type="text" id="sks_matkul_pilihan" name="sks_matkul_pilihan" class="flex-grow focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
                                                    <p class="ml-2">SKS</p>
                                                </div>
                                                <small class="text-gray-500">[Diisi dengan angka [0-9], dengan nilai: 0 s/d 200]</small>
                                            </div>
                                        </div>
                                        <div class="w-full max-w-full px-3 shrink-0 md:w-4/12 md:flex-0">
                                            <div class="mb-4">
                                                <label for="total_sks_matkul" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Total SKS Matakuliah</label>
                                                <div class="flex items-center">
                                                    <input type="text" id="total_sks_matkul" name="total_sks_matkul" class="flex-grow focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
                                                    <p class="ml-2">SKS</p>
                                                </div>
                                                <small class="text-gray-500">[Diisi dengan angka [0-9], dengan nilai: 0 s/d 200]</small>
                                            </div>
                                        </div>
                                    </div>


                                </div>

                            </div>
                            <div class="w-full max-w-full px-3 shrink-0">
                                <h6 class="leading-normal uppercase">Data Silabus Matakuliah</h6>
                                <div class="flex flex-wrap -mx-3">
                                    <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                                        <div class="mb-4">
                                            <label for="abstraksi" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Abstraksi</label>
                                            <textarea type="text" name="abstraksi" id="abstraksi" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none"></textarea>
                                        </div>
                                    </div>
                                    <!-- Input file untuk Silabus -->
                                    <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                                        <div class="mb-4">
                                            <label for="file_silabus" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">File Silabus</label>
                                            <input type="file" id="file_silabus" name="file_silabus" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none">
                                            <small class="text-gray-500">[Maksimum ukuran file : 5 MB]</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Tambahkan link script untuk Axios, jQuery, DataTables, dan SweetAlert -->
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Ambil ID mata kuliah dari URL
        const matkulId = window.location.pathname.split('/').pop();

        // Fungsi untuk mengisi dropdown jurusan
        function fillJurusanDropdown(selectedJurusan) {
            axios.get('http://localhost:9000/api/jurusan')
                .then(response => {
                    const prodi = response.data.data;
                    const jurusanSelect = document.getElementById('jurusan');

                    prodi.forEach(prodi => {
                        const option = document.createElement('option');
                        option.value = prodi.id;
                        option.textContent = prodi.jurusan;
                        if (prodi.id === selectedJurusan) {
                            option.selected = true;
                        }
                        jurusanSelect.appendChild(option);
                    });
                })
                .catch(error => {
                    console.error('Error fetching prodi:', error);
                });
        }

        // Fungsi untuk mengisi dropdown kurikulum
        function fillKurikulumDropdown(selectedKurikulum) {
            axios.get('http://localhost:9000/api/kurikulum')
                .then(response => {
                    const kurikulums = response.data.data;
                    const kurikulumSelect = document.getElementById('nama_kurikulum');

                    kurikulums.forEach(kurikulum => {
                        const option = document.createElement('option');
                        option.value = kurikulum.id;
                        option.textContent = kurikulum.nama_kurikulum;
                        if (kurikulum.id === selectedKurikulum) {
                            option.selected = true;
                        }
                        kurikulumSelect.appendChild(option);
                    });
                })
                .catch(error => {
                    console.error('Error fetching kurikulums:', error);
                });
        }
        // Definisikan fungsi fetchDosen
        function fetchDosen() {
            const token = getCookie('token');
            if (!token) {
                console.error('Token is not defined');
                return;
            }

            const axiosInstance = axios.create({
                baseURL: 'http://localhost:9000/api',
                headers: {
                    'Authorization': `Bearer ${token}`
                }
            });

            var table = $('#dosen_table').DataTable({
                "paging": true,
                "searching": true,
                "ordering": true,
                "destroy": true,
                "dom": "<'flex flex-row justify-between'<'flex flex-col'f><'flex flex-col'l>>" +
                    "<'dt-table'rt>" +
                    "<'flex flex-row justify-between'<'flex flex-col'i><'flex flex-col'p>>"
            });

            // Event listener untuk tombol pilih dosen menggunakan data-id sebagai selector
            $('#dosen_table').on('click', 'button[data-id]', function() {
                var dosenId = $(this).data('id');
                var dosenNama = $(this).closest('tr').find('td:nth-child(2)').text();

                document.getElementById('dosen_id').value = dosenId;
                document.getElementById('dosen_nama').value = dosenNama;

                document.getElementById('dosen_modal').classList.add('hidden');
            });

            function getCookie(name) {
                let cookieArr = document.cookie.split(";");
                for (let i = 0; i < cookieArr.length; i++) {
                    let cookiePair = cookieArr[i].split("=");
                    if (name == cookiePair[0].trim()) {
                        return decodeURIComponent(cookiePair[1]);
                    }
                }
                return null;
            }

            axiosInstance.get('/dosen')
                .then(function(response) {
                    if (response.data && Array.isArray(response.data.data)) {
                        table.clear();
                        response.data.data.forEach(function(item) {
                            var iddosen = escapeHtml(item.id);
                            var nidndosen = escapeHtml(item.nidn);
                            var namaLengkap = escapeHtml(item.nama_lengkap);

                            table.row.add([
                                nidndosen,
                                namaLengkap,
                                '<button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" data-id="' + item.id + '">Pilih</button>'
                            ]).draw();
                        });
                    } else {
                        console.error('Struktur respons tidak sesuai dengan yang diharapkan');
                    }
                })
                .catch(function(error) {
                    console.error('Terjadi kesalahan saat mengambil data dosen:', error);
                });

            function escapeHtml(unsafe) {
                if (typeof unsafe !== 'string') {
                    return unsafe;
                }
                return unsafe.replace(/</g, "&lt;").replace(/>/g, "&gt;");
            }
        }

        document.getElementById('pilih_dosen_btn').addEventListener('click', function() {
            document.getElementById('dosen_modal').classList.remove('hidden');
            fetchDosen();
        });

        document.getElementById('close_modal_btn').addEventListener('click', function() {
            document.getElementById('dosen_modal').classList.add('hidden');
        });

        // Fungsi untuk mengambil data mata kuliah dan mengisi form
        function fetchMatkulData(matkulId) {
            axios.get(`http://localhost:9000/api/Matakuliah/${matkulId}`)
                .then(response => {
                    const matkulData = response.data.data;
                    // Isi form dengan data yang diterima
                    document.getElementById('jurusan').value = matkulData.prodi || '';
                    document.getElementById('nama_kurikulum').value = matkulData.kurikulum || '';
                    document.getElementById('kode_matkul').value = matkulData.kode_matkul || '';
                    document.getElementById('nama_matkul_indonesia').value = matkulData.nama_matkul_indonesia || '';
                    document.getElementById('nama_matkul_english').value = matkulData.nama_matkul_english || '';
                    document.getElementById('nama_matkul_singkat').value = matkulData.nama_matkul_singkat || '';
                    document.getElementById('nama_matkul_singkat_english').value = matkulData.nama_matkul_singkat_english || '';
                    document.getElementById('sifat_matkul').value = matkulData.sifat_matkul || '';
                    document.getElementById('tipe_matkul').value = matkulData.tipe_matkul || '';
                    document.getElementById('kategori_matkul').value = matkulData.kategori_matkul || '';
                    document.getElementById('jenis_kurikulum').value = matkulData.jenis_kurikulum || '';
                    document.getElementById('sks_kurikulum').value = matkulData.sks_kurikulum || '';
                    document.getElementById('teori_sks').value = matkulData.teori_sks || '';
                    document.getElementById('praktikum_sks').value = matkulData.praktikum_sks || '';
                    document.getElementById('praklap_sks').value = matkulData.praklap_sks || '';
                    document.getElementById('paket_semester').value = matkulData.paket_semester || '';
                    document.getElementById('batas_ambil_ulang').value = matkulData.batas_ambil_ulang || '';
                    document.getElementById('status_matkul').value = matkulData.status_matkul || '';
                    document.getElementById('satuan_acara_perkulihan').value = matkulData.satuan_acara_perkulihan || '';
                    document.getElementById('bahan_ajar').value = matkulData.bahan_ajar || '';
                    document.getElementById('diktat').value = matkulData.diktat || '';
                    // Isi nilai input teks dan input tersembunyi dengan data dosen pengampu yang telah dipilih
                    document.getElementById('dosen_nama').value = matkulData.nama_dosen || '-';
                    document.getElementById('dosen_id').value = matkulData.dosen_pengampu || '-';
                    document.getElementById('tanggal_mulai_efektif').value = matkulData.tanggal_mulai_efektif || '';
                    document.getElementById('tanggal_selesai_efektif').value = matkulData.tanggal_selesai_efektif || '';
                    document.getElementById('bobot_nilai_minimal').value = matkulData.bobot_nilai_minimal || '';
                    document.getElementById('matkul_wajib').value = matkulData.matkul_wajib || '';
                    document.getElementById('matkul_pilihan').value = matkulData.matkul_pilihan || '';
                    document.getElementById('total_matkul').value = matkulData.total_matkul || '';
                    document.getElementById('sks_matkul_wajib').value = matkulData.sks_matkul_wajib || '';
                    document.getElementById('sks_matkul_pilihan').value = matkulData.sks_matkul_pilihan || '';
                    document.getElementById('total_sks_matkul').value = matkulData.total_sks_matkul || '';
                    document.getElementById('ipk_minimal').value = matkulData.ipk_minimal || '';
                    document.getElementById('abstraksi').value = matkulData.abstraksi || '';

                    // Isi dropdown jurusan dan kurikulum
                    fillJurusanDropdown(matkulData.prodi);
                    fillKurikulumDropdown(matkulData.kurikulum);
                })
                .catch(error => {
                    console.error('Error fetching matkul data:', error);
                });
        }

        // Panggil fungsi untuk mengambil data mata kuliah dengan ID yang diambil dari URL
        fetchMatkulData(matkulId);

        // Event listener untuk form submit
        document.getElementById('mkForm').addEventListener('submit', function(event) {
            event.preventDefault();

            // Buat objek JSON dari nilai input
            const data = {
                prodi: document.getElementById('jurusan').value,
                kurikulum: document.getElementById('nama_kurikulum').value,
                kode_matkul: document.getElementById('kode_matkul').value,
                nama_matkul_indonesia: document.getElementById('nama_matkul_indonesia').value,
                nama_matkul_english: document.getElementById('nama_matkul_english').value,
                nama_matkul_singkat: document.getElementById('nama_matkul_singkat').value,
                nama_matkul_singkat_english: document.getElementById('nama_matkul_singkat_english').value,
                sifat_matkul: document.getElementById('sifat_matkul').value,
                tipe_matkul: document.getElementById('tipe_matkul').value,
                kategori_matkul: document.getElementById('kategori_matkul').value,
                jenis_kurikulum: document.getElementById('jenis_kurikulum').value,
                sks_kurikulum: document.getElementById('sks_kurikulum').value,
                teori_sks: document.getElementById('teori_sks').value,
                praktikum_sks: document.getElementById('praktikum_sks').value,
                praklap_sks: document.getElementById('praklap_sks').value,
                paket_semester: document.getElementById('paket_semester').value,
                batas_ambil_ulang: document.getElementById('batas_ambil_ulang').value,
                status_matkul: document.getElementById('status_matkul').value,
                satuan_acara_perkulihan: document.getElementById('satuan_acara_perkulihan').value,
                bahan_ajar: document.getElementById('bahan_ajar').value,
                diktat: document.getElementById('diktat').value,
                dosen_pengampu: document.getElementById('dosen_id').value,
                tanggal_mulai_efektif: document.getElementById('tanggal_mulai_efektif').value,
                tanggal_selesai_efektif: document.getElementById('tanggal_selesai_efektif').value,
                bobot_nilai_minimal: document.getElementById('bobot_nilai_minimal').value,
                matkul_wajib: document.getElementById('matkul_wajib').value,
                matkul_pilihan: document.getElementById('matkul_pilihan').value,
                total_matkul: document.getElementById('total_matkul').value,
                sks_matkul_wajib: document.getElementById('sks_matkul_wajib').value,
                sks_matkul_pilihan: document.getElementById('sks_matkul_pilihan').value,
                total_sks_matkul: document.getElementById('total_sks_matkul').value,
                ipk_minimal: document.getElementById('ipk_minimal').value,
                abstraksi: document.getElementById('abstraksi').value

                // tambahkan input lainnya sesuai kebutuhan
            };

            const baseUrl = window.location.origin;

            axios.put(`${baseUrl}/api/Matakuliah/${matkulId}`, data)
                .then(response => {
                    console.log('Data update berhasil dikirim:', response.data); // Tambahkan respon console log di sini
                    Swal.fire({
                        icon: 'success',
                        title: 'Berhasil',
                        text: 'Data mata kuliah berhasil diperbarui!',
                        timer: 2000,
                        showConfirmButton: false
                    }).then(() => {

                            location.reload(); // Reload halaman setelah 24 detik
                        
                    });
                })
                .catch(error => {
                    if (error.response) {
                        console.error('Error Response:', error.response);
                        const errors = error.response.data.error;
                        let errorMessages = '';
                        for (const key in errors) {
                            errorMessages += `<p class="text-red-500">${errors[key]}</p>`;
                        }
                        Swal.fire({
                            icon: 'error',
                            title: 'Gagal',
                            html: errorMessages
                        });
                    } else {
                        console.error('Error:', error.message);
                        Swal.fire({
                            icon: 'error',
                            title: 'Gagal',
                            text: 'Terjadi kesalahan saat memperbarui data mata kuliah.'
                        });
                    }
                });

        });

        // Mengambil nama file saat file dipilih
        document.getElementById('file_silabus').addEventListener('change', function(e) {
            const fileName = e.target.files[0].name;
            console.log('File dipilih:', fileName);
        });
    });
</script>



@endsection
