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
            <p class="mb-0 dark:text-white/80">Perbaharui Jurusan</p>
            <a type="button" class="inline-block px-8 py-2 mb-4 ml-auto font-bold leading-normal text-center text-white align-middle transition-all ease-in bg-blue-500 border-0 rounded-lg shadow-md cursor-pointer text-xs tracking-tight-rem hover:shadow-xs hover:-translate-y-px active:opacity-85" href="{{ url('prodi') }}">Kembali</a>
          </div>
        </div>
        <div class="flex-auto p-6">
          <form id="editjurusanForm">
            <button type="submit" class="inline-block px-8 py-2 mb-4 ml-auto font-bold leading-normal text-center text-white align-middle transition-all ease-in bg-blue-500 border-0 rounded-lg shadow-md cursor-pointer text-xs tracking-tight-rem hover:shadow-xs hover:-translate-y-px active:opacity-85">Simpan</button>
            <p class="leading-normal uppercase dark:text-white dark:opacity-60 text-sm">Simpan</p>
            <div class="flex flex-wrap -mx-3">
              <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                <div class="mb-4">
                  <label for="kode_jurusan" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Kode Jurusan</label>
                  <input type="text" id="kode_jurusan" name="kode_jurusan" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
                </div>
              </div>
              <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                <div class="mb-4">
                  <label for="jurusan" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Nama Jurusan</label>
                  <input type="text" id="jurusan" name="jurusan" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
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
    const jurusanId = window.location.pathname.split('/').pop();

    axiosInstance.get(`/jurusan/${jurusanId}`)
      .then(response => {
        const jurusanData = response.data.data;
        // Tampilkan informasi dosen
        document.getElementById('kode_jurusan').value = jurusanData.kode_jurusan|| '-';
        document.getElementById('jurusan').value = jurusanData.jurusan || '-';
      })
      .catch(error => {
        console.error('Error fetching data:', error);
      });

    // Panggil event listener kedua di sini
    document.getElementById('editjurusanForm').addEventListener('submit', function(event) {
      event.preventDefault();
      const formData = new FormData(event.target);
      const formProps = Object.fromEntries(formData);
      const baseUrl = window.location.origin;
      const jurusanId = window.location.pathname.split('/').pop(); // Ambil ID dosen dari URL

      axiosInstance.put(`${baseUrl}/api/jurusan/${jurusanId}`, formProps)
        .then(response => {
          Swal.fire({
            icon: 'success',
            title: 'Berhasil',
            text: 'Data dosen berhasil diperbarui!',
            timer: 2000,
            showConfirmButton: false
          }).then(() => {
            window.location.href = `/prodi`; // Redirect ke halaman detail dosen
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
