@extends('base')
@section('title', 'SIAKAD')
@section('content')
<div class="w-full p-6 mx-auto">
    <div class="flex flex-wrap -mx-3">
        <div class="w-full max-w-full px-3 shrink-0  md:flex-0">
            <div class="relative flex flex-col min-w-0 break-words bg-white border-0 shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
                <div class="border-black/12.5 rounded-t-2xl border-b-0 border-solid p-6 pb-0">
                    <div class="flex items-center">
                        <p class="mb-0 dark:text-white/80">Soal Ujian</p>
                        <a type="button" class="inline-block px-8 py-2 mb-4 ml-auto font-bold leading-normal text-center text-white align-middle transition-all ease-in bg-blue-500 border-0 rounded-lg shadow-md cursor-pointer text-xs tracking-tight-rem hover:shadow-xs hover:-translate-y-px active:opacity-85" href="{{ url('listsoal') }}">Kembali</a>
                    </div>
                </div>
                <div class="flex-auto p-6">
                    <div class="block flex-wrap -mx-3">
                        <a type="button" id="edit-link" class="inline-block px-8 py-2 mb-4 ml-auto font-bold leading-normal text-center text-white align-middle transition-all ease-in bg-blue-500 border-0 rounded-lg shadow-md cursor-pointer text-xs tracking-tight-rem hover:shadow-xs hover:-translate-y-px active:opacity-85">Edit</a>
                        <div id="soal-detail">
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
    document.addEventListener('DOMContentLoaded', async function() {
        const token = getCookie('token'); // Ambil token dari cookie
        if (!token) {
            console.error('Token is not defined');
            return; // Token tidak ditemukan, hentikan eksekusi script
        }
        // Ambil base URL dari window.location.origin
        const baseUrl = window.location.origin;
        // Ambil ID dosen dari URL
        const soalId = window.location.pathname.split('/').pop();

        // Buat instance axios dengan konfigurasi
        const axiosInstance = axios.create({
            baseURL: `${baseUrl}/api`, // Gunakan baseUrl yang dinamis
            headers: {
                'Authorization': `Bearer ${token}` // Sertakan token yang aman
            }
        });

        try {
            const response = await axiosInstance.get(`/ujian/${soalId}`);
            const dataSoal = response.data.data; // Ambil objek soal dari response
            document.getElementById('edit-link').href = `/edit-soal/${soalId}`;
            // Panggil fungsi untuk menampilkan soal saat halaman dimuat
            const soalDetailContainer = document.getElementById('soal-detail');
            tampilkanSoal(soalDetailContainer, dataSoal);

        } catch (error) {
            console.error('Terjadi kesalahan saat mengambil data ujian:', error);
        }
    });


    function tampilkanSoal(container, soal) {
        let html = `
    <div class="bg-white border border-gray-200 p-4 rounded-md grid grid-cols-2">
        <div class="col-span-1">
            <div>
                <h2 class="text-lg font-semibold mb-4">SOAL</h2>
                <hr class="h-px mx-0 my-4 bg-black border-0 opacity-25 dark:opacity-50" />
            </div>
            <div class="col-span-1 flex">
                <div>
                    <h2 class="text-lg font-semibold mb-4">${soal.soal}</h2>
                    <form>
                        <div class="flex items-center mb-2">
                            <input type="radio" id="pilihan1" name="jawaban" value="A" class="mr-2">
                            <label for="pilihan1">${soal.pilihan1}</label>
                        </div>
                        <div class="flex items-center mb-2">
                            <input type="radio" id="pilihan2" name="jawaban" value="B" class="mr-2">
                            <label for="pilihan2">${soal.pilihan2}</label>
                        </div>
                        <div class="flex items-center mb-2">
                            <input type="radio" id="pilihan3" name="jawaban" value="C" class="mr-2">
                            <label for="pilihan3">${soal.pilihan3}</label>
                        </div>
                        <div class="flex items-center mb-2">
                            <input type="radio" id="pilihan4" name="jawaban" value="D" class="mr-2">
                            <label for="pilihan4">${soal.pilihan4}</label>
                        </div>
                    </form>
                </div>
                <div class="ml-auto">
                    ${soal.foto ? `<img class="w-auto h-28 rounded-md" src="${soal.foto}" alt="soal image" loading="lazy">` : ''}
                </div>
            </div>
        </div>
    </div>
    `;
        container.innerHTML = html;
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
</script>


@endsection
