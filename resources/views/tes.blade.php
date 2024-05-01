@extends('base')

@section('title', 'SIAKAD')

@section('content')
<div class="w-full p-6 mx-auto">
  <div class="flex flex-wrap -mx-3">
    <div class="flex-none w-full max-w-full px-3">
      <div class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
        <div class="p-3 pb-0 mb-0 border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
          <h2>Data Mahasiswa</h2>
        </div>
        <div class="flex-auto px-4 pt-0 pb-2">
          <div class="p-0 overflow-x-auto">
            <table id="pmbTable" class="items-center w-full mb-0 align-top border-collapse dark:border-white/40 text-slate-500">
              <thead class="align-bottom">
                <tr>
                  <th class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Nama Lengkap</th>
                  <th class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">NIK</th>
                </tr>
              </thead>
              <tbody id="tableBody">
                <!-- Data will be populated here -->
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<script>
  async function getData() {
    try {
      const response = await axios.get('http://localhost:9000/api/pmb');
      const responseData = response.data;

      if (Array.isArray(responseData.data.data)) {
        const data = responseData.data.data; // Ambil array data dari respons API
        console.log(data);
        const tableBody = document.getElementById('tableBody');

        // Bersihkan isi tbody
        tableBody.innerHTML = '';

        // Iterasi melalui setiap objek data
        data.forEach(item => {
          // Buat baris baru untuk setiap objek data
          const row = document.createElement('tr');
          // Isi kolom nama lengkap
          const namaLengkapCell = document.createElement('td');
          namaLengkapCell.textContent = item.nama_lengkap;
          row.appendChild(namaLengkapCell);

          // Isi kolom NIK
          const nikCell = document.createElement('td');
          nikCell.textContent = item.nik;
          row.appendChild(nikCell);

          // Tambahkan baris ke dalam tbody
          tableBody.appendChild(row);
        });

        // Inisialisasi DataTables pada tabel
        $('#pmbTable').DataTable();
      } else {
        console.error('Data yang diterima bukanlah array.');
      }
    } catch (error) {
      console.error('Gagal mengambil data:', error);
    }
  }

  getData();
</script>

@endsection