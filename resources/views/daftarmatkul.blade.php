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
    #kurikulum_modal {
        top: 10%;
        /* Atau nilai lain yang Anda inginkan */
        z-index: 1000;
        /* Atur nilai sesuai kebutuhan */
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
                        <h4 class="mb-0 dark:text-white/80">Pencarian Matakuliah</h4>
                        <a type="button" class="inline-block px-8 py-2 mb-4 ml-auto font-bold leading-normal text-center text-white align-middle transition-all ease-in bg-blue-500 border-0 rounded-lg shadow-md cursor-pointer text-xs tracking-tight-rem hover:shadow-xs hover:-translate-y-px active:opacity-85" href="{{ url('matkuladd') }}">Tambah Matkul</a>
                    </div>
                </div>
                <div class="flex-auto p-6">
                    <div id="kurikulum_modal" class="w-8/12 fixed inset-0 items-center justify-center p-4 bg-opacity-50 hidden">
                        <div class="w-4/5 bg-white dark:bg-slate-850 shadow-xl rounded-lg p-6 mx-auto">
                            <h2 class="text-xl font-bold mb-4">Pilih Kurikulum</h2>
                            <table id="kurikulum_table" class="dosenTable w-full table-auto border-collapse">
                                <thead>
                                    <tr>
                                        <th class="border px-4 py-2">Pilih</th>
                                        <th class="border px-4 py-2">Kurkulum</th>
                                        <th class="border px-4 py-2">Tahun</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- Data dosen akan dimasukkan di sini -->
                                </tbody>
                            </table>
                            <button type="button" id="close_modal_btn" class="mt-4 bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Tutup</button>
                            <button type="button" id="confirm_selection_btn" class="mt-4 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Pilih</button>
                        </div>
                    </div>
                    <form id="filterMK" enctype="multipart/form-data">
                        <div class="flex flex-wrap -mx-3">
                            <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                                <div class="mb-4">
                                    <label for="jurusan" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Program Studi</label>
                                    <select id="jurusan" name="jurusan" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none">
                                        <option value="">Pilih Jurusan</option>
                                    </select>
                                </div>
                            </div>
                            <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                                <div class="mb-4">
                                    <label for="dosen_nama" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Kurikulum</label>
                                    <div class="flex">
                                        <input type="text" id="dosen_nama" name="dosen_nama" class="flex-1 focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" readonly />
                                        <input type="hidden" id="kurikulum_id" name="kurikulum_id" /> <!-- Input untuk menyimpan ID dosen -->
                                        <button type="button" id="pilih_dosen_btn" class="ml-2 px-4 py-2 bg-blue-500 text-white rounded-lg">Pilih</button>
                                    </div>
                                </div>
                            </div>
                            <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                                <div class="mb-4">
                                    <label for="kode_matkul" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Kode Matakuliah</label>
                                    <input type="text" id="kode_matkul" name="kode_matkul" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
                                </div>
                            </div>
                            <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                                <div class="mb-4">
                                    <label for="namaMK" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Nama Matakuliah</label>
                                    <input type="text" id="namaMK" name="namaMK" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
                                </div>
                            </div>
                        </div>
                        <button type="submit" id="tampilkanMKBtn" class="inline-block px-8 py-2 mb-4 ml-auto font-bold leading-normal text-center text-white align-middle transition-all ease-in bg-blue-500 border-0 rounded-lg shadow-md cursor-pointer text-xs tracking-tight-rem hover:shadow-xs hover:-translate-y-px active:opacity-85">Tampilkan</button>
                    </form>
                </div>
            </div>
            <br>
            <br>
            <div class="relative flex flex-col min-w-0 break-words bg-white border-0 shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
                <div class="border-black/12.5 rounded-t-2xl border-b-0 border-solid p-6 pb-0">
                    <div class="flex items-center">
                        <h4 class="mb-0 dark:text-white/80">Daftar Matakuliah</h4>
                    </div>
                </div>
                <div class="flex-auto p-6">
                    <table id="MKTable" class="dosenTable display min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider" rowspan="2">Nama Semester</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider" rowspan="2">Kurikulum</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider" colspan="2">Matakuliah</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider" rowspan="2">Sifat</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider" rowspan="2">Paket Semester</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider" colspan="3">Jumlah SKS</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider" rowspan="2">Action</th>
                            </tr>
                            <tr>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Kode</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nama</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">T</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">P</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">PL</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Data dari API akan di-render di sini oleh Axios -->
                        </tbody>
                    </table>
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
        // Mengambil data prodi dari API dan mengisi dropdown
        axios.get('http://localhost:9000/api/jurusan')
            .then(function(response) {
                var prodi = response.data.data; // Mengambil array jurusan dari properti 'data'
                console.log(prodi);
                var prodiSelect = document.getElementById('jurusan');

                prodi.forEach(function(prodi) {
                    var option = document.createElement('option');
                    option.value = prodi.id; // Asumsikan 'id' adalah identifikasi unik semester
                    option.textContent = prodi.jurusan; // Asumsikan 'nama_semester' adalah nama semester
                    prodiSelect.appendChild(option);
                });
            })
            .catch(function(error) {
                console.error('Error fetching prodi:', error);
            });


        // Definisikan fungsi fetchDosen
        function fetchDosen() {
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

            var table = $('#kurikulum_table').DataTable({
                "paging": true,
                "searching": true,
                "ordering": true,
                "destroy": true, // Tambahkan opsi destroy agar DataTable bisa diinisialisasi ulang
                "dom": "<'flex flex-row justify-between'<'flex flex-col'f><'flex flex-col'l>>" +
                    "<'dt-table'rt>" +
                    "<'flex flex-row justify-between'<'flex flex-col'i><'flex flex-col'p>>"
            });
            // Pastikan tableMK terdefinisi
            console.log('DataTable initialized:', tableMK);

            // Gunakan HTTPS untuk memanggil API
            axiosInstance.get('/kurikulum')
                .then(function(response) {
                    if (response.data && Array.isArray(response.data.data)) {
                        table.clear(); // Bersihkan tabel sebelum mengisi dengan data baru
                        response.data.data.forEach(function(item) {
                            // Membersihkan input sebelum menambahkan ke tabel
                            var idkurikulum = escapeHtml(item.id); // Gunakan id sebagai value
                            var namakurikulum = escapeHtml(item.nama_kurikulum);
                            var namaLengkap = escapeHtml(item.tahun);

                            // Menambahkan tombol details secara dinamis
                            table.row.add([
                                '<input type="checkbox" class="dosen-checkbox" data-id="' + item.id + '" data-nama="' + item.nama_kurikulum + '">',
                                namakurikulum,
                                namaLengkap
                            ]).draw();
                        });
                    } else {
                        console.error('Struktur respons tidak sesuai dengan yang diharapkan');
                    }
                })
                .catch(function(error) {
                    console.error('Terjadi kesalahan saat mengambil data dosen:', error);
                });

            // Fungsi untuk membersihkan input dari karakter yang tidak aman
            function escapeHtml(unsafe) {
                // Cek apakah unsafe adalah string sebelum membersihkan
                if (typeof unsafe !== 'string') {
                    return unsafe;
                }
                return unsafe.replace(/</g, "&lt;").replace(/>/g, "&gt;");
            }
        }

        // Event listener untuk membuka modal dosen
        document.getElementById('pilih_dosen_btn').addEventListener('click', function() {
            document.getElementById('kurikulum_modal').classList.remove('hidden');
            fetchDosen();
        });

        // Event listener untuk menutup modal dosen
        document.getElementById('close_modal_btn').addEventListener('click', function() {
            document.getElementById('kurikulum_modal').classList.add('hidden');
        });

        // Event listener untuk mengkonfirmasi pilihan dosen
        document.getElementById('confirm_selection_btn').addEventListener('click', function() {
            var selectedIds = [];
            var selectedNames = [];

            // Loop melalui setiap checkbox yang dicentang
            document.querySelectorAll('.dosen-checkbox:checked').forEach(function(checkbox) {
                selectedIds.push(checkbox.getAttribute('data-id'));
                selectedNames.push(checkbox.getAttribute('data-nama'));
            });

            // Gabungkan ID dan Nama dosen yang dipilih menjadi string
            document.getElementById('kurikulum_id').value = selectedIds.join(',');
            document.getElementById('dosen_nama').value = selectedNames.join(', ');

            // Tutup modal
            document.getElementById('kurikulum_modal').classList.add('hidden');
        });
        // Inisialisasi DataTable untuk tabel MK
        var tableMK = $('#MKTable').DataTable({
            "paging": true,
            "searching": true,
            "ordering": true,
            "destroy": true, // Tambahkan opsi destroy agar DataTable bisa diinisialisasi ulang
            "dom": "<'flex flex-row justify-between'<'flex flex-col'f><'flex flex-col'l>>" +
                "<'dt-table'rt>" +
                "<'flex flex-row justify-between'<'flex flex-col'i><'flex flex-col'p>>"
        });
        // Event listener untuk form filter
        // Event listener untuk form filter
        document.getElementById('filterMK').addEventListener('submit', function(event) {
            event.preventDefault(); // Mencegah form dari submit default

            // Ambil nilai filter
            var prodi = document.getElementById('jurusan').value;
            var kurikulum = document.getElementById('kurikulum_id').value;
            var kode_matkul = document.getElementById('kode_matkul').value;
            var namaMK = document.getElementById('namaMK').value;

            // Buat parameter query
            var params = {};

            // Tambahkan parameter ke params jika nilainya tidak kosong
            if (prodi) {
                params.prodi = prodi;
            }
            if (kurikulum) {
                params.kurikulum = kurikulum;
            }
            if (kode_matkul) {
                params.kode_matkul = kode_matkul;
            }
            if (namaMK) {
                params.nama = namaMK;
            }

            // Log parameter query untuk debugging
            console.log('Query Parameters:', params);

            // Panggil API dengan parameter filter
            axios.get('http://localhost:9000/api/Matakuliah', {
                    params
                })
                .then(function(response) {
                    console.log('API Response:', response.data);

                    if (response.data && Array.isArray(response.data.data)) {
                        console.log('Data diterima:', response.data.data);
                        tableMK.clear(); // Bersihkan tabel sebelum mengisi dengan data baru

                        if (response.data.data.length === 0) {
                            console.log('Tidak ada data yang sesuai dengan filter yang diberikan');
                            Swal.fire({
                                icon: 'error',
                                title: 'Data Tidak Ditemukan',
                                text: 'Mohon Maaf Data Tidak Ditemukan, Silahkan Periksa Kembali Data Yang Diinputkan'
                            });
                        } else {
                            response.data.data.forEach(function(item) {
                                // Membersihkan input sebelum menambahkan ke tabel
                                var jurusan = escapeHtml(item.nama_jurusan);
                                var kurikulum = escapeHtml(item.nama_kurikulum);
                                var kode_matkul = escapeHtml(item.kode_matkul);
                                var namaMK = escapeHtml(item.nama_matkul_indonesia);
                                var sifatMK = escapeHtml(item.sifat_matkul);
                                var paketsem = escapeHtml(item.paket_semester);
                                var sksT = escapeHtml(item.teori_sks);
                                var sksP = escapeHtml(item.praktikum_sks);
                                var sksPL = escapeHtml(item.praklap_sks);

                                // Tambahkan data ke tabel
                                tableMK.row.add([
                                    jurusan,
                                    kurikulum,
                                    kode_matkul,
                                    namaMK,
                                    sifatMK,
                                    paketsem,
                                    sksT,
                                    sksP,
                                    sksPL,
                                    '<button class="px-4 py-2 text-white bg-blue-500 rounded-lg hover:bg-blue-700 details-btn" data-id="' + item.id + '">Details</button>' +
                                    '<button class="px-4 py-2 text-white bg-blue-500 rounded-lg hover:bg-red-700 delete-btn" data-id="' + item.id + '">Hapus</button>'
                                ]).draw();
                            });
                        }
                    } else {
                        console.error('Struktur respons tidak sesuai dengan yang diharapkan');
                    }
                })
                .catch(function(error) {
                    console.error('Terjadi kesalahan saat mengambil data matakuliah:', error);
                    // Tampilkan sweet alert untuk kesalahan
                });
        });
        // Event listener untuk tombol details
        $('#MKTable').on('click', '.details-btn', function() {
            var matkulId = $(this).data('id');
            // Redirect hanya jika kurikulumId ada
            if (matkulId) {
                window.location.href = '/matkul/' + matkulId;
            } else {
                console.error('ID kurikulum tidak valid');
            }
        });
        // Inisialisasi DataTables pada tabel
        var table = $('#MKTable').DataTable();
        // Event listener untuk tombol delete
        $('#MKTable').on('click', '.delete-btn', function() {
            var deleteButton = $(this);
            var matkulId = deleteButton.data('id');
            // Confirm dialog untuk konfirmasi penghapusan
            Swal.fire({
                title: 'Apakah Anda yakin?',
                text: "Data akan dihapus secara permanen!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, hapus!',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    // Panggil API delete
                    axios.delete(`http://localhost:9000/api/Matakuliah/${matkulId}`)
                        .then(function(response) {
                            // Hapus baris tabel yang sesuai dengan data yang dihapus
                            var row = deleteButton.parents('tr');
                            table.row(row).remove().draw();
                            // Tampilkan pesan sukses
                            Swal.fire(
                                'Terhapus!',
                                'Data telah dihapus.',
                                'success'
                            );
                        })
                        .catch(function(error) {
                            console.error('Terjadi kesalahan saat menghapus data:', error);
                            // Tampilkan pesan error
                            Swal.fire(
                                'Gagal!',
                                'Terjadi kesalahan saat menghapus data. Silakan coba lagi nanti.',
                                'error'
                            );
                        });
                }
            });
        });

        // Fungsi untuk membersihkan input dari karakter yang tidak aman
        function escapeHtml(unsafe) {
            if (typeof unsafe !== 'string') {
                return unsafe;
            }
            return unsafe.replace(/</g, "&lt;").replace(/>/g, "&gt;");
        }
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
    });
</script>


@endsection
