@extends('base')

@section('title', 'SIAKAD')

@section('content')
<div class="relative flex flex-col flex-auto min-w-0 p-4 mx-6 overflow-hidden break-words bg-white border-0 dark:bg-slate-850 dark:shadow-dark-xl shadow-3xl rounded-2xl bg-clip-border">
    <div class="flex flex-wrap -mx-3">
        <div class="flex-none w-auto max-w-full px-3">
            <div class="relative inline-flex items-center justify-center text-white transition-all duration-200 ease-in-out text-base h-19 w-19 rounded-xl">
                <img src="../assets/img/team-1.jpg" alt="profile_image" class="w-full shadow-2xl rounded-xl" />
            </div>
        </div>
        <div class="flex-none w-auto max-w-full px-3 my-auto">
            <div class="h-full">
                <h5 name="nama" class="mb-1 dark:text-white"></h5>
                <p id="role" class="mb-0 font-semibold leading-normal dark:text-white dark:opacity-60 text-sm"></p>
            </div>
        </div>
        <div class="w-full max-w-full px-3 mx-auto mt-4 sm:my-auto sm:mr-0 md:w-1/2 md:flex-none">
            <div class=" max-w-full  mx-auto sm:my-auto sm:mr-0 md:w-1/2 md:flex-none">
                <nav class=" z-20 flex flex-wrap items-center justify-between w-full px-6 py-2 text-black transition-all ease-in shadow-none duration-250 lg:flex-nowrap lg:justify-start" navbar-profile navbar-scroll="true">
                    <div class="flex items-center justify-between w-full px-6 py-1 mx-auto flex-wrap-inherit">
                        <div class="flex items-center mt-2 grow sm:mt-0 sm:mr-6 md:mr-0 lg:flex lg:basis-auto">
                            <ul class="flex flex-row justify-end pl-0 mb-0 list-none md-max:w-full">
                                <li class="flex items-center">
                                    <a href="../pages/sign-in.html" class="block px-0 py-2 font-semibold text-black transition-all ease-in-out text-sm">
                                        <i class="fa fa-user sm:mr-1" aria-hidden="true"></i>
                                        <span class="hidden sm:inline">Sign In</span>
                                    </a>
                                </li>
                                <li class="flex items-center pl-4 xl:hidden">
                                    <a href="javascript:;" class="block p-0 text-black transition-all ease-in-out text-sm" sidenav-trigger>
                                        <div class="w-4.5 overflow-hidden">
                                            <i class="ease mb-0.75 relative block h-0.5 rounded-sm bg-black transition-all"></i>
                                            <i class="ease mb-0.75 relative block h-0.5 rounded-sm bg-black transition-all"></i>
                                            <i class="ease relative block h-0.5 rounded-sm bg-black transition-all"></i>
                                        </div>
                                    </a>
                                </li>
                                <li class="flex items-center px-4">
                                    <a href="javascript:;" class="p-0 text-black transition-all ease-in-out text-sm">
                                        <i fixed-plugin-button-nav class="cursor-pointer fa fa-cog" aria-hidden="true"></i>
                                        <!-- fixed-plugin-button-nav  -->
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</div>
<div class="w-full p-6 mx-auto">
    <div class="flex flex-wrap -mx-3">
        <div class="w-full max-w-full px-3 shrink-0 md:w-8/12 md:flex-0">
            <div class="relative flex flex-col min-w-0 break-words bg-white border-0 shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
                <div class="border-black/12.5 rounded-t-2xl border-b-0 border-solid p-6 pb-0">
                    <div class="flex items-center">
                        <p class="mb-0 dark:text-white/80">Biodata</p>
                        <button type="button" class="inline-block px-8 py-2 mb-4 ml-auto font-bold leading-normal text-center text-white align-middle transition-all ease-in bg-blue-500 border-0 rounded-lg shadow-md cursor-pointer text-xs tracking-tight-rem hover:shadow-xs hover:-translate-y-px active:opacity-85">Kembali</button>
                    </div>
                </div>
                <div class="flex-auto p-6">
                    <form id="editForm">
                        <button type="submit" class="inline-block px-8 py-2 mb-4 ml-auto font-bold leading-normal text-center text-white align-middle transition-all ease-in bg-blue-500 border-0 rounded-lg shadow-md cursor-pointer text-xs tracking-tight-rem hover:shadow-xs hover:-translate-y-px active:opacity-85">Perbaharui Data</button>
                        <p class="leading-normal uppercase dark:text-white dark:opacity-60 text-sm">Data Diri</p>
                        <div class="flex flex-wrap -mx-3">
                            <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                                <div class="mb-4">
                                    <label for="nik" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">NIK</label>
                                    <input type="text" name="nik" id="nik" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
                                </div>
                            </div>
                            <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                                <div class="mb-4">
                                    <label for="nisn" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">NISN</label>
                                    <input type="text" name="nisn" id="nisn" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
                                </div>
                            </div>
                            <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                                <div class="mb-4">
                                    <label for="nopendaftaran" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">No. Pendaftaran</label>
                                    <input readonly type="text" name="nopendaftaran" id="nopendaftaran" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
                                </div>
                            </div>
                            <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                                <div class="mb-4">
                                    <label for="nim" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">NIM</label>
                                    <input readonly type="text" name="nim" id="nim" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
                                </div>
                            </div>
                            <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                                <div class="mb-4">
                                    <label for="email" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Email
                                        address</label>
                                    <input type="email" name="email" id="email" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
                                </div>
                            </div>
                            <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                                <div class="mb-4">
                                    <label for="nama" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Nama Lengkap</label>
                                    <input type="text" name="nama" id="nama" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
                                </div>
                            </div>
                            <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                                <div class="mb-4">
                                    <label for="nohp" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Nomor HP</label>
                                    <input type="text" name="nohp" id="nohp" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
                                </div>
                            </div>
                            <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                                <div class="mb-4">
                                    <label for="notl" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Nomor Telepon</label>
                                    <input type="text" name="notl" id="notl" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
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
                                    <input type="text" name="agama" id="agama" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
                                </div>
                            </div>
                            <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                                <div class="mb-4">
                                    <label for="tlahir" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Tempat Lahir</label>
                                    <input type="text" name="tlahir" id="tlahir" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
                                </div>
                            </div>
                            <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                                <div class="mb-4">
                                    <label for="ttl" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Tanggal Lahir</label>
                                    <input type="date" name="ttl" id="ttl" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
                                </div>
                            </div>
                            <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                                <div class="mb-4">
                                    <label for="tb" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Tinggi Badan</label>
                                    <input type="text" name="tb" id="tb" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
                                </div>
                            </div>
                            <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                                <div class="mb-4">
                                    <label for="bb" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Berat Badan</label>
                                    <input type="text" name="bb" id="bb" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
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
                                    <input type="text" name="alamat" id="alamat" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
                                </div>
                            </div>
                            <div class="w-full max-w-full px-3 shrink-0 md:w-4/12 md:flex-0">
                                <div class="mb-4">
                                    <label for="kel" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Kelurahan</label>
                                    <input type="text" name="kel" id="kel" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
                                </div>
                            </div>
                            <div class="w-full max-w-full px-3 shrink-0 md:w-4/12 md:flex-0">
                                <div class="mb-4">
                                    <label for="kec" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Kecamatan</label>
                                    <input type="text" name="kec" id="kec" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
                                </div>
                            </div>
                            <div class="w-full max-w-full px-3 shrink-0 md:w-4/12 md:flex-0">
                                <div class="mb-4">
                                    <label for="kota" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Kabupaten/Kota</label>
                                    <input type="text" name="kota" id="kota" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
                                </div>
                            </div>
                            <div class="w-full max-w-full px-3 shrink-0 md:w-4/12 md:flex-0">
                                <div class="mb-4">
                                    <label for="prov" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Provinsi</label>
                                    <input type="text" name="prov" id="prov" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
                                </div>
                            </div>
                            <div class="w-full max-w-full px-3 shrink-0 md:w-4/12 md:flex-0">
                                <div class="mb-4">
                                    <label for="kewarganegaraan" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Kewarganegaraan</label>
                                    <input type="text" name="kewarganegaraan" id="kewarganegaraan" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
                                </div>
                            </div>
                            <div class="w-full max-w-full px-3 shrink-0 md:w-4/12 md:flex-0">
                                <div class="mb-4">
                                    <label for="kodepos" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Kode Pos</label>
                                    <input type="text" name="kodepos" id="kodepos" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
                                </div>
                            </div>
                        </div>
                        <hr class="h-px mx-0 my-4 bg-transparent border-0 opacity-25 bg-gradient-to-r from-transparent via-black/40 to-transparent dark:bg-gradient-to-r dark:from-transparent dark:via-white dark:to-transparent " />
                        <p class="leading-normal uppercase dark:text-white dark:opacity-60 text-sm">Informasi Keluarga</p>
                        <div class="flex flex-wrap -mx-3">
                            <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                                <div class="mb-4">
                                    <label for="nikayah" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">NIK Ayah</label>
                                    <input type="text" name="nikayah" id="nikayah" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
                                </div>
                            </div>
                            <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                                <div class="mb-4">
                                    <label for="nayah" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Nama Ayah</label>
                                    <input type="text" name="nayah" id="nayah" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
                                </div>
                            </div>
                            <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                                <div class="mb-4">
                                    <label for="tlayah" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Tanggal Lahir Ayah</label>
                                    <input type="date" name="tlayah" id="tlayah" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
                                </div>
                            </div>
                            <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                                <div class="mb-4">
                                    <label for="stayah" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Status Ayah</label>
                                    <input type="text" name="stayah" id="stayah" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
                                </div>
                            </div>
                            <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                                <div class="mb-4">
                                    <label for="tlmdayah" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Tanggal Meninggal Ayah</label>
                                    <input type="date" name="tlmdayah" id="tlmdayah" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
                                </div>
                            </div>
                            <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                                <div class="mb-4">
                                    <label for="noayah" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Nomor Telepon Ayah</label>
                                    <input type="text" name="noayah" id="noayah" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
                                </div>
                            </div>
                            <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                                <div class="mb-4">
                                    <label for="payah" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Pendidikan Ayah</label>
                                    <input type="text" name="payah" id="payah" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
                                </div>
                            </div>
                            <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                                <div class="mb-4">
                                    <label for="pekerayah" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Pekerjaan Ayah</label>
                                    <input type="text" name="pekerayah" id="pekerayah" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
                                </div>
                            </div>
                            <div class="w-full max-w-full px-3 shrink-0 md:w-full md:flex-0">
                                <div class="mb-4">
                                    <label for="penghasilanayah" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Pengahsilan</label>
                                    <input type="text" name="penghasilanayah" id="penghasilanayah" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
                                </div>
                            </div>
                            <!-- Data IBU -->
                            <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                                <div class="mb-4">
                                    <label for="nikibu" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">NIK Ibu</label>
                                    <input type="text" name="nikibu" id="nikibu" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
                                </div>
                            </div>
                            <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                                <div class="mb-4">
                                    <label for="nibu" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Nama Ibu</label>
                                    <input type="text" name="nibu" id="nibu" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
                                </div>
                            </div>
                            <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                                <div class="mb-4">
                                    <label for="tlibu" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Tanggal Lahir Ibu</label>
                                    <input type="date" name="tlibu" id="tlibu" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
                                </div>
                            </div>
                            <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                                <div class="mb-4">
                                    <label for="stibu" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Status Ibu</label>
                                    <input type="text" name="stibu" id="stibu" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
                                </div>
                            </div>
                            <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                                <div class="mb-4">
                                    <label for="tlmdibu" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Tanggal Meninggal Ibu</label>
                                    <input type="date" name="tlmdibu" id="tlmdibu" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
                                </div>
                            </div>
                            <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                                <div class="mb-4">
                                    <label for="noibu" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Nomor Telepon Ibu</label>
                                    <input type="text" name="noibu" id="noibu" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
                                </div>
                            </div>
                            <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                                <div class="mb-4">
                                    <label for="pibu" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Pendidikan Ibu</label>
                                    <input type="text" name="pibu" id="pibu" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
                                </div>
                            </div>
                            <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                                <div class="mb-4">
                                    <label for="pekeribu" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Pekerjaan Ibu</label>
                                    <input type="text" name="pekeribu" id="pekeribu" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
                                </div>
                            </div>
                            <div class="w-full max-w-full px-3 shrink-0 md:w-full md:flex-0">
                                <div class="mb-4">
                                    <label for="penghasilanibu" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Pengahsilan</label>
                                    <input type="text" name="penghasilanibu" id="penghasilanibu" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
                                </div>
                            </div>
                            <!-- Alamat Ortu -->
                            <div class="w-full max-w-full px-3 shrink-0 md:w-full md:flex-0">
                                <div class="mb-4">
                                    <label for="alamatortu" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Alamat</label>
                                    <input type="text" name="alamatortu" id="alamatortu" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
                                </div>
                            </div>
                            <div class="w-full max-w-full px-3 shrink-0 md:w-4/12 md:flex-0">
                                <div class="mb-4">
                                    <label for="kelortu" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Kelurahan</label>
                                    <input type="text" name="kelortu" id="kelortu" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
                                </div>
                            </div>
                            <div class="w-full max-w-full px-3 shrink-0 md:w-4/12 md:flex-0">
                                <div class="mb-4">
                                    <label for="kecortu" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Kecamatan</label>
                                    <input type="text" name="kecortu" id="kecortu" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
                                </div>
                            </div>
                            <div class="w-full max-w-full px-3 shrink-0 md:w-4/12 md:flex-0">
                                <div class="mb-4">
                                    <label for="kotaortu" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Kabupaten/Kota</label>
                                    <input type="text" name="kotaortu" id="kotaortu" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
                                </div>
                            </div>
                            <div class="w-full max-w-full px-3 shrink-0 md:w-4/12 md:flex-0">
                                <div class="mb-4">
                                    <label for="provortu" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Provinsi</label>
                                    <input type="text" name="provortu" id="provortu" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
                                </div>
                            </div>
                            <div class="w-full max-w-full px-3 shrink-0 md:w-4/12 md:flex-0">
                                <div class="mb-4">
                                    <label for="kewarganegaraanortu" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Kewarganegaraan</label>
                                    <input type="text" name="kewarganegaraanortu" id="kewarganegaraanortu" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
                                </div>
                            </div>
                            <div class="w-full max-w-full px-3 shrink-0 md:w-4/12 md:flex-0">
                                <div class="mb-4">
                                    <label for="kodeposortu" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Kode Pos</label>
                                    <input type="text" name="kodeposortu" id="kodeposortu" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
                                </div>
                            </div>
                        </div>
                        <hr class="h-px mx-0 my-4 bg-transparent border-0 opacity-25 bg-gradient-to-r from-transparent via-black/40 to-transparent dark:bg-gradient-to-r dark:from-transparent dark:via-white dark:to-transparent " />
                        <p class="leading-normal uppercase dark:text-white dark:opacity-60 text-sm">Informasi Wali</p>
                        <div class="flex flex-wrap -mx-3">
                            <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                                <div class="mb-4">
                                    <label for="nikwali" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">NIK Wali</label>
                                    <input type="text" name="nikwali" id="nikwali" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
                                </div>
                            </div>
                            <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                                <div class="mb-4">
                                    <label for="nwali" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Nama Wali</label>
                                    <input type="text" name="wali" id="nwali" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
                                </div>
                            </div>
                            <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                                <div class="mb-4">
                                    <label for="tlwali" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Tanggal Lahir Wali</label>
                                    <input type="date" name="tlwali" id="tlwali" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
                                </div>
                            </div>
                            <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                                <div class="mb-4">
                                    <label for="stwali" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Status Wali</label>
                                    <input type="text" name="stwali" id="stwali" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
                                </div>
                            </div>
                            <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                                <div class="mb-4">
                                    <label for="tlmdwali" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Tanggal Meninggal Wali</label>
                                    <input type="date" name="tlmdwali" id="tlmdwali" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
                                </div>
                            </div>
                            <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                                <div class="mb-4">
                                    <label for="nowali" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Nomor Telepon Wali</label>
                                    <input type="text" name="nowali" id="nowali" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
                                </div>
                            </div>
                            <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                                <div class="mb-4">
                                    <label for="penwali" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Pendidikan Wali</label>
                                    <input type="text" name="penwali" id="penwali" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
                                </div>
                            </div>
                            <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                                <div class="mb-4">
                                    <label for="pekerwali" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Pekerjaan Wali</label>
                                    <input type="text" name="pekerwali" id="pekerwali" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
                                </div>
                            </div>
                            <div class="w-full max-w-full px-3 shrink-0 md:w-full md:flex-0">
                                <div class="mb-4">
                                    <label for="pengwali" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Pengahsilan Wali</label>
                                    <input type="text" name="penggwali" id="pengwali" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
                                </div>
                            </div>
                            <!-- Alamat Wali -->
                            <div class="w-full max-w-full px-3 shrink-0 md:w-full md:flex-0">
                                <div class="mb-4">
                                    <label for="alamat" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Alamat</label>
                                    <input type="text" name="alamat" id="alamat" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
                                </div>
                            </div>
                            <div class="w-full max-w-full px-3 shrink-0 md:w-4/12 md:flex-0">
                                <div class="mb-4">
                                    <label for="kel" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Kelurahan</label>
                                    <input type="text" name="kel" id="kel" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
                                </div>
                            </div>
                            <div class="w-full max-w-full px-3 shrink-0 md:w-4/12 md:flex-0">
                                <div class="mb-4">
                                    <label for="kec" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Kecamatan</label>
                                    <input type="text" name="kec" id="kec" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
                                </div>
                            </div>
                            <div class="w-full max-w-full px-3 shrink-0 md:w-4/12 md:flex-0">
                                <div class="mb-4">
                                    <label for="kota" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Kabupaten/Kota</label>
                                    <input type="text" name="kota" id="kota" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
                                </div>
                            </div>
                            <div class="w-full max-w-full px-3 shrink-0 md:w-4/12 md:flex-0">
                                <div class="mb-4">
                                    <label for="prov" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Provinsi</label>
                                    <input type="text" name="prov" id="prov" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
                                </div>
                            </div>
                            <div class="w-full max-w-full px-3 shrink-0 md:w-4/12 md:flex-0">
                                <div class="mb-4">
                                    <label for="kewarganegaraan" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Kewarganegaraan</label>
                                    <input type="text" name="kewarganegaraan" id="kewarganegaraan" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
                                </div>
                            </div>
                            <div class="w-full max-w-full px-3 shrink-0 md:w-4/12 md:flex-0">
                                <div class="mb-4">
                                    <label for="kodepos" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Kode Pos</label>
                                    <input type="text" name="kodepos" id="kodepos" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
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
                <img class="w-full rounded-t-2xl" src="../assets/img/bg-profile.jpg" alt="profile cover image">
                <div class="flex flex-wrap justify-center -mx-3">
                    <div class="w-4/12 max-w-full px-3 flex-0 ">
                        <div class="mb-6 -mt-6 lg:mb-0 lg:-mt-16">
                            <a href="javascript:;">
                                <img class="h-auto max-w-full border-2 border-white border-solid rounded-circle" src="../assets/img/team-2.jpg" alt="profile image">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="flex-auto p-6 pt-0">
                    <div class="flex flex-wrap -mx-3">
                        <div class="w-full max-w-full px-3 flex-1-0">
                            <div class="flex justify-center">
                                <div class="grid text-center">
                                    <span class="font-bold dark:text-white text-lg">22</span>
                                    <span class="leading-normal dark:text-white text-sm opacity-80">Friends</span>
                                </div>
                                <div class="grid mx-6 text-center">
                                    <span class="font-bold dark:text-white text-lg">10</span>
                                    <span class="leading-normal dark:text-white text-sm opacity-80">Photos</span>
                                </div>
                                <div class="grid text-center">
                                    <span class="font-bold dark:text-white text-lg">89</span>
                                    <span class="leading-normal dark:text-white text-sm opacity-80">Comments</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-6 text-center">
                        <h5 class="dark:text-white ">
                            Mark Davis
                            <span class="font-light">, 35</span>
                        </h5>
                        <div class="mb-2 font-semibold leading-relaxed text-base dark:text-white/80 text-slate-700">
                            <i class="mr-2 dark:text-white ni ni-pin-3"></i>
                            Bucharest, Romania
                        </div>
                        <div class="mt-6 mb-2 font-semibold leading-relaxed text-base dark:text-white/80 text-slate-700">
                            <i class="mr-2 dark:text-white ni ni-briefcase-24"></i>
                            Solution Manager - Creative Tim Officer
                        </div>
                        <div class="dark:text-white/80">
                            <i class="mr-2 dark:text-white ni ni-hat-3"></i>
                            University of Computer Science
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </form>
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
            // Mengisi nilai input dengan data pengguna yang diterima
            document.getElementById('nik').value = userData.data.nik;
            document.getElementById('nisn').value = userData.data.nisn;
            document.getElementById('nopendaftaran').value = userData.data.nomor_pendaftaran;
            document.getElementById('nim').value = userData.data.nim;
            document.getElementById('nama').value = userData.data.nama_lengkap;
            document.getElementById('email').value = userData.user.email;
            document.getElementById('nohp').value = userData.data.nomor_hp;
            document.getElementById('jk').value = userData.data.jenis_kelamin;
            document.getElementById('agama').value = userData.data.agama;
            document.getElementById('tlahir').value = userData.data.tempat_lahir;
            document.getElementById('ttl').value = userData.data.tanggal_lahir;
            document.getElementById('tb').value = userData.data.tinggi_badan;
            document.getElementById('bb').value = userData.data.berat_badan;
            document.getElementById('alamat').value = userData.data.alamat;
            document.getElementById('kel').value = userData.data.kelurahan;
            document.getElementById('kec').value = userData.data.kecamatan;
            document.getElementById('kota').value = userData.data.kabupaten;
            document.getElementById('prov').value = userData.data.provinsi;
            document.getElementById('kewarganegaraan').value = userData.data.kewarganegaraan;
            document.getElementById('kodepos').value = userData.data.kode_pos;
        } catch (error) {
            console.error('Gagal mengambil data pengguna:', error);
        }
    }

    // Panggil fungsi untuk mengambil data pengguna saat halaman dimuat
    fetchUserData();

    document.getElementById('editForm').addEventListener('submit', async function(event) {
        event.preventDefault();
        const formData = new FormData(this);
        const updatedUserData = {};
        formData.forEach((value, key) => {
            updatedUserData[key] = value;
        });

        try {
            const token = document.cookie.split('; ').find(row => row.startsWith('token=')).split('=')[1];
            const config = {
                headers: {
                    'Authorization': `Bearer ${token}`,
                    'Content-Type': 'application/json' // Set content type to JSON
                }
            };

            // Mengambil data pengguna dari API
            const response = await axios.get('http://localhost:9000/api/user', config);
            const userData = response.data.data;
            // Mendapatkan ID pengguna dari data yang diterima
            const userId = userData.data.id;

            // Menggunakan ID untuk membuat URL pembaruan
            const updateUserUrl = `http://localhost:9000/api/pmb/${userId}`;

            // Data yang ingin diperbarui diambil dari inputan
            const updatedData = {
                nama_lengkap: document.getElementById('nama').value,
                email: document.getElementById('email').value,
                nik: document.getElementById('nik').value,
                nomor_hp: document.getElementById('nohp').value,
                jenis_kelamin: document.getElementById('jk').value,
                nomor_telp: document.getElementById('notl').value,
                agama: document.getElementById('agama').value,
                tempat_lahir: document.getElementById('tlahir').value,
                tanggal_lahir: document.getElementById('ttl').value,
                tinggi_badan: document.getElementById('tb').value,
                berat_badan: document.getElementById('bb').value,
                alamat: document.getElementById('alamat').value,
                kelurahan: document.getElementById('kel').value,
                kecamatan: document.getElementById('kec').value,
                kabupaten: document.getElementById('prov').value,
                kewarganegaraan: document.getElementById('kewarganegaraan').value,
                kode_pos: document.getElementById('kodepos').value,

            };
            // Melakukan pembaruan data menggunakan metode PATCH
            const patchResponse = await axios.patch(updateUserUrl, updatedData, config);

            console.log('Data berhasil diperbarui:', patchResponse.data);

            window.location.href = "/tes";

        } catch (error) {
            console.error('Error updating data:', error.message);
        }
    });
</script>
@endsection