@extends('base')

@section('title', 'SIAKAD')
@section('head')
<!-- Tempatkan impor CSS khusus untuk halaman ini di sini jika ada -->
<style>
  /* Atur ulang gaya default DataTables */
  .dataTables_wrapper {
    padding: 1rem;
  }

  .dataTables_wrapper .dataTables_length,
  .dataTables_wrapper .dataTables_filter {
    padding: 0.5rem;
  }



  /* Gaya tabel */
  #semesterTable {
    border-collapse: collapse;
    background: white;
    border-radius: 6px;
    overflow: hidden;
    width: 100%;
    /* margin: 0 auto; */
    position: relative;
    margin-bottom: 5%;
  }

  #semesterTable thead th {
    background-color: #65b8e0;
    color: white;
    font-weight: 700;
    padding: 0.75rem;
    text-align: left;
    height: 60px;
    font-size: 16px;

  }

  #semesterTable tbody td {
    background-color: white;
    padding: 0.75rem;
    border-bottom: 2px solid #f3f4f6;
    border-radius: 0.375rem;
  }

  #semesterTable tbody tr {
    height: 48px;
    border-bottom: 1px solid #E3F1D5;
  }

  /* Gaya untuk kontrol paginasi */
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

  /* Gaya untuk kotak pencarian */
  .dataTables_wrapper .dataTables_filter input {
    margin-left: 0.5rem;
    padding: 0.5rem;
    border-radius: 0.375rem;
    border: 1px solid #e2e8f0;
  }

  /* Gaya untuk dropdown 'Show entries' */
  .dataTables_wrapper .dataTables_length select {
    padding: 0.5rem;
    border-radius: 0.375rem;
    border: 1px solid #e2e8f0;
  }

  /* Gaya responsif untuk kontrol DataTables */
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
            <h2 class="text-2xl font-bold dark:text-white">Data Semester</h2>
            <a href="{{ url('biodata') }}" class="inline-block px-6 py-2 font-bold text-white bg-blue-500 rounded-lg hover:bg-blue-700">Kembali</a>
          </div>
          <div class="overflow-x-auto">


            <table id="semesterTable" class="display min-w-full divide-y divide-gray-200">
              <thead class="bg-gray-50">
                <tr>
                  <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">ID</th>
                  <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nama Semester</th>
                  <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Tanggal Mulai</th>
                  <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Tanggal Selesai</th>
                  <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
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
<script>
  $(document).ready(function() {
    var table = $('#semesterTable').DataTable({
      "paging": true,
      "searching": true,
      "ordering": true,
      "dom": "<'flex flex-row justify-between'<'flex flex-col'f><'flex flex-col'l>>" +
        "<'dt-table'rt>" +
        "<'flex flex-row justify-between'<'flex flex-col'i><'flex flex-col'p>>"
    });

    axios.get('http://localhost:9000/api/Semester')
      .then(function(response) {
        response.data.forEach(function(item) {
          var statusButtonText = item.status === 'aktif' ? 'Nonaktifkan' : 'Aktifkan';
          var rowNode = table.row.add([
            item.id,
            item.nama_semester,
            item.tanggal_mulai,
            item.tanggal_selesai,
            item.status,
            '<button class="px-4 py-2 text-white bg-blue-500 rounded-lg hover:bg-blue-700 details-btn" data-id="' + item.id + '">Details</button>' +
            '<button class="px-4 py-2 text-white bg-blue-500 rounded-lg hover:bg-green-700 status-btn" data-id="' + item.id + '">' + statusButtonText + '</button>'
          ]).draw().node();

          $(rowNode).find('.details-btn').on('click', function(e) {
            e.preventDefault();
            var semesterId = $(this).data('id');
            window.location.href = '/semester/' + semesterId;
          });

          $(rowNode).find('.status-btn').on('click', function(e) {
            e.preventDefault();
            var semesterId = $(this).data('id');
            axios.patch('http://localhost:9000/api/Semester/' + semesterId, {
                status: item.status === 'Aktif' ? 'Non-Aktif' : 'Aktif'
              })
              .then(function(response) {
                console.log(response.data);
                location.reload(); // Refresh halaman untuk menampilkan status terbaru
              })
              .catch(function(error) {
                console.error(error);
              });
          });
        });
      })
      .catch(function(error) {
        console.error(error);
      });
  });
</script>


@endsection