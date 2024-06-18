@extends('base')

@section('title', 'SIAKAD')
@section('head')
<!-- Tempatkan impor CSS khusus untuk halaman ini di sini jika ada -->

@endsection
@section('content')
<div class="w-full p-6 mx-auto">
    <div class="flex flex-wrap -mx-3">
        <div class="w-full max-w-full px-3 shrink-0  md:flex-0">
            <div class="container mx-auto p-8">
                <h1 class="text-2xl font-bold mb-8">Form Input Soal</h1>
                <form id="soalForm" class="space-y-6">
                    <div>
                        <label for="soal" class="block text-sm font-medium text-gray-700">Judul Soal</label>
                        <input type="text" name="soal" id="soal" required class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    </div>
                    <div>
                        <label for="deskripsi" class="block text-sm font-medium text-gray-700">Deskripsi Soal</label>
                        <textarea name="deskripsi" id="deskripsi" rows="4" required class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"></textarea>
                    </div>
                    <div>
                        <label for="foto" class="block text-sm font-medium text-gray-700">Upload Gambar (optional)</label>
                        <input type="file" name="foto" id="foto" class="mt-1 block w-full text-sm text-gray-900 border border-gray-300 rounded-md cursor-pointer focus:outline-none">
                    </div>
                    <div>
                        <label for="pilihan1" class="block text-sm font-medium text-gray-700">Opsi Jawaban 1</label>
                        <input type="text" name="pilihan1" id="pilihan1" required class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    </div>
                    <div>
                        <label for="pilihan2" class="block text-sm font-medium text-gray-700">Opsi Jawaban 2</label>
                        <input type="text" name="pilihan2" id="pilihan2" required class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    </div>
                    <div>
                        <label for="pilihan3" class="block text-sm font-medium text-gray-700">Opsi Jawaban 3</label>
                        <input type="text" name="pilihan3" id="pilihan3" required class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    </div>
                    <div>
                        <label for="pilihan4" class="block text-sm font-medium text-gray-700">Opsi Jawaban 4</label>
                        <input type="text" name="pilihan4" id="pilihan4" required class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    </div>
                    <div>
                        <label for="kunci_jawaban" class="block text-sm font-medium text-gray-700">Jawaban Benar</label>
                        <select name="kunci_jawaban" id="kunci_jawaban" required class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            <option value="A">Opsi 1</option>
                            <option value="B">Opsi 2</option>
                            <option value="C">Opsi 3</option>
                            <option value="D">Opsi 4</option>
                        </select>
                    </div>
                    <div id="errorMessages" class="text-red-500"></div>
                    <div>
                        <button type="submit" class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            Simpan Soal
                        </button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>



<!-- Tambahkan link script untuk Axios, jQuery, DataTables, dan SweetAlert -->
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script>
    document.getElementById('soalForm').addEventListener('submit', function(event) {
        event.preventDefault();
        const formData = new FormData(event.target);
        const baseUrl = window.location.origin;

        axios.post(`${baseUrl}/api/ujian`, formData, {
                headers: {
                    'Content-Type': 'multipart/form-data'
                }
            })
            .then(response => {
                Swal.fire({
                    icon: 'success',
                    title: 'Berhasil',
                    text: 'Soal berhasil ditambahkan!',
                    timer: 2000,
                    showConfirmButton: false
                }).then(() => {
                    location.reload();
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
</script>


@endsection
