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
<!-- <div class="w-full p-6 mx-auto">
  <div class="flex flex-wrap -mx-3">
    <div class="w-full max-w-full px-3 shrink-0 md:w-12 md:flex-0">
      <h1>Daftar Kurikulum</h1>
      <form id="kurikulumForm">
        <input type="checkbox" name="kurikulum" value="Kurikulum 1"> Kurikulum 1<br>
        <input type="checkbox" name="kurikulum" value="Kurikulum 2"> Kurikulum 2<br>
        <input type="checkbox" name="kurikulum" value="Kurikulum 3"> Kurikulum 3<br>
        <button type="button" id="simpanKurikulumBtn">Simpan</button>
      </form>
    </div>
  </div>
</div> -->
<div class="w-full p-6 mx-auto">
  <div class="flex flex-wrap -mx-3">
    <div class="w-full max-w-full px-3 shrink-0  md:flex-0">
      <div class="relative flex flex-col min-w-0 break-words bg-white border-0 shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
        <div class="border-black/12.5 rounded-t-2xl border-b-0 border-solid p-6 pb-0">
          <div class="flex items-center">
            <p class="mb-0 dark:text-white/80">Daftar Kurikulum</p>
            <a type="button" class="inline-block px-8 py-2 mb-4 ml-auto font-bold leading-normal text-center text-white align-middle transition-all ease-in bg-blue-500 border-0 rounded-lg shadow-md cursor-pointer text-xs tracking-tight-rem hover:shadow-xs hover:-translate-y-px active:opacity-85" href="{{ url('semester') }}">Kembali</a>
          </div>
        </div>
        <div class="flex-auto p-6">
          <form id="kurikulumForm">
            <button type="button" id="simpanKurikulumBtn" class="inline-block px-8 py-2 mb-4 ml-auto font-bold leading-normal text-center text-white align-middle transition-all ease-in bg-blue-500 border-0 rounded-lg shadow-md cursor-pointer text-xs tracking-tight-rem hover:shadow-xs hover:-translate-y-px active:opacity-85">Simpan</button>
            <p class="leading-normal uppercase dark:text-white dark:opacity-60 text-sm">Tambah Semester</p>
            <div class="flex flex-wrap -mx-3">
              
              <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                <div class="mb-4">
                  <label for="nama_semester" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Nama Semester</label>
                  <input type="text" id="nama_semester" name="nama_semester" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
                </div>
              </div>
              <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                <div class="mb-4">
                  <label for="tanggal_mulai" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Tanggal Mulai</label>
                  <input type="date" id="tanggal_mulai" name="tanggal_mulai" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
                </div>
              </div>
              <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                <div class="mb-4">
                  <label for="tanggal_selesai" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Tanggal Selesai</label>
                  <input type="date" id="tanggal_selesai" name="tanggal_selesai" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
                </div>
              </div>
              <div>
                <label for="status" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Status</label>
                <select id="status" name="status" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" required>
                  <option value="Aktif">Aktif</option>
                  <option value="Nonaktif">Nonaktif</option>
                </select>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>

<script>
  document.getElementById('simpanKurikulumBtn').addEventListener('click', function() {
    const form = document.getElementById('kurikulumForm');
    const selectedKurikulum = Array.from(form.kurikulum)
      .filter(checkbox => checkbox.checked)
      .map(checkbox => checkbox.value)
      .join(', ');

    localStorage.setItem('selectedKurikulum', selectedKurikulum);
    window.location.href = "{{ url('matkul') }}";
  });
</script>


@endsection