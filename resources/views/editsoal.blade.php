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
                    <h1 class="text-2xl font-bold mb-8">Form Input Soal</h1>
                    <form id="editsoalForm" class="space-y-6" enctype="multipart/form-data">
                        <div class="w-full max-w-full px-3 shrink-0 md:flex-0">
                            <div class="mb-4">
                                <label for="soal" class="block text-sm font-medium text-gray-700">Soal</label>
                                <input type="text" name="soal" id="soal" required class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none">
                            </div>
                        </div>
                        <div class="w-full max-w-full px-3 shrink-0 md:flex-0">
                            <div class="mb-4">
                                <label for="file_silabus" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">File Silabus</label>
                                <input type="file" id="file_silabus" name="file_silabus" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none">
                                <div id="file_silabus_container"></div>
                                <small class="text-gray-500">[Maksimum ukuran file : 5 MB]</small>
                            </div>
                        </div>
                        <div class="w-full max-w-full px-3 shrink-0 md:flex-0">
                            <div class="mb-4">
                                <label for="pilihan1" class="block text-sm font-medium text-gray-700">Opsi Jawaban 1</label>
                                <input type="text" name="pilihan1" id="pilihan1" required class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none">
                            </div>
                        </div>
                        <div class="w-full max-w-full px-3 shrink-0 md:flex-0">
                            <div class="mb-4">
                                <label for="pilihan2" class="block text-sm font-medium text-gray-700">Opsi Jawaban 2</label>
                                <input type="text" name="pilihan2" id="pilihan2" required class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none">
                            </div>
                        </div>
                        <div class="w-full max-w-full px-3 shrink-0 md:flex-0">
                            <div class="mb-4">
                                <label for="pilihan3" class="block text-sm font-medium text-gray-700">Opsi Jawaban 3</label>
                                <input type="text" name="pilihan3" id="pilihan3" required class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none">
                            </div>
                        </div>
                        <div class="w-full max-w-full px-3 shrink-0 md:flex-0">
                            <div class="mb-4">
                                <label for="pilihan4" class="block text-sm font-medium text-gray-700">Opsi Jawaban 4</label>
                                <input type="text" name="pilihan4" id="pilihan4" required class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none">
                            </div>
                        </div>
                        <div class="w-full max-w-full px-3 shrink-0 md:flex-0">
                            <div class="mb-4">
                                <label for="kunci_jawaban" class="block text-sm font-medium text-gray-700">Jawaban Benar</label>
                                <select name="kunci_jawaban" id="kunci_jawaban" required class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none">
                                    <option value="">--Pilih Kunci Jawaban--</option>
                                    <option value="A">A</option>
                                    <option value="B">B</option>
                                    <option value="C">C</option>
                                    <option value="D">D</option>
                                </select>
                            </div>
                        </div>
                        <div id="errorMessages" class="text-red-500"></div>
                        <div class="w-full max-w-full px-3 shrink-0 md:flex-0">
                            <div class="mb-4">
                                <br>
                                <button type="submit" class="inline-block px-8 py-2 mb-4 ml-auto font-bold leading-normal text-center text-white align-middle transition-all ease-in bg-blue-500 border-0 rounded-lg shadow-md cursor-pointer text-xs tracking-tight-rem hover:shadow-xs hover:-translate-y-px active:opacity-85">
                                    Simpan Soal
                                </button>
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
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const token = getCookie('token'); // Ambil token dari cookie
        // Ambil base URL dari window.location.origin
        const baseUrl = window.location.origin;
        // Ambil ID soal dari URL
        const soalId = window.location.pathname.split('/').pop();

        if (!token) {
            console.error('Token is not defined');
            return; // Token tidak ditemukan, hentikan eksekusi script
        }

        const axiosInstance = axios.create({
            baseURL: `${baseUrl}/api`, // Sesuaikan dengan URL API Anda
            headers: {
                'Authorization': `Bearer ${token}` // Sertakan token JWT
            }
        });

        // Fungsi untuk menampilkan data soal sebelumnya
        function tampilkanDataSebelumnya() {
            axiosInstance.get(`/ujian/${soalId}`)
                .then(response => {
                    console.log('Response Data:', response.data); // Tampilkan data pada konsol log
                    const data = response.data.data;

                    // Mengisi nilai-nilai pada formulir dengan data yang diterima dari API
                    document.getElementById('soal').value = data.soal;
                    document.getElementById('pilihan1').value = data.pilihan1;
                    document.getElementById('pilihan2').value = data.pilihan2;
                    document.getElementById('pilihan3').value = data.pilihan3;
                    document.getElementById('pilihan4').value = data.pilihan4;
                    document.getElementById('kunci_jawaban').value = data.kunci_jawaban;

                    // Tampilkan nama file silabus jika ada
                    const fileFoto = document.getElementById('file_silabus_container');
                    if (data.foto) {
                        const fileNameSpan = document.createElement('span');
                        fileNameSpan.textContent = data.foto.split('/').pop(); // Menampilkan nama file saja
                        fileNameSpan.className = 'text-gray-700';
                        fileFoto.appendChild(fileNameSpan);
                    } else {
                        fileFoto.textContent = '-';
                    }
                })
                .catch(error => {
                    console.error('Error fetching matkul data:', error);
                });
        }

        // Jalankan fungsi tampilkanDataSebelumnya saat halaman dimuat
        tampilkanDataSebelumnya();

        // Event listener untuk form submit
        document.getElementById('editsoalForm').addEventListener('submit', function(event) {
            event.preventDefault();

            // Menampilkan nilai-nilai dari setiap elemen yang diambil
            console.log('Value of elements:');
            console.log('Soal:', document.getElementById('soal').value);
            console.log('Pilihan 1:', document.getElementById('pilihan1').value);
            console.log('Pilihan 2:', document.getElementById('pilihan2').value);
            console.log('Pilihan 3:', document.getElementById('pilihan3').value);
            console.log('Pilihan 4:', document.getElementById('pilihan4').value);
            console.log('Kunci Jawaban:', document.getElementById('kunci_jawaban').value);

            // Membuat objek data untuk dikirimkan
            const data = {
                soal: document.getElementById('soal').value,
                pilihan1: document.getElementById('pilihan1').value,
                pilihan2: document.getElementById('pilihan2').value,
                pilihan3: document.getElementById('pilihan3').value,
                pilihan4: document.getElementById('pilihan4').value,
                kunci_jawaban: document.getElementById('kunci_jawaban').value,
                foto: document.getElementById('file_silabus').files[0],
                _method: 'PUT',
                // foto: document.getElementById('foto').files[0], // Mendapatkan file foto yang diupload
            };

            const idSoal = soalId; // ID soal yang akan diupdate

            axiosInstance.put(`/ujian/${idSoal}`, data, {
                    headers: {
                        'Content-Type': 'multipart/form-data'
                    }
                })
                .then(response => {
                    console.log('Response Data:', response.data); // Tampilkan respons dari server pada konsol log
                    Swal.fire({
                        icon: 'success',
                        title: 'Berhasil',
                        text: 'Data soal berhasil diperbarui!',
                        timer: 2000,
                        showConfirmButton: false
                    }).then(() => {
                        // Lakukan tindakan setelah pesan berhasil ditampilkan (misalnya, reload halaman)
                        // location.reload();
                    });
                })
                .catch(error => {
                    if (error.response) {
                        console.error('Error Response:', error.response);
                        const errors = error.response.data.error;
                        let errorMessages = '';
                        for (const key in errors) {
                            errorMessages += `<p>${errors[key]}</p>`;
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
