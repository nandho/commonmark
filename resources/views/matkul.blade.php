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
      <h1>Matakuliah</h1>
      <button id="pilihKurikulumBtn">Pilih Kurikulum</button>
      <div id="selectedKurikulum">
        <!-- Kurikulum terpilih akan muncul di sini -->
      </div>
    </div>
  </div>
</div>


<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>

<script>
  document.getElementById('pilihKurikulumBtn').addEventListener('click', function() {
    window.location.href="{{ url('kurikulum') }}";
  });

  // Function to display selected kurikulum
  function displaySelectedKurikulum() {
    const selectedKurikulum = localStorage.getItem('selectedKurikulum');
    if (selectedKurikulum) {
      document.getElementById('selectedKurikulum').innerText = 'Kurikulum Terpilih: ' + selectedKurikulum;
    }
  }

  // Display selected kurikulum when page loads
  window.onload = displaySelectedKurikulum;
</script>


@endsection