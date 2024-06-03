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
            <p class="mb-0 dark:text-white/80">Tambah Semester Baru</p>
            <a type="button" class="inline-block px-8 py-2 mb-4 ml-auto font-bold leading-normal text-center text-white align-middle transition-all ease-in bg-blue-500 border-0 rounded-lg shadow-md cursor-pointer text-xs tracking-tight-rem hover:shadow-xs hover:-translate-y-px active:opacity-85" href="{{ url('semester') }}">Kembali</a>
          </div>
        </div>
        <div class="flex-auto p-6">
          <form id="addkurikulumForm">
            <button type="submit" class="inline-block px-8 py-2 mb-4 ml-auto font-bold leading-normal text-center text-white align-middle transition-all ease-in bg-blue-500 border-0 rounded-lg shadow-md cursor-pointer text-xs tracking-tight-rem hover:shadow-xs hover:-translate-y-px active:opacity-85">Tambah Kurikulum</button>
            <p class="leading-normal uppercase dark:text-white dark:opacity-60 text-sm">Tambah Kurikulum</p>
            <div class="flex flex-wrap -mx-3">
              <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                <div class="mb-4">
                  <label for="nama_kurikulum" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Nama Kurikulum</label>
                  <input type="text" id="nama_kurikulum" name="nama_kurikulum" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
                </div>
              </div>
              <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                <div class="mb-4">
                  <label for="tahun" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Tahun Kurikulum</label>
                  <input type="text" id="tahun" name="tahun" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
                </div>
              </div>
              <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                <div class="mb-4">
                  <label for="studi_ideal" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Masa Studi Ideal</label>
                  <input type="text" id="studi_ideal" name="studi_ideal" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
                </div>
              </div>
              <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                <div class="mb-4">
                  <label for="studi_maks" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Masa Studi Maksimum</label>
                  <input type="text" id="studi_maks" name="studi_maks" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
                </div>
              </div>
              <div class="w-full max-w-full px-3 shrink-0  md:flex-0">
                <div class="mb-4">
                  <label for="keterangan" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Keterangan</label>
                  <textarea type="text" id="keterangan" name="keterangan" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none"></textarea>
                </div>
              </div>

              <div class="w-full max-w-full px-3 shrink-0">
                <p class="leading-normal uppercase dark:text-white dark:opacity-60 text-sm mb-4">Keputusan Rektor</p>
                <div class="flex flex-wrap -mx-3">
                  <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                    <div class="mb-4">
                      <label for="nomor" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Nomor</label>
                      <input type="number" id="nomor" name="nomor" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
                    </div>
                  </div>
                  <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                    <div class="mb-4">
                      <label for="tanggal" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Tahun</label>
                      <input type="date" id="tanggal" name="tanggal" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
                    </div>
                  </div>
                </div>
              </div>
              <div class="w-full max-w-full px-3 shrink-0">
                <p class="leading-normal uppercase dark:text-white dark:opacity-60 text-sm mb-4">Waktu Disetujui</p>
                <div class="flex flex-wrap -mx-3">
                  <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                    <div class="mb-4">
                      <label for="pihak_acc" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Pihak yang Menyetujui</label>
                      <input type="text" id="pihak_acc" name="pihak_acc" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
                    </div>
                  </div>
                  <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                    <div class="mb-4">
                      <label for="tanggal_acc" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Tanggal disetujui</label>
                      <input type="date" id="tanggal_acc" name="tanggal_acc" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
                    </div>
                  </div>
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
  document.getElementById('addkurikulumForm').addEventListener('submit', function(e) {
    e.preventDefault();

    // Validasi data di sisi klien
    var nama_kurikulum = document.getElementById('nama_kurikulum').value;
    var tahun = document.getElementById('tahun').value;
    var nomor = document.getElementById('nomor').value;
    var tanggal = document.getElementById('tanggal').value;
    var pihak_acc = document.getElementById('pihak_acc').value;
    var tanggal_acc = document.getElementById('tanggal_acc').value;
    var studi_ideal = document.getElementById('studi_ideal').value;
    var studi_maks = document.getElementById('studi_maks').value;
    var keterangan = document.getElementById('keterangan').value;

    if (!nama_kurikulum || !tahun || !nomor || !tanggal || !pihak_acc || !tanggal_acc || !studi_ideal || !studi_maks || !keterangan) {
      Swal.fire({
        icon: 'error',
        title: 'Gagal',
        text: 'Semua field harus diisi.'
      });
      return;
    }

    var formData = {
      nama_kurikulum: nama_kurikulum,
      tahun: tahun,
      nomor: nomor,
      tanggal: tanggal,
      pihak_acc: pihak_acc,
      tanggal_acc: tanggal_acc,
      studi_ideal: studi_ideal,
      studi_maks: studi_maks,
      keterangan: keterangan,
    };

    axios.post('http://localhost:9000/api/kurikulum', formData)
      .then(function(response) {
        Swal.fire({
          icon: 'success',
          title: 'Berhasil',
          text: 'Kurikulum berhasil ditambahkan!'
        });
        // Reset form setelah berhasil menambahkan data
        document.getElementById('addkurikulumForm').reset();
      })
      .catch(function(error) {
        console.error('Error menambahkan kurikulum:', error);
        Swal.fire({
          icon: 'error',
          title: 'Gagal',
          text: 'Terjadi kesalahan saat menambahkan kurikulum.'
        });
      });
  });
</script>



@endsection
