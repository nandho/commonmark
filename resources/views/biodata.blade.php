@extends('base')

@section('title', 'SIAKAD')

@section('content')
<div class="w-full p-6 mx-auto">
  <div class="flex flex-wrap -mx-3">
    <div class="w-full max-w-full px-3 shrink-0 md:w-8/12 md:flex-0">
      <div class="relative flex flex-col min-w-0 break-words bg-white border-0 shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
        <div class="border-black/12.5 rounded-t-2xl border-b-0 border-solid p-6 pb-0">
          <div class="flex items-center">
            <p class="mb-0 dark:text-white/80">Biodata</p>
            <a type="button" class="inline-block px-8 py-2 mb-4 ml-auto font-bold leading-normal text-center text-white align-middle transition-all ease-in bg-blue-500 border-0 rounded-lg shadow-md cursor-pointer text-xs tracking-tight-rem hover:shadow-xs hover:-translate-y-px active:opacity-85" href="{{ url('biodataedit') }}">Edit Data Diri</a>
          </div>
        </div>
        <div class="flex-auto p-6">
          <p class="leading-normal uppercase dark:text-white dark:opacity-60 text-sm">Data Diri</p>
          <div class="flex flex-wrap -mx-3">
            <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
              <div class="mb-4">
                <label for="nik" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">NIK</label>
                <span type="text" name="nik" id="nik" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
              </div>
            </div>
            <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
              <div class="mb-4">
                <label for="nisn" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">NISN</label>
                <span type="text" name="nisn" id="nisn" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
              </div>
            </div>
            <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
              <div class="mb-4">
                <label for="nopendaftaran" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">No. Pendaftaran</label>
                <span readonly type="text" name="nopendaftaran" id="nopendaftaran" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
              </div>
            </div>
            <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
              <div class="mb-4">
                <label for="nim" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">NIM</label>
                <span readonly type="text" name="nim" id="nim" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
              </div>
            </div>
            <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
              <div class="mb-4">
                <label for="email" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Email
                  address</label>
                <span type="email" name="email" id="email" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
              </div>
            </div>
            <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
              <div class="mb-4">
                <label for="nama" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Nama Lengkap</label>
                <span type="text" name="nama" id="nama" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
              </div>
            </div>
            <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
              <div class="mb-4">
                <label for="nohp" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Nomor HP</label>
                <span type="text" name="nohp" id="nohp" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
              </div>
            </div>
            <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
              <div class="mb-4">
                <label for="notl" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Nomor Telepon</label>
                <span type="text" name="notl" id="notl" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
              </div>
            </div>
            <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
              <div class="mb-4">
                <label for="jk"" class=" inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Jenis Kelamin</label>
                <select id="jk" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none">
                  <option value="Laki-laki">Laki-laki</option>
                  <option value="Perempuan">Perempuan</option>
                </select>
              </div>
            </div>
            <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
              <div class="mb-4">
                <label for="agama" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Agama</label>
                <span type="text" name="agama" id="agama" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
              </div>
            </div>
            <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
              <div class="mb-4">
                <label for="tlahir" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Tempat Lahir</label>
                <span type="text" name="tlahir" id="tlahir" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
              </div>
            </div>
            <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
              <div class="mb-4">
                <label for="ttl" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Tanggal Lahir</label>
                <span type="date" name="ttl" id="ttl" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
              </div>
            </div>
            <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
              <div class="mb-4">
                <label for="tb" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Tinggi Badan</label>
                <span type="text" name="tb" id="tb" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
              </div>
            </div>
            <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
              <div class="mb-4">
                <label for="bb" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Berat Badan</label>
                <span type="text" name="bb" id="bb" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
              </div>
            </div>
          </div>
          <!-- Alamat -->
          <hr class="h-px mx-0 my-4 bg-transparent border-0 opacity-25 bg-gradient-to-r from-transparent via-black/40 to-transparent dark:bg-gradient-to-r dark:from-transparent dark:via-white dark:to-transparent " />
          <p class="leading-normal uppercase dark:text-white dark:opacity-60 text-sm">Alamat</p>
          <div class="flex flex-wrap -mx-3">
            <div class="w-full max-w-full px-3 shrink-0 md:w-full md:flex-0">
              <div class="mb-4">
                <label for="alamat" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Alamat</label>
                <span type="text" name="alamat" id="alamat" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
              </div>
            </div>
            <div class="w-full max-w-full px-3 shrink-0 md:w-4/12 md:flex-0">
              <div class="mb-4">
                <label for="kel" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Kelurahan</label>
                <span type="text" name="kel" id="kel" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
              </div>
            </div>
            <div class="w-full max-w-full px-3 shrink-0 md:w-4/12 md:flex-0">
              <div class="mb-4">
                <label for="kec" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Kecamatan</label>
                <span type="text" name="kec" id="kec" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
              </div>
            </div>
            <div class="w-full max-w-full px-3 shrink-0 md:w-4/12 md:flex-0">
              <div class="mb-4">
                <label for="kota" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Kabupaten/Kota</label>
                <span type="text" name="kota" id="kota" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
              </div>
            </div>
            <div class="w-full max-w-full px-3 shrink-0 md:w-4/12 md:flex-0">
              <div class="mb-4">
                <label for="prov" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Provinsi</label>
                <span type="text" name="prov" id="prov" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
              </div>
            </div>
            <div class="w-full max-w-full px-3 shrink-0 md:w-4/12 md:flex-0">
              <div class="mb-4">
                <label for="kewarganegaraan" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Kewarganegaraan</label>
                <span type="text" name="kewarganegaraan" id="kewarganegaraan" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
              </div>
            </div>
            <div class="w-full max-w-full px-3 shrink-0 md:w-4/12 md:flex-0">
              <div class="mb-4">
                <label for="kodepos" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Kode Pos</label>
                <span type="text" name="kodepos" id="kodepos" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
              </div>
            </div>
          </div>
          <hr class="h-px mx-0 my-4 bg-transparent border-0 opacity-25 bg-gradient-to-r from-transparent via-black/40 to-transparent dark:bg-gradient-to-r dark:from-transparent dark:via-white dark:to-transparent " />
          <p class="leading-normal uppercase dark:text-white dark:opacity-60 text-sm">Informasi Keluarga</p>
          <div class="flex flex-wrap -mx-3">
            <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
              <div class="mb-4">
                <label for="nikayah" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">NIK Ayah</label>
                <span type="text" name="nikayah" id="nikayah" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
              </div>
            </div>
            <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
              <div class="mb-4">
                <label for="nayah" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Nama Ayah</label>
                <span type="text" name="nayah" id="nayah" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
              </div>
            </div>
            <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
              <div class="mb-4">
                <label for="tlayah" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Tanggal Lahir Ayah</label>
                <span type="date" name="tlayah" id="tlayah" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
              </div>
            </div>
            <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
              <div class="mb-4">
                <label for="stayah" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Status Ayah</label>
                <span type="text" name="stayah" id="stayah" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
              </div>
            </div>
            <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
              <div class="mb-4">
                <label for="tlmdayah" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Tanggal Meninggal Ayah</label>
                <span type="date" name="tlmdayah" id="tlmdayah" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
              </div>
            </div>
            <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
              <div class="mb-4">
                <label for="noayah" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Nomor Telepon Ayah</label>
                <span type="text" name="noayah" id="noayah" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
              </div>
            </div>
            <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
              <div class="mb-4">
                <label for="payah" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Pendidikan Ayah</label>
                <span type="text" name="payah" id="payah" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
              </div>
            </div>
            <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
              <div class="mb-4">
                <label for="pekerayah" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Pekerjaan Ayah</label>
                <span type="text" name="pekerayah" id="pekerayah" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
              </div>
            </div>
            <div class="w-full max-w-full px-3 shrink-0 md:w-full md:flex-0">
              <div class="mb-4">
                <label for="penghasilanayah" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Pengahsilan</label>
                <span type="text" name="penghasilanayah" id="penghasilanayah" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
              </div>
            </div>
            <!-- Data IBU -->
            <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
              <div class="mb-4">
                <label for="nikibu" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">NIK Ibu</label>
                <span type="text" name="nikibu" id="nikibu" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
              </div>
            </div>
            <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
              <div class="mb-4">
                <label for="nibu" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Nama Ibu</label>
                <span type="text" name="nibu" id="nibu" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
              </div>
            </div>
            <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
              <div class="mb-4">
                <label for="tlibu" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Tanggal Lahir Ibu</label>
                <span type="date" name="tlibu" id="tlibu" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
              </div>
            </div>
            <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
              <div class="mb-4">
                <label for="stibu" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Status Ibu</label>
                <span type="text" name="stibu" id="stibu" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
              </div>
            </div>
            <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
              <div class="mb-4">
                <label for="tlmdibu" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Tanggal Meninggal Ibu</label>
                <span type="date" name="tlmdibu" id="tlmdibu" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
              </div>
            </div>
            <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
              <div class="mb-4">
                <label for="noibu" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Nomor Telepon Ibu</label>
                <span type="text" name="noibu" id="noibu" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
              </div>
            </div>
            <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
              <div class="mb-4">
                <label for="pibu" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Pendidikan Ibu</label>
                <span type="text" name="pibu" id="pibu" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
              </div>
            </div>
            <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
              <div class="mb-4">
                <label for="pekeribu" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Pekerjaan Ibu</label>
                <span type="text" name="pekeribu" id="pekeribu" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
              </div>
            </div>
            <div class="w-full max-w-full px-3 shrink-0 md:w-full md:flex-0">
              <div class="mb-4">
                <label for="penghasilanibu" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Pengahsilan</label>
                <span type="text" name="penghasilanibu" id="penghasilanibu" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
              </div>
            </div>
            <!-- Alamat Ortu -->
            <div class="w-full max-w-full px-3 shrink-0 md:w-full md:flex-0">
              <div class="mb-4">
                <label for="alamatortu" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Alamat</label>
                <span type="text" name="alamatortu" id="alamatortu" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
              </div>
            </div>
            <div class="w-full max-w-full px-3 shrink-0 md:w-4/12 md:flex-0">
              <div class="mb-4">
                <label for="kelortu" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Kelurahan</label>
                <span type="text" name="kelortu" id="kelortu" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
              </div>
            </div>
            <div class="w-full max-w-full px-3 shrink-0 md:w-4/12 md:flex-0">
              <div class="mb-4">
                <label for="kecortu" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Kecamatan</label>
                <span type="text" name="kecortu" id="kecortu" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
              </div>
            </div>
            <div class="w-full max-w-full px-3 shrink-0 md:w-4/12 md:flex-0">
              <div class="mb-4">
                <label for="kotaortu" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Kabupaten/Kota</label>
                <span type="text" name="kotaortu" id="kotaortu" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
              </div>
            </div>
            <div class="w-full max-w-full px-3 shrink-0 md:w-4/12 md:flex-0">
              <div class="mb-4">
                <label for="provortu" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Provinsi</label>
                <span type="text" name="provortu" id="provortu" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
              </div>
            </div>
            <div class="w-full max-w-full px-3 shrink-0 md:w-4/12 md:flex-0">
              <div class="mb-4">
                <label for="kewarganegaraanortu" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Kewarganegaraan</label>
                <span type="text" name="kewarganegaraanortu" id="kewarganegaraanortu" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
              </div>
            </div>
            <div class="w-full max-w-full px-3 shrink-0 md:w-4/12 md:flex-0">
              <div class="mb-4">
                <label for="kodeposortu" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Kode Pos</label>
                <span type="text" name="kodeposortu" id="kodeposortu" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
              </div>
            </div>
          </div>
          <hr class="h-px mx-0 my-4 bg-transparent border-0 opacity-25 bg-gradient-to-r from-transparent via-black/40 to-transparent dark:bg-gradient-to-r dark:from-transparent dark:via-white dark:to-transparent " />
          <p class="leading-normal uppercase dark:text-white dark:opacity-60 text-sm">Informasi Wali</p>
          <div class="flex flex-wrap -mx-3">
            <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
              <div class="mb-4">
                <label for="nikwali" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">NIK Wali</label>
                <span type="text" name="nikwali" id="nikwali" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
              </div>
            </div>
            <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
              <div class="mb-4">
                <label for="nwali" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Nama Wali</label>
                <span type="text" name="wali" id="nwali" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
              </div>
            </div>
            <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
              <div class="mb-4">
                <label for="tlwali" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Tanggal Lahir Wali</label>
                <span type="date" name="tlwali" id="tlwali" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
              </div>
            </div>
            <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
              <div class="mb-4">
                <label for="stwali" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Status Wali</label>
                <span type="text" name="stwali" id="stwali" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
              </div>
            </div>
            <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
              <div class="mb-4">
                <label for="tlmdwali" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Tanggal Meninggal Wali</label>
                <span type="date" name="tlmdwali" id="tlmdwali" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
              </div>
            </div>
            <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
              <div class="mb-4">
                <label for="nowali" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Nomor Telepon Wali</label>
                <span type="text" name="nowali" id="nowali" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
              </div>
            </div>
            <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
              <div class="mb-4">
                <label for="penwali" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Pendidikan Wali</label>
                <span type="text" name="penwali" id="penwali" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
              </div>
            </div>
            <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
              <div class="mb-4">
                <label for="pekerwali" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Pekerjaan Wali</label>
                <span type="text" name="pekerwali" id="pekerwali" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
              </div>
            </div>
            <div class="w-full max-w-full px-3 shrink-0 md:w-full md:flex-0">
              <div class="mb-4">
                <label for="pengwali" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Pengahsilan Wali</label>
                <span type="text" name="penggwali" id="pengwali" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
              </div>
            </div>
            <!-- Alamat Wali -->
            <div class="w-full max-w-full px-3 shrink-0 md:w-full md:flex-0">
              <div class="mb-4">
                <label for="alamat" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Alamat</label>
                <span type="text" name="alamat" id="alamat" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
              </div>
            </div>
            <div class="w-full max-w-full px-3 shrink-0 md:w-4/12 md:flex-0">
              <div class="mb-4">
                <label for="kel" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Kelurahan</label>
                <span type="text" name="kel" id="kel" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
              </div>
            </div>
            <div class="w-full max-w-full px-3 shrink-0 md:w-4/12 md:flex-0">
              <div class="mb-4">
                <label for="kec" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Kecamatan</label>
                <span type="text" name="kec" id="kec" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
              </div>
            </div>
            <div class="w-full max-w-full px-3 shrink-0 md:w-4/12 md:flex-0">
              <div class="mb-4">
                <label for="kota" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Kabupaten/Kota</label>
                <span type="text" name="kota" id="kota" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
              </div>
            </div>
            <div class="w-full max-w-full px-3 shrink-0 md:w-4/12 md:flex-0">
              <div class="mb-4">
                <label for="prov" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Provinsi</label>
                <span type="text" name="prov" id="prov" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
              </div>
            </div>
            <div class="w-full max-w-full px-3 shrink-0 md:w-4/12 md:flex-0">
              <div class="mb-4">
                <label for="kewarganegaraan" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Kewarganegaraan</label>
                <span type="text" name="kewarganegaraan" id="kewarganegaraan" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
              </div>
            </div>
            <div class="w-full max-w-full px-3 shrink-0 md:w-4/12 md:flex-0">
              <div class="mb-4">
                <label for="kodepos" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Kode Pos</label>
                <span type="text" name="kodepos" id="kodepos" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
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
            <h5 id="namal" class="dark:text-white ">
            </h5>
            <div id="jurusan" class="mb-2 font-semibold leading-relaxed text-base dark:text-white/80 text-slate-700">
            </div>
            <div id="biaya" class="mt-6 mb-2 font-semibold leading-relaxed text-base dark:text-white/80 text-slate-700">
            </div>
            <hr class="h-px mx-0 my-4 bg-transparent border-0 opacity-25 bg-gradient-to-r from-transparent via-black/40 to-transparent dark:bg-gradient-to-r dark:from-transparent dark:via-white dark:to-transparent " />
            <p class="leading-normal uppercase dark:text-white dark:opacity-60 text-sm">Informasi Pendidikan Trakhir</p>
            <div class="w-full max-w-full px-0 shrink-0 md:w-4/12 md:flex-0">
              <label for="noijazah" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">No Ijazah</label>
            </div>
            <div class="mb-4">
              <span type="text" name="noijazah" id="noijazah" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
            </div>
            <div class="w-full max-w-full px-0 shrink-0 md:w-4/12 md:flex-0">
              <label for="nsekolah" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Nama Sekolah</label>
            </div>
            <div class="mb-4">
              <span type="text" name="nsekolah" id="nsekolah" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
            </div>
            <div class="w-full max-w-full px-0 shrink-0 md:w-4/12 md:flex-0">
              <label for="npsn" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">NPSN</label>
            </div>
            <div class="mb-4">
              <span type="text" name="npsn" id="npsn" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
            </div>

            <div class="flex flex-wrap -mx-2">
              <div class="w-full md:w-1/2 px-2 mb-4">
                <label for="jenissekolah" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Jenis Sekolah</label>
                <span type="text" name="jenissekolah" id="jenissekolah" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
              </div>
              <div class="w-full md:w-1/2 px-2 mb-4">
                <label for="jsekolah" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Jurusan Sekolah</label>
                <span type="text" name="jsekolah" id="jsekolah" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
              </div>
              <div class="w-full md:w-1/2 px-2 mb-4">
                <label for="thlulus" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Tahun Lulus Sekolah</label>
                <span type="text" name="thlulus" id="thlulus" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
              </div>
            </div>

            <div class="w-full max-w-full px-0 shrink-0 md:w-4/12 md:flex-0">
              <label for="ksekolah" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Kabupaten</label>
            </div>
            <div class="mb-4">
              <span type="text" name="ksekolah" id="ksekolah" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
            </div>
            <div class="w-full max-w-full px-0 shrink-0 md:w-4/12 md:flex-0">
              <label for="provsekolah" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Provinsi</label>
            </div>
            <div class="mb-4">
              <span type="text" name="provsekolah" id="provsekolah" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
            </div>
            <!-- <div class="dark:text-white/80">
              <i class="mr-2 dark:text-white ni ni-hat-3"></i>
              University of Computer Science
            </div> -->
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<script>
  async function fetchUserData() {
    try {
      const token = document.cookie.split('; ').find(row => row.startsWith('token=')).split('=')[1];
      const config = {
        headers: {
          'Authorization': `Bearer ${token}`
        }
      };

      // Mengambil data pengguna dari API
      const response = await axios.get('http://localhost:9000/api/user', config);
      const userData = response.data.data;
      console.log(userData)
      // Memanggil API jurusan untuk mendapatkan data jurusan
      const jurusanResponse = await axios.get('http://localhost:9000/api/jurusan');
      const jurusanData = jurusanResponse.data.data;
      // Mendapatkan jurusan_id dari data pengguna
      const jurusanId = userData.data.jurusan_id;
      // Mencari data jurusan yang sesuai dengan jurusan_id dari data pengguna
      const jurusan = jurusanData.find(jurusan => jurusan.id === jurusanId);
      // Memeriksa apakah jurusan ditemukan
      // if (jurusan) {
      //   // Jika ditemukan, maka nama jurusan tersedia dalam properti 'jurusan'
      const namaJurusan = jurusan.jurusan;
      // console.log('Nama Jurusan:', namaJurusan);
      //   // Sekarang Anda dapat menggunakan 'namaJurusan' untuk menampilkan nama jurusan di mana pun Anda membutuhkannya
      // } else {
      //   console.log('Jurusan tidak ditemukan');
      // }

      // Mengisi nilai span dengan data pengguna yang diterima
      document.getElementById('nik').innerText = userData.data.nik;
      document.getElementById('nisn').innerText = userData.data.nisn;
      document.getElementById('nopendaftaran').innerText = userData.data.nomor_pendaftaran;
      document.getElementById('nim').innerText = userData.data.nim;
      document.getElementById('nama').innerText = userData.data.nama_lengkap;
      // Memperbarui teks di dalam elemen HTML dengan id "jurusan" dengan nama jurusan
      document.getElementById('jurusan').innerHTML = `<i class="mr-2 dark:text-white ni ni-briefcase-24"></i>${namaJurusan}`;

      const namaLengkap = userData.data.nama_lengkap;
      // Menetapkan teks nama lengkap ke elemen dengan id "namal"
      document.querySelectorAll('#namal').forEach(function(elem) {
        elem.innerText = namaLengkap;
      });
      document.getElementById('email').innerText = userData.user.email;
      document.getElementById('nohp').innerText = userData.data.nomor_hp;
      document.getElementById('jk').innerText = userData.data.jenis_kelamin;
      document.getElementById('agama').innerText = userData.data.agama;
      document.getElementById('tlahir').innerText = userData.data.tempat_lahir;
      document.getElementById('ttl').innerText = userData.data.tanggal_lahir;
      document.getElementById('tb').innerText = userData.data.tinggi_badan;
      document.getElementById('bb').innerText = userData.data.berat_badan;
      document.getElementById('alamat').innerText = userData.data.alamat;
      document.getElementById('kel').innerText = userData.data.kelurahan;
      document.getElementById('kec').innerText = userData.data.kecamatan;
      document.getElementById('kota').innerText = userData.data.kabupaten;
      document.getElementById('prov').innerText = userData.data.provinsi;
      document.getElementById('kewarganegaraan').innerText = userData.data.kewarganegaraan;
      document.getElementById('kodepos').innerText = userData.data.kode_pos;
      document.getElementById('biaya').innerHTML = `<i class="mr-2 dark:text-white ni ni-credit-card"></i>${userData.data.sumber_b_kuliah}`;
      document.getElementById('noijazah').innerText = userData.data.no_ijazah;
      document.getElementById('nsekolah').innerText = userData.data.nama_sekolah;
      document.getElementById('npsn').innerText = userData.data.npsn;
      document.getElementById('jsekolah').innerText = userData.data.jurusan_asal;
      document.getElementById('jenissekolah').innerText = userData.data.jenis_sekolah;
      document.getElementById('thlulus').innerText = userData.data.tahun_lulus_sekolah;
      document.getElementById('ksekolah').innerText = userData.data.kabupaten_sekolah;
      document.getElementById('provsekolah').innerText = userData.data.provinsi_sekolah;
    } catch (error) {
      console.error('Gagal mengambil data pengguna:', error);
    }
  }

  // Panggil fungsi untuk mengambil data pengguna saat halaman dimuat
  fetchUserData();
</script>
@endsection