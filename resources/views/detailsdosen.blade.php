@extends('base')

@section('title', 'SIAKAD')

@section('content')

<div class="w-full p-6 mx-auto">
  <div class="flex flex-wrap -mx-3">
    <div class="w-full max-w-full px-3 shrink-0 md:w-8/12 md:flex-0">
      <div class="relative flex flex-col min-w-0 break-words bg-white border-0 shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
        <div class="border-black/12.5 rounded-t-2xl border-b-0 border-solid p-6 pb-0">
          <div class="flex items-center">
            <p class="mb-0 dark:text-white/80">Details Dosen</p>
            <a type="button" class="inline-block px-8 py-2 mb-4 ml-auto font-bold leading-normal text-center text-white align-middle transition-all ease-in bg-blue-500 border-0 rounded-lg shadow-md cursor-pointer text-xs tracking-tight-rem hover:shadow-xs hover:-translate-y-px active:opacity-85" href="{{ url('dosen') }}">Kembali</a>
          </div>
        </div>

        <div class="flex-auto p-6">
          <a type="button" id="edit-link" class="inline-block px-8 py-2 mb-4 ml-auto font-bold leading-normal text-center text-white align-middle transition-all ease-in bg-blue-500 border-0 rounded-lg shadow-md cursor-pointer text-xs tracking-tight-rem hover:shadow-xs hover:-translate-y-px active:opacity-85">Edit Data Pribadi</a>
          <p class="leading-normal uppercase dark:text-white dark:opacity-60 text-sm">Data Diri</p>
          <div class="flex flex-wrap -mx-3">
            <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
              <div class="mb-4">
                <label for="email" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">
                  Email address
                </label>
                <div name="email" id="email" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block h-10 w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none">
                </div>
              </div>
            </div>

            <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
              <div class="mb-4">
                <label for="telepon_selular" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Nomor HP</label>
                <div name="telepon_selular" id="telepon_selular" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block h-10 w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none">
                </div>
              </div>
            </div>
            <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
              <div class="mb-4">
                <label for="telepon_rumah" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Nomor Telepon Rumah</label>
                <div type="text" name="telepon_rumah" id="telepon_rumah" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block h-10 w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none">
                </div>
              </div>
            </div>
            <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
              <div class="mb-4">
                <label for="telepon_kantor" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Nomor Telepon Kantor</label>
                <div name="telepon_kantor" id="telepon_kantor" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block h-10 w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none">
                </div>
              </div>
            </div>
            <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
              <div class="mb-4">
                <label for="fax" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Fax</label>
                <div name="fax" id="fax" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block h-10 w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none">
                </div>
              </div>
            </div>
            <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
              <div class="mb-4">
                <label for="jenis_kelamin" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Jenis Kelamin</label>
                <div name="jenis_kelamin" id="jenis_kelamin" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block h-10 w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none">
                </div>
              </div>
            </div>
            <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
              <div class="mb-4">
                <label for="agama" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Agama</label>
                <div name="agama" id="agama" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block h-10 w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none">
                </div>
              </div>
            </div>
            <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
              <div class="mb-4">
                <label for="golongan_darah" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Golongan Darah</label>
                <div name="golongan_darah" id="golongan_darah" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block h-10 w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none">
                </div>
              </div>
            </div>
            <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
              <div class="mb-4">
                <label for="kotatempat_lahir" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Tempat Lahir</label>
                <div name="kotatempat_lahir" id="kotatempat_lahir" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block h-10 w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none">
                </div>
              </div>
            </div>
            <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
              <div class="mb-4">
                <label for="tanggal_lahir" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Tanggal Lahir</label>
                <div name="tanggal_lahir" id="tanggal_lahir" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block h-10 w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none">
                </div>
              </div>
            </div>
            <div class="w-full max-w-full px-3 shrink-0 md:flex-0">
              <div class="mb-4">
                <label for="catatan" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Catatan</label>
                <div name="catatan" id="catatan" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block h-10 w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none">
                </div>
              </div>
            </div>
          </div>
          <!-- alamat_rumah -->
          <hr class="h-px mx-0 my-4 bg-transparent border-0 opacity-25 bg-gradient-to-r from-transparent via-black/40 to-transparent dark:bg-gradient-to-r dark:from-transparent dark:via-white dark:to-transparent " />
          <p class="leading-normal uppercase dark:text-white dark:opacity-60 text-sm">Informasi Alamat</p>
          <div class="flex flex-wrap -mx-3">
            <div class="w-full max-w-full px-3 shrink-0 md:w-full md:flex-0">
              <div class="mb-4">
                <label for="alamat_rumah" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Alamat</label>
                <div name="alamat_rumah" id="alamat_rumah" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block h-10 w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none">
                </div>
              </div>
            </div>
            <div class="w-full max-w-full px-3 shrink-0 md:w-4/12 md:flex-0">
              <div class="mb-4">
                <label for="kota" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Kabupaten/Kota</label>
                <div name="kota" id="kota" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block h-10 w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none"></div>
              </div>
            </div>
            <div class="w-full max-w-full px-3 shrink-0 md:w-4/12 md:flex-0">
              <div class="mb-4">
                <label for="negara_tempat_lahir" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Negara</label>
                <div name="negara_tempat_lahir" id="negara_tempat_lahir" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block h-10 w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none"></div>
              </div>
            </div>
            <div class="w-full max-w-full px-3 shrink-0 md:w-4/12 md:flex-0">
              <div class="mb-4">
                <label for="kode_pos" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Kode Pos</label>
                <div name="kode_pos" id="kode_pos" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block h-10 w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none"></div>
              </div>
            </div>
          </div>
          <hr class="h-px mx-0 my-4 bg-transparent border-0 opacity-25 bg-gradient-to-r from-transparent via-black/40 to-transparent dark:bg-gradient-to-r dark:from-transparent dark:via-white dark:to-transparent " />
          <p class="leading-normal uppercase dark:text-white dark:opacity-60 text-sm">Informasi Lainnya</p>
          <div class="flex flex-wrap -mx-3">
            <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
              <div class="mb-4">
                <label for="status_nikah" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Status Pernikahan</label>
                <div name="status_nikah" id="status_nikah" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block h-10 w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none"></div>
              </div>
            </div>
            <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
              <div class="mb-4">
                <label for="kartu_pegawai" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Kartu Pegawai</label>
                <div name="kartu_pegawai" id="kartu_pegawai" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block h-10 w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none"></div>
              </div>
            </div>
            <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
              <div class="mb-4">
                <label for="stambuk" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Stambuk</label>
                <div name="stambuk" id="stambuk" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block h-10 w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none"></div>
              </div>
            </div>
            <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
              <div class="mb-4">
                <label for="nomor_sk_cpns" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Nomor SK CPNS</label>
                <div name="nomor_sk_cpns" id="nomor_sk_cpns" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block h-10 w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none"></div>
              </div>
            </div>
            <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
              <div class="mb-4">
                <label for="tanggal_sk_cpns" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Tanggal SK CPNS</label>
                <div name="tanggal_sk_cpns" id="tanggal_sk_cpns" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block h-10 w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none"></div>
              </div>
            </div>
            <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
              <div class="mb-4">
                <label for="tmt_pns" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">TMT PNS</label>
                <div name="tmt_pns" id="tmt_pns" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block h-10 w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none"></div>
              </div>
            </div>
            <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
              <div class="mb-4">
                <label for="golongan_pnd" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Golongan PNS</label>
                <div name="golongan_pnd" id="golongan_pnd" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block h-10 w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none"></div>
              </div>
            </div>
            <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
              <div class="mb-4">
                <label for="sumpah_pns" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Sumpah PNS</label>
                <div name="sumpah_pns" id="sumpah_pns" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block h-10 w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none"></div>
              </div>
            </div>
            <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
              <div class="mb-4">
                <label for="tanggal_masuk_pt" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Tanggal Masuk PT</label>
                <div name="tanggal_masuk_pt" id="tanggal_masuk_pt" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block h-10 w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none"></div>
              </div>
            </div>
            <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
              <div class="mb-4">
                <label for="nomor_taspen" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Nomor TASPEN</label>
                <div name="nomor_taspen" id="nomor_taspen" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block h-10 w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none"></div>
              </div>
            </div>
            <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
              <div class="mb-4">
                <label for="instansi_asal" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Instansi Asal</label>
                <div name="instansi_asal" id="instansi_asal" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block h-10 w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none"></div>
              </div>
            </div>
            <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
              <div class="mb-4">
                <label for="nomor_dosen" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Nomor Dosen</label>
                <div name="nomor_dosen" id="nomor_dosen" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block h-10 w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none"></div>
              </div>
            </div>
            <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
              <div class="mb-4">
                <label for="gelar_akademik_tertinggi" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Gelar Akademik Tertinggi</label>
                <div name="gelar_akademik_tertinggi" id="gelar_akademik_tertinggi" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block h-10 w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none"></div>
              </div>
            </div>
            <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
              <div class="mb-4">
                <label for="pt_gelar_diperoleh" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">PT Gelar Diperoleh </label>
                <div name="pt_gelar_diperoleh" id="pt_gelar_diperoleh" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block h-10 w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none"></div>
              </div>
            </div>
            <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
              <div class="mb-4">
                <label for="jabatan" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">JABATAN</label>
                <div name="jabatan" id="jabatan" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block h-10 w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none"></div>
              </div>
            </div>
            <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
              <div class="mb-4">
                <label for="bidang_ilmu" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Bidang Ilmu</label>
                <div name="bidang_ilmu" id="bidang_ilmu" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block h-10 w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none"></div>
              </div>
            </div>
            <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
              <div class="mb-4">
                <label for="kode_instansi_induk" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Kode Instansi Induk </label>
                <div name="kode_instansi_induk" id="kode_instansi_induk" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block h-10 w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none"></div>
              </div>
            </div>
            <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
              <div class="mb-4">
                <label for="status_sertifikat_mengajar" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Status Sertifikat Mengajar </label>
                <div name="status_sertifikat_mengajar" id="status_sertifikat_mengajar" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block h-10 w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none"></div>
              </div>
            </div>
            <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
              <div class="mb-4">
                <label for="nomor_sertifikat_mengajar" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Nomor Sertifikat Mengajar </label>
                <div name="nomor_sertifikat_mengajar" id="nomor_sertifikat_mengajar" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block h-10 w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none"></div>
              </div>
            </div>
            <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
              <div class="mb-4">
                <label for="status_surat_ijin_mengajar" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Status Surat Ijin Mengajar</label>
                <div name="status_surat_ijin_mengajar" id="status_surat_ijin_mengajar" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block h-10 w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none"></div>
              </div>
            </div>
            <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
              <div class="mb-4">
                <label for="nomor_surat_ijin_mengajar" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Nomor Surat Ijin Mengajar </label>
                <div name="nomor_surat_ijin_mengajar" id="nomor_surat_ijin_mengajar" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block h-10 w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none"></div>
              </div>
            </div>
            <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
              <div class="mb-4">
                <label for="status_aktifitas" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Status Aktivitas</label>
                <div name="status_aktifitas" id="status_aktifitas" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block h-10 w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none"></div>
              </div>
            </div>
            <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
              <div class="mb-4">
                <label for="semester_keluar" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Semester Keluar</label>
                <div name="semester_keluar" id="semester_keluar" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block h-10 w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none"></div>
              </div>
            </div>
          </div>
          <!-- </form> -->
        </div>
      </div>
    </div>
    <!-- Data Sekolah -->
    <div class="w-full max-w-full px-3 mt-6 shrink-0 md:w-4/12 md:flex-0 md:mt-0">
      <div class="relative flex flex-col min-w-0 break-words bg-white border-0 shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
        <img class="w-full rounded-t-2xl" src="../assets/img/bg-profile.jpg" alt="profile cover image" loading="lazy">
        <div class="flex flex-wrap justify-center -mx-3">
          <div class="w-4/12 max-w-full px-3 flex-0 ">
            <div class="mb-6 -mt-6 lg:mb-0 lg:-mt-16">
              <a href="javascript:;">
                <img class="h-auto max-w-full border-2 border-white border-solid rounded-circle" src="../assets/img/team-2.jpg" alt="profile image" loading="lazy">
              </a>
            </div>
          </div>
        </div>
        <div class="flex-auto p-6 pt-0">
          <div class="mt-6 text-center">
            <h5 id="nama_lengkapl" class="dark:text-white ">
            </h5>
            <div id="jurusan" class="mb-2 font-semibold leading-relaxed text-base dark:text-white/80 text-slate-700">
            </div>
            <div id="biaya" class="mt-6 mb-2 font-semibold leading-relaxed text-base dark:text-white/80 text-slate-700">
            </div>
            <hr class="h-px mx-0 my-4 bg-transparent border-0 opacity-25 bg-gradient-to-r from-transparent via-black/40 to-transparent dark:bg-gradient-to-r dark:from-transparent dark:via-white dark:to-transparent " />
            <p class="leading-normal uppercase dark:text-white dark:opacity-60 text-sm">Informasi Data Pribadi</p>
            <div class="w-full max-w-full px-0 shrink-0 md:w-2/12 md:flex-0">
              <label for="nama_lengkap" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Nama Lengkap</label>
            </div>
            <div class="mb-4">
              <div name="nama_lengkap" id="nama_lengkap" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block h-10 w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none"></div>
            </div>
            <div class="w-full max-w-full px-0 shrink-0 md:w-4/12 md:flex-0">
              <label for="nomor_ktp" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">NIK</label>
            </div>
            <div class="mb-4">
              <div name="nomor_ktp" id="nomor_ktp" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block h-10 w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none"></div>
            </div>
            <div class="w-full max-w-full px-0 shrink-0 md:w-4/12 md:flex-0">
              <label for="nidn" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">NIDN</label>
            </div>
            <div class="mb-4">
              <div name="nidn" id="nidn" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block h-10 w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none"></div>
            </div>

            <div class="flex flex-wrap -mx-2">
              <div class="w-full md:w-1/2 px-2 mb-4">
                <label for="gelar_depan" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Gelar Depan</label>
                <div name="gelar_depan" id="gelar_depan" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block h-10 w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none"></div>
              </div>
              <div class="w-full md:w-1/2 px-2 mb-4">
                <label for="gelar_belakang" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Gelar Belakang</label>
                <div name="gelar_belakang" id="gelar_belakang" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block h-10 w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none"></div>
              </div>
            </div>
            <div class="w-full max-w-full px-0 shrink-0 md:w-2/12 md:flex-0">
              <label for="jenis_pegawai" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Jenis Pegawai</label>
            </div>
            <div class="mb-4">
              <div name="jenis_pegawai" id="jenis_pegawai" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block h-10 w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none"></div>
            </div>
            <div class="w-full max-w-full px-0 shrink-0 md:w-2/12 md:flex-0">
              <label for="status_ikatan_kerja" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Status Ikatan Kerja</label>
            </div>
            <div class="mb-4">
              <div name="status_ikatan_kerja" id="status_ikatan_kerja" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block h-10 w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none"></div>
            </div>
            <div class="w-full max-w-full px-0 shrink-0 md:w-2/12 md:flex-0">
              <label for="program_studi" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Program Studi</label>
            </div>
            <div class="mb-4">
              <div name="program_studi" id="program_studi" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block h-10 w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


</div>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script>
  document.addEventListener('DOMContentLoaded', function() {
    const token = getCookie('token'); // Ambil token dari cookie
    if (!token) {
      console.error('Token is not defined');
      return; // Token tidak ditemukan, hentikan eksekusi script
    }
    const axiosInstance = axios.create({
      baseURL: 'http://localhost:9000/api', // Gunakan HTTPS
      headers: {
        'Authorization': `Bearer ${token}` // Sertakan token yang aman
      }
    });
    // Ambil ID dosen dari URL
    const dosenId = window.location.pathname.split('/').pop();
    axiosInstance.get(`/dosen/${dosenId}`)
      .then(response => {
        const dosenData = response.data.data;
        // Tampilkan informasi dosen
        document.getElementById('nidn').textContent = dosenData.nidn || '-';
        document.getElementById('nama_lengkap').textContent = dosenData.nama_lengkap || '-';
        document.getElementById('telepon_selular').textContent = dosenData.telepon_selular || '-';
        document.getElementById('telepon_rumah').textContent = dosenData.telepon_rumah || '-';
        document.getElementById('telepon_kantor').textContent = dosenData.telepon_kantor || '-';
        document.getElementById('fax').textContent = dosenData.fax || '-';
        document.getElementById('jenis_kelamin').textContent = dosenData.jenis_kelamin || '-';
        document.getElementById('agama').textContent = dosenData.agama || '-';
        document.getElementById('golongan_darah').textContent = dosenData.golongan_darah || '-';
        document.getElementById('kotatempat_lahir').textContent = dosenData.kotatempat_lahir || '-';
        document.getElementById('tanggal_lahir').textContent = dosenData.tanggal_lahir || '-';
        document.getElementById('catatan').textContent = dosenData.catatan || '-';
        document.getElementById('alamat_rumah').textContent = dosenData.alamat_rumah || '-';
        document.getElementById('kota').textContent = dosenData.kota || '-';
        document.getElementById('negara_tempat_lahir').textContent = dosenData.negara_tempat_lahir || '-';
        document.getElementById('kode_pos').textContent = dosenData.kode_pos || '-';
        document.getElementById('status_nikah').textContent = dosenData.status_nikah || '-';
        document.getElementById('kartu_pegawai').textContent = dosenData.kartu_pegawai || '-';
        document.getElementById('stambuk').textContent = dosenData.stambuk || '-';
        document.getElementById('nomor_sk_cpns').textContent = dosenData.nomor_sk_cpns || '-';
        document.getElementById('tanggal_sk_cpns').textContent = dosenData.tanggal_sk_cpns || '-';
        document.getElementById('tmt_pns').textContent = dosenData.tmt_pns || '-';
        document.getElementById('golongan_pnd').textContent = dosenData.golongan_pnd || '-';
        document.getElementById('sumpah_pns').textContent = dosenData.sumpah_pns || '-';
        document.getElementById('tanggal_masuk_pt').textContent = dosenData.tanggal_masuk_pt || '-';
        document.getElementById('nomor_taspen').textContent = dosenData.nomor_taspen || '-';
        document.getElementById('instansi_asal').textContent = dosenData.instansi_asal || '-';
        document.getElementById('nomor_dosen').textContent = dosenData.nomor_dosen || '-';
        document.getElementById('gelar_akademik_tertinggi').textContent = dosenData.gelar_akademik_tertinggi || '-';
        document.getElementById('pt_gelar_diperoleh').textContent = dosenData.pt_gelar_diperoleh || '-';
        document.getElementById('jabatan').textContent = dosenData.jabatan || '-';
        document.getElementById('bidang_ilmu').textContent = dosenData.bidang_ilmu || '-';
        document.getElementById('kode_instansi_induk').textContent = dosenData.kode_instansi_induk || '-';
        document.getElementById('status_sertifikat_mengajar').textContent = dosenData.status_sertifikat_mengajar || '-';
        document.getElementById('nomor_sertifikat_mengajar').textContent = dosenData.nomor_sertifikat_mengajar || '-';
        document.getElementById('status_surat_ijin_mengajar').textContent = dosenData.status_surat_ijin_mengajar || '-';
        document.getElementById('nomor_surat_ijin_mengajar').textContent = dosenData.nomor_surat_ijin_mengajar || '-';
        document.getElementById('status_aktifitas').textContent = dosenData.status_aktifitas || '-';
        document.getElementById('semester_keluar').textContent = dosenData.semester_keluar || '-';
        document.getElementById('nomor_ktp').textContent = dosenData.nomor_ktp || '-';
        document.getElementById('gelar_depan').textContent = dosenData.gelar_depan || '-';
        document.getElementById('gelar_belakang').textContent = dosenData.gelar_belakang || '-';
        document.getElementById('jenis_pegawai').textContent = dosenData.jenis_pegawai || '-';
        document.getElementById('status_ikatan_kerja').textContent = dosenData.status_ikatan_kerja || '-';
        document.getElementById('program_studi').textContent = dosenData.program_studi || '-';
        // Set link edit data dosen
        document.getElementById('edit-link').href = `/edit-dosen/${dosenId}`;
        // Dapatkan id_akun dari data dosen
        const akunId = dosenData.id_akun;
        // Panggil API untuk mendapatkan data pengguna berdasarkan id_akun
        return axiosInstance.get(`/user/${akunId}`);
      })
      .then(userResponse => {
        const userData = userResponse.data.data;
        // Tampilkan email pengguna
        document.getElementById('email').textContent = userData.email || '-';
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