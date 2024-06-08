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
                        <p class="mb-0 dark:text-white/80">Edit Kurikulum</p>
                        <a type="button" class="inline-block px-8 py-2 mb-4 ml-auto font-bold leading-normal text-center text-white align-middle transition-all ease-in bg-blue-500 border-0 rounded-lg shadow-md cursor-pointer text-xs tracking-tight-rem hover:shadow-xs hover:-translate-y-px active:opacity-85" href="{{ url('kurikulum') }}">Kembali</a>
                    </div>
                </div>
                <div class="flex-auto p-6">
                    <form id="editkurikulumForm">
                        <button type="submit" class="inline-block px-8 py-2 mb-4 ml-auto font-bold leading-normal text-center text-white align-middle transition-all ease-in bg-blue-500 border-0 rounded-lg shadow-md cursor-pointer text-xs tracking-tight-rem hover:shadow-xs hover:-translate-y-px active:opacity-85">Simpan</button>
                        <p class="leading-normal uppercase dark:text-white dark:opacity-60 text-sm">Tambah Kurikulum</p>
                        <div class="flex flex-wrap -mx-3">
                            <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                                <div class="mb-4">
                                    <label for="nama_kurikulum" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Nama Kurikulum</label>
                                    <input type="text" id="nama_kurikulum" name="nama_kurikulum" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
                                </div>
                            </div>
                            <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                                <div class="mb-4">
                                    <label for="tahun" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Tahun Kurikulum</label>
                                    <input type="text" id="tahun" name="tahun" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
                                </div>
                            </div>
                            <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                                <div class="mb-4">
                                    <label for="studi_ideal" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Masa Studi Ideal</label>
                                    <input type="text" id="studi_ideal" name="studi_ideal" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
                                </div>
                            </div>
                            <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                                <div class="mb-4">
                                    <label for="studi_maks" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Masa Studi Maksimum</label>
                                    <input type="text" id="studi_maks" name="studi_maks" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
                                </div>
                            </div>
                            <div class="w-full max-w-full px-3 shrink-0  md:flex-0">
                                <div class="mb-4">
                                    <label for="keterangan" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Keterangan</label>
                                    <textarea type="text" id="keterangan" name="keterangan" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none"></textarea>
                                </div>
                            </div>

                            <div class="w-full max-w-full px-3 shrink-0">
                                <p class="leading-normal uppercase dark:text-white dark:opacity-60 text-sm mb-4">Keputusan Rektor</p>
                                <div class="flex flex-wrap -mx-3">
                                    <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                                        <div class="mb-4">
                                            <label for="nomor" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Nomor</label>
                                            <input type="number" id="nomor" name="nomor" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
                                        </div>
                                    </div>
                                    <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                                        <div class="mb-4">
                                            <label for="tanggal" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Tahun</label>
                                            <input type="date" id="tanggal" name="tanggal" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="w-full max-w-full px-3 shrink-0">
                                <p class="leading-normal uppercase dark:text-white dark:opacity-60 text-sm mb-4">Waktu Disetujui</p>
                                <div class="flex flex-wrap -mx-3">
                                    <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                                        <div class="mb-4">
                                            <label for="pihak_acc" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Pihak yang Menyetujui</label>
                                            <input type="text" id="pihak_acc" name="pihak_acc" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
                                        </div>
                                    </div>
                                    <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                                        <div class="mb-4">
                                            <label for="tanggal_acc" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Tanggal disetujui</label>
                                            <input type="date" id="tanggal_acc" name="tanggal_acc" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
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


<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
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
        const kurikulumId = window.location.pathname.split('/').pop();

        axiosInstance.get(`/kurikulum/${kurikulumId}`)
            .then(response => {
                const kurikulumData = response.data.data;
                // Tampilkan informasi dosen
                document.getElementById('nama_kurikulum').value = kurikulumData.nama_kurikulum;
                document.getElementById('tahun').value = kurikulumData.tahun;
                document.getElementById('nomor').value = kurikulumData.nomor;
                document.getElementById('studi_ideal').value = kurikulumData.studi_ideal;
                document.getElementById('studi_maks').value = kurikulumData.studi_maks;
                document.getElementById('keterangan').value = kurikulumData.keterangan;
                document.getElementById('tanggal').value = kurikulumData.tanggal;
                document.getElementById('pihak_acc').value = kurikulumData.pihak_acc;
                document.getElementById('tanggal_acc').value = kurikulumData.tanggal_acc;
            })
            .catch(error => {
                console.error('Error fetching data:', error);
            });

        // Panggil event listener kedua di sini
        document.getElementById('editkurikulumForm').addEventListener('submit', function(event) {
            event.preventDefault();
            const formData = new FormData(event.target);
            const formProps = Object.fromEntries(formData);
            const baseUrl = window.location.origin;
            const kurikulumId = window.location.pathname.split('/').pop(); // Ambil ID dosen dari URL

            axiosInstance.put(`${baseUrl}/api/kurikulum/${kurikulumId}`, formProps)
                .then(response => {
                    Swal.fire({
                        icon: 'success',
                        title: 'Berhasil',
                        text: 'Data dosen berhasil diperbarui!',
                        timer: 2000,
                        showConfirmButton: false
                    }).then(() => {
                        window.location.href = `/kurikulum`; // Redirect ke halaman detail dosen
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
                        document.getElementById('errorMessages').innerHTML = errorMessages;
                        Swal.fire({
                            icon: 'error',
                            title: 'Gagal',
                            html: errorMessages
                        });
                    } else {
                        console.error('Error:', error.message);
                    }
                });
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
