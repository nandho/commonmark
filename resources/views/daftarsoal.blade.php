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

  #dosenTable {
    border-collapse: collapse;
    background: white;
    border-radius: 6px;
    overflow: hidden;
    width: 100%;
    position: relative;
    margin-bottom: 5%;
  }

  #dosenTable thead th {
    background-color: #65b8e0;
    color: white;
    font-weight: 700;
    padding: 0.75rem;
    text-align: left;
    height: 60px;
    font-size: 16px;
  }

  #dosenTable tbody td {
    background-color: white;
    padding: 0.75rem;
    border-bottom: 2px solid #f3f4f6;
    border-radius: 0.375rem;
  }

  #dosenTable tbody tr {
    height: 48px;
    border-bottom: 1px solid #E3F1D5;
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
    <div class="w-full max-w-full px-3 shrink-0 md:w-12 md:flex-0">
      <div class="relative flex flex-col min-w-0 break-words bg-white border-0 shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
        <div class="border-black/12.5 rounded-t-2xl border-b-0 border-solid p-6 pb-0">
          <div class="flex justify-between items-center mb-4">
            <h2 class="text-2xl font-bold dark:text-white">Daftar Soal</h2>
            <a href="{{ url('addsoal') }}" class="inline-block px-6 py-2 font-bold text-white bg-blue-500 rounded-lg hover:bg-blue-700">Tambah</a>
          </div>
          <div class="overflow-x-auto">
            <table id="dosenTable" class="display min-w-full divide-y divide-gray-200">
              <thead class="bg-gray-50">
                <tr>
                  <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">NIDN</th>
                  <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nama Lengkap</th>
                  <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Gelar</th>
                  <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Aksi</th>
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
</div>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
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
    $(document).ready(function() {
      var table = $('#dosenTable').DataTable({
        "paging": true,
        "searching": true,
        "ordering": true,
        "dom": "<'flex flex-row justify-between'<'flex flex-col'f><'flex flex-col'l>>" +
          "<'dt-table'rt>" +
          "<'flex flex-row justify-between'<'flex flex-col'i><'flex flex-col'p>>"
      });

      // Gunakan HTTPS untuk memanggil API
      axios.get('http://localhost:9000/api/dosen')
        .then(function(response) {
          if (response.data && Array.isArray(response.data.data)) {
            response.data.data.forEach(function(item) {
              // Membersihkan input sebelum menambahkan ke tabel
              var nidndosen = escapeHtml(item.nidn);
              var namaLengkap = escapeHtml(item.nama_lengkap);
              var gelarBelakang = escapeHtml(item.gelar_belakang);

              table.row.add([
                nidndosen,
                namaLengkap,
                gelarBelakang,
                // Menambahkan tombol details secara dinamis
                '<button class="details-btn" data-id="' + item.id + '">Details</button>'
              ]).draw();
            });
          } else {
            console.error('Struktur respons tidak sesuai dengan yang diharapkan');
          }
        })
        .catch(function(error) {
          console.error('Terjadi kesalahan saat mengambil data dosen:', error);
        });

      // Event listener untuk tombol details
      $('#dosenTable').on('click', '.details-btn', function() {
        var dosenId = $(this).data('id');
        // Redirect hanya jika dosenId ada
        if (dosenId) {
          window.location.href = '/dosen/' + dosenId;
        } else {
          console.error('ID dosen tidak valid');
        }
      });

      // Fungsi untuk membersihkan input dari karakter yang tidak aman
      function escapeHtml(unsafe) {
        // Cek apakah unsafe adalah string sebelum membersihkan
        if (typeof unsafe !== 'string') {
          return unsafe;
        }
        return unsafe.replace(/</g, "&lt;").replace(/>/g, "&gt;");
      }
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
  })
</script>


@endsection
