@extends('base')

@section('title', 'SIAKAD')
@section('head')
<!-- Tempatkan impor CSS khusus untuk halaman ini di sini jika ada -->
@endsection
@section('content')
<div class="w-full p-6 mx-auto">
    <div class="flex flex-wrap -mx-3">
        <div class="w-full max-w-full px-3 shrink-0  md:flex-0">
            <div class="relative flex flex-col min-w-0 break-words bg-white border-0 shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
                <div class="border-black/12.5 rounded-t-2xl border-b-0 border-solid p-6 pb-0">
                    <div class="flex items-center">
                        <h4 class="mb-0 dark:text-white/80">Details Matakuliah</h4>
                        <a type="button" class="inline-block px-8 py-2 mb-4 ml-auto font-bold leading-normal text-center text-white align-middle transition-all ease-in bg-blue-500 border-0 rounded-lg shadow-md cursor-pointer text-xs tracking-tight-rem hover:shadow-xs hover:-translate-y-px active:opacity-85" href="{{ url('matkul') }}">Kembali</a>
                    </div>
                </div>
                <div class="flex-auto p-6">
                    <a type="button" id="edit-link" class="inline-block px-8 py-2 mb-4 ml-auto font-bold leading-normal text-center text-white align-middle transition-all ease-in bg-blue-500 border-0 rounded-lg shadow-md cursor-pointer text-xs tracking-tight-rem hover:shadow-xs hover:-translate-y-px active:opacity-85">Edit Data</a>
                    <h6 class="leading-normal uppercase">Data Matakuliah</h6>
                    <div class="flex flex-wrap -mx-3">
                        <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                            <div class="mb-4">
                                <label for="prodi" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Program Studi</label>
                                <div id="prodi" name="prodi" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block h-10 w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none"></div>
                            </div>
                        </div>
                        <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                            <div class="mb-4">
                                <label for="kurikulum" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Kurikulum</label>
                                <div id="kurikulum" name="kurikulum" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block h-10 w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none"></div>
                            </div>
                        </div>
                        <div class="w-full max-w-full px-3 shrink-0">
                            <h6 class="leading-normal uppercase">Data Pokok Matakuliah</h6>
                            <div class="flex flex-wrap -mx-3">
                                <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                                    <div class="mb-4">
                                        <label for="kode_matkul" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Kode Matakuliah</label>
                                        <div id="kode_matkul" name="kode_matkul" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block h-10 w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none"></div>
                                    </div>
                                </div>
                                <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                                    <div class="mb-4">
                                        <label for="sifat_matkul" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Sifat Matakuliah</label>
                                        <div id="sifat_matkul" name="sifat_matkul" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block h-10 w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none"></div>
                                    </div>
                                </div>
                                <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                                    <div class="mb-4">
                                        <label for="tipe_matkul" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Tipe Matakuliah</label>
                                        <div id="tipe_matkul" name="tipe_matkul" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block h-10 w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none"></div>
                                    </div>
                                </div>
                                <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                                    <div class="mb-4">
                                        <label for="kategori_matkul" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Kategori Matakuliah</label>
                                        <div id="kategori_matkul" name="kategori_matkul" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block h-10 w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none"></div>
                                    </div>
                                </div>
                                <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                                    <div class="mb-4">
                                        <label for="jenis_kurikulum" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Jenis Kurikulum</label>
                                        <div id="jenis_kurikulum" name="jenis_kurikulum" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block h-10 w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none"></div>
                                    </div>
                                </div>

                                <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                                    <div class="mb-4">
                                        <label for="paket_semester" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Paket Semester</label>
                                        <div id="paket_semester" name="paket_semester" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block h-10 w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none"></div>
                                    </div>
                                </div>
                                <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                                    <div class="mb-4">
                                        <label for="status_matkul" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Status Matakuliah</label>
                                        <div id="status_matkul" name="status_matkul" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block h-10 w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none"></div>
                                    </div>
                                </div>
                                <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                                    <div class="mb-4">
                                        <label for="batas_ambil_ulang" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Batas Maksimal Pengambilan Ulang</label>
                                        <div id="batas_ambil_ulang" name="batas_ambil_ulang" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block h-10 w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none"></div>
                                    </div>
                                </div>
                                <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                                    <div class="mb-4">
                                        <label for="satuan_acara_perkulihan" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Satuan Acara Perkuliahan</label>
                                        <div id="satuan_acara_perkulihan" name="satuan_acara_perkulihan" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block h-10 w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none"></div>
                                    </div>
                                </div>
                                <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                                    <div class="mb-4">
                                        <label for="bahan_ajar" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Bahan Ajar</label>
                                        <div id="bahan_ajar" name="bahan_ajar" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block h-10 w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none"></div>
                                    </div>
                                </div>
                                <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                                    <div class="mb-4">
                                        <label for="diktat" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Diktat</label>
                                        <div id="diktat" name="diktat" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block h-10 w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none"></div>
                                    </div>
                                </div>
                                <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                                    <div class="mb-4">
                                        <label for="dosen_pengampu" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Dosen Pengampu</label>
                                        <div id="dosen_pengampu" name="dosen_pengampu" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block h-10 w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none"></div>
                                    </div>
                                </div>
                                <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                                    <div class="mb-4">
                                        <label for="tanggal_mulai_efektif" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Tanggal Mulai Efektif</label>
                                        <div id="tanggal_mulai_efektif" name="tanggal_mulai_efektif" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block h-10 w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none"></div>
                                    </div>
                                </div>
                                <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                                    <div class="mb-4">
                                        <label for="tanggal_selesai_efektif" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Tanggal Akhir Efektif</label>
                                        <div id="tanggal_selesai_efektif" name="tanggal_selesai_efektif" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block h-10 w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none"></div>
                                    </div>
                                </div>
                                <div class="w-full max-w-full px-3 shrink-0">
                                    <h7 class="leading-normal uppercase">Matakuliah</h7>
                                    <div class="flex flex-wrap -mx-3">
                                        <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                                            <div class="mb-4">
                                                <label for="nama_matkul_indonesia" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Indonesia</label>
                                                <div id="nama_matkul_indonesia" name="nama_matkul_indonesia" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block h-10 w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none"></div>
                                            </div>
                                        </div>
                                        <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                                            <div class="mb-4">
                                                <label for="nama_matkul_singkat" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Singkat Indonesia</label>
                                                <div id="nama_matkul_singkat" name="nama_matkul_singkat" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block h-10 w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none"></div>
                                            </div>
                                        </div>
                                        <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                                            <div class="mb-4">
                                                <label for="nama_matkul_english" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Inggris</label>
                                                <div id="nama_matkul_english" name="nama_matkul_english" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block h-10 w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none"></div>
                                            </div>
                                        </div>
                                        <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                                            <div class="mb-4">
                                                <label for="nama_matkul_singkat_english" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Singkat Inggris</label>
                                                <div id="nama_matkul_singkat_english" name="nama_matkul_singkat_english" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block h-10 w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="w-full max-w-full px-3 shrink-0">
                            <p class="leading-normal uppercase dark:text-white dark:opacity-60 text-sm mb-4">
                                <h7 class="leading-normal uppercase">Jumlah SKS</h7>
                            <div class="flex flex-wrap -mx-3">
                                <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                                    <div class="mb-4">
                                        <label for="sks_kurikulum" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">SKS Kurikulum</label>
                                        <div id="sks_kurikulum" name="sks_kurikulum" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block h-10 w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none"></div>
                                    </div>
                                </div>
                                <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                                    <div class="mb-4">
                                        <label for="teori_sks" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Teori</label>
                                        <div id="teori_sks" name="teori_sks" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block h-10 w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none"></div>
                                    </div>
                                </div>
                                <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                                    <div class="mb-4">
                                        <label for="praktikum_sks" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Praktikum</label>
                                        <div id="praktikum_sks" name="praktikum_sks" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block h-10 w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none"></div>
                                    </div>
                                </div>
                                <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                                    <div class="mb-4">
                                        <label for="praklap_sks" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Praktikum Lapangan</label>
                                        <div id="praklap_sks" name="praklap_sks" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block h-10 w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none"></div>
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
                                        <div id="bobot_nilai_minimal" name="bobot_nilai_minimal" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block h-10 w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none"></div>
                                        <small class="text-gray-500"></small>
                                    </div>
                                </div>
                                <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                                    <div class="mb-4">
                                        <label for="ipk_minimal" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Syarat IPK Minimal</label>
                                        <div id="ipk_minimal" name="ipk_minimal" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block h-10 w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none"></div>
                                        <small class="text-gray-500"></small>
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
                                                <div id="matkul_wajib" name="matkul_wajib" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block h-10 w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none"></div>
                                                <p class="ml-2">SKS</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="w-full max-w-full px-3 shrink-0 md:w-4/12 md:flex-0">
                                        <div class="mb-4">
                                            <label for="matkul_pilihan" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Matakuliah Pilihan</label>
                                            <div class="flex items-center">
                                                <div id="matkul_pilihan" name="matkul_pilihan" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block h-10 w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none"></div>
                                                <p class="ml-2">SKS</p>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="w-full max-w-full px-3 shrink-0 md:w-4/12 md:flex-0">
                                        <div class="mb-4">
                                            <label for="total_matkul" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Total Matakuliah</label>
                                            <div class="flex items-center">
                                                <div id="total_matkul" name="total_matkul" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block h-10 w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none"></div>
                                                <p class="ml-2">SKS</p>
                                            </div>

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
                                                <div id="sks_matkul_wajib" name="sks_matkul_wajib" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block h-10 w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none"></div>
                                                <p class="ml-2">SKS</p>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="w-full max-w-full px-3 shrink-0 md:w-4/12 md:flex-0">
                                        <div class="mb-4">
                                            <label for="sks_matkul_pilihan" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">SKS Matakuliah Pilihan</label>
                                            <div class="flex items-center">
                                                <div id="sks_matkul_pilihan" name="sks_matkul_pilihan" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block h-10 w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none"></div>
                                                <p class="ml-2">SKS</p>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="w-full max-w-full px-3 shrink-0 md:w-4/12 md:flex-0">
                                        <div class="mb-4">
                                            <label for="total_sks_matkul" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Total SKS Matakuliah</label>
                                            <div class="flex items-center">
                                                <div id="total_sks_matkul" name="total_sks_matkul" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block h-10 w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none"></div>
                                                <p class="ml-2">SKS</p>
                                            </div>

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
                                        <textarea type="text" name="abstraksi" id="abstraksi" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block h-10 w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none"></textarea>
                                    </div>
                                </div>
                                <!-- Input file untuk Silabus -->
                                <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                                    <div class="mb-4">
                                        <label class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">File Silabus</label>
                                        <div id="file_silabus_container"></div>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>

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
        const token = getCookie('token'); // Ambil token dari cookie
        if (!token) {
            console.error('Token is not defined');
            return; // Token tidak ditemukan, hentikan eksekusi script
        }
        const axiosInstance = axios.create({
            baseURL: 'http://localhost:9000/api',
            headers: {
                'Authorization': `Bearer ${token}` // Sertakan token yang aman
            }
        });
        // Ambil ID dosen dari URL
        const matkulId = window.location.pathname.split('/').pop();

        axiosInstance.get(`/Matakuliah/${matkulId}`)
            .then(response => {
                const matkulData = response.data.data;
                console.log(matkulData);
                // Menetapkan nilai ke elemen HTML
                document.getElementById('prodi').textContent = matkulData.nama_jurusan || '-';
                document.getElementById('kurikulum').textContent = matkulData.nama_kurikulum || '-';
                document.getElementById('kode_matkul').textContent = matkulData.kode_matkul || '-';
                document.getElementById('nama_matkul_indonesia').textContent = matkulData.nama_matkul_indonesia || '-';
                document.getElementById('nama_matkul_singkat').textContent = matkulData.nama_matkul_singkat || '-';
                document.getElementById('nama_matkul_english').textContent = matkulData.nama_matkul_english || '-';
                document.getElementById('nama_matkul_singkat_english').textContent = matkulData.nama_matkul_singkat_english || '-';
                // document.getElementById('sifat_matkul').textContent = matkulData.sifat_matkul || '-';
                // Memodifikasi penampilan sifat_matkul berdasarkan nilai yang diterima
                const sifatMatkulElement = document.getElementById('sifat_matkul');
                switch (matkulData.sifat_matkul) {
                    case 'A':
                        sifatMatkulElement.textContent = '[W] Wajib Program Studi';
                        break;
                    case 'B':
                        sifatMatkulElement.textContent = '[P] Pilihan';
                        break;
                    case 'C':
                        sifatMatkulElement.textContent = '[W] Peminatan';
                        break;
                    case 'S':
                        sifatMatkulElement.textContent = '[W] Tugas Akhir/Skripsi/Tesis/Disertasi';
                        break;
                    case 'W':
                        sifatMatkulElement.textContent = '[W] Wajib Nasional';
                        break;
                    default:
                        sifatMatkulElement.textContent = '-';
                }
                document.getElementById('tipe_matkul').textContent = matkulData.tipe_matkul || '-';
                // document.getElementById('kategori_matkul').textContent = matkulData.kategori_matkul || '-';
                const kategori_matkulElement = document.getElementById('kategori_matkul');
                switch (matkulData.kategori_matkul) {
                    case '1':
                        kategori_matkulElement.textContent = 'Umum';
                        break;
                    default:
                        kategori_matkulElement.textContent = '-';
                }
                document.getElementById('jenis_kurikulum').textContent = matkulData.jenis_kurikulum || '-';
                document.getElementById('tipe_matkul').textContent = matkulData.tipe_matkul || '-';
                // document.getElementById('kategori_matkul').textContent = matkulData.kategori_matkul || '-';
                const jenis_kurikulumElement = document.getElementById('jenis_kurikulum');
                switch (matkulData.jenis_kurikulum) {
                    case 'A':
                        jenis_kurikulumElement.textContent = 'Inti';
                        break;
                    case 'B':
                        jenis_kurikulumElement.textContent = 'Institusi';
                        break;
                    default:
                        jenis_kurikulumElement.textContent = '-';
                }
                document.getElementById('sks_kurikulum').textContent = matkulData.sks_kurikulum || '-';
                document.getElementById('teori_sks').textContent = matkulData.teori_sks || '-';
                document.getElementById('praktikum_sks').textContent = matkulData.praktikum_sks || '-';
                document.getElementById('praklap_sks').textContent = matkulData.praklap_sks || '-';
                document.getElementById('paket_semester').textContent = matkulData.paket_semester || '-';
                document.getElementById('batas_ambil_ulang').textContent = matkulData.batas_ambil_ulang || '-';
                document.getElementById('status_matkul').textContent = matkulData.status_matkul || '-';
                document.getElementById('satuan_acara_perkulihan').textContent = matkulData.satuan_acara_perkulihan || '-';
                document.getElementById('bahan_ajar').textContent = matkulData.bahan_ajar || '-';
                document.getElementById('diktat').textContent = matkulData.diktat || '-';
                document.getElementById('dosen_pengampu').textContent = matkulData.nama_dosen || '-';
                document.getElementById('tanggal_mulai_efektif').textContent = matkulData.tanggal_mulai_efektif || '-';
                document.getElementById('tanggal_selesai_efektif').textContent = matkulData.tanggal_selesai_efektif || '-';
                document.getElementById('bobot_nilai_minimal').textContent = matkulData.bobot_nilai_minimal || '-';
                document.getElementById('matkul_wajib').textContent = matkulData.matkul_wajib || '-';
                document.getElementById('matkul_pilihan').textContent = matkulData.matkul_pilihan || '-';
                document.getElementById('total_matkul').textContent = matkulData.total_matkul || '-';
                document.getElementById('sks_matkul_wajib').textContent = matkulData.sks_matkul_wajib || '-';
                document.getElementById('sks_matkul_pilihan').textContent = matkulData.sks_matkul_pilihan || '-';
                document.getElementById('total_sks_matkul').textContent = matkulData.total_sks_matkul || '-';
                document.getElementById('ipk_minimal').textContent = matkulData.ipk_minimal || '-';
                document.getElementById('abstraksi').textContent = matkulData.abstraksi || '-';
                var fileSilabusContainer = document.getElementById('file_silabus_container');
                console.log(fileSilabusContainer);


                if (matkulData.file_silabus) {
                    var downloadButton = document.createElement('a');
                    downloadButton.textContent = 'Download File Silabus';
                    downloadButton.className = 'px-4 py-2 text-white bg-blue-500 rounded-lg hover:bg-blue-700';
                    downloadButton.href = '{{ asset("") }}' + matkulData.file_silabus;
                    downloadButton.download = 'silabus.pdf'; // Nama file yang diunduh
                    file_silabus_container.appendChild(downloadButton);
                } else {
                    file_silabus_container.textContent = '-';
                }



                document.getElementById('edit-link').href = `/edit-matkul/${matkulId}`;
            })
            .catch(error => {
                console.error('Error fetching data:', error);
            });

    });

    // Fungsi untuk membaca cookie
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
</script>


@endsection
