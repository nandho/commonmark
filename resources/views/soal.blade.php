@extends('base')

@section('title', 'SIAKAD')

@section('content')
<div class="w-full p-6 mx-auto">
  <div class="flex flex-wrap -mx-3">
    <div class="w-full max-w-full px-3 shrink-0 md:w-8/12 md:flex-0">
      <div class="relative flex flex-col min-w-0 break-words bg-white border-0 shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
        <div class="border-black/12.5 rounded-t-2xl border-b-0 border-solid p-6 pb-0">
          <div class="flex items-center">
            <p class="mb-0 dark:text-white/80">Biodata</p>
            <a type="button" class="inline-block px-8 py-2 mb-4 ml-auto font-bold leading-normal text-center text-white align-middle transition-all ease-in bg-blue-500 border-0 rounded-lg shadow-md cursor-pointer text-xs tracking-tight-rem hover:shadow-xs hover:-translate-y-px active:opacity-85" href="{{ url('biodataedit') }}">Edit Data Diri</a>
          </div>
        </div>
        <div class="flex-auto p-6">
          <div class="block flex-wrap -mx-3">
            <div id="soal-detail">
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Data Sekolah -->
    <div class="w-full max-w-full px-3 mt-6 shrink-0 md:w-4/12 md:flex-0 md:mt-0">
      <div class="relative flex flex-col min-w-0 break-words bg-white border-0 shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
        <div class="flex-auto p-6 pt-0">
          <h5 id="namal" class="dark:text-white">Lembar Soal</h5>
          <div id="soal-container" class="mt-6 text-center">
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script>
  let userData;
  async function fetchUserData() {
    try {
      const token = document.cookie.split('; ').find(row => row.startsWith('token=')).split('=')[1];
      const config = {
        headers: {
          'Authorization': `Bearer ${token}`
        }
      };

      // Mengambil data pengguna dari API
      const response = await axios.get('http://localhost:9000/api/user', config);
      userData = response.data.data;
      console.log(userData);
    } catch (error) {
      console.error('Gagal mengambil data pengguna:', error);
    }
  }

  // Panggil fungsi untuk mengambil data pengguna saat halaman dimuat
  fetchUserData();
  // Ambil data soal dari API
  async function fetchSoal() {
    try {
      const response = await axios.get('http://localhost:9000/api/ujian');
      const data = response.data.data;
      console.log(data);
      return data;
    } catch (error) {
      console.error('Gagal mengambil data:', error);
      throw error;
    }
  }
  async function renderSoal() {
    const soalContainer = document.getElementById('soal-container');
    const soalDetailContainer = document.getElementById('soal-detail');
    const dataSoal = await fetchSoal(); // Tunggu hingga data soal tersedia
    let html = '';

    // Loop melalui setiap soal
    for (let i = 0; i < dataSoal.count; i++) {
      const soal = dataSoal[i];
      html += `
          <button class="button bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" value="${i}">
            ${i + 1}
          </button>
        `;
    }
    soalContainer.innerHTML = html;
    // Tampilkan soal nomor satu secara default
    tampilkanSoal(soalDetailContainer, dataSoal[0], 1);

    // Tambahkan event listener untuk setiap tombol
    const tombolSoal = document.querySelectorAll('.button');
    tombolSoal.forEach((tombol, index) => {
      tombol.addEventListener('click', () => {
        tampilkanSoal(soalDetailContainer, dataSoal[index], index + 1);
      });
    });
  }

  function tampilkanSoal(container, soal, nomorSoal) {
    let html = `
        <div>
          <div class="bg-white border border-gray-200 p-4 rounded-md">
            <h2 class="text-lg font-semibold mb-4">SOAL NO ${nomorSoal}</h2>
            <hr class="h-px mx-0 my-4 bg-black border-0 opacity-25 dark:opacity-50" />

            <h2 class="text-lg font-semibold mb-4">${soal.soal}</h2>
            <form>
              <div class="flex items-center mb-2">
                <input type="radio" id="pilihan1" name="jawaban" value="${soal.pilihan1}" class="mr-2">
                <label for="pilihan1">${soal.pilihan1}</label>
              </div>
              <div class="flex items-center mb-2">
                <input type="radio" id="pilihan2" name="jawaban" value="${soal.pilihan2}" class="mr-2">
                <label for="pilihan2">${soal.pilihan2}</label>
              </div>
              <div class="flex items-center mb-2">
                <input type="radio" id="pilihan3" name="jawaban" value="${soal.pilihan3}" class="mr-2">
                <label for="pilihan3">${soal.pilihan3}</label>
              </div>
              <div class="flex items-center mb-2">
                <input type="radio" id="pilihan4" name="jawaban" value="${soal.pilihan4}" class="mr-2">
                <label for="pilihan4">${soal.pilihan4}</label>
              </div>
            </form>
          </div>
        </div>
      `;
    container.innerHTML = html;
  }

  // Panggil fungsi renderSoal untuk menampilkan tombol nomor soal saat halaman dimuat
  renderSoal();


  async function submitJawaban() {
    try {
      const dataSoal = document.getElementById('soal-container').querySelectorAll('div');
      const jawaban = [];

      // Mengambil ID calon mahasiswa dari data pengguna
      const iduser = userData.data.id;
      // Loop melalui setiap div soal
      dataSoal.forEach((divSoal) => {
        const id = divSoal.id;
        const selectedOption = divSoal.querySelector('input:checked');
        if (selectedOption) {
          const id_soal = id;
          const id_calon_mahasiswa = iduser; // Menggunakan iduser sebagai id_calon_mahasiswa
          const selectedJawaban = selectedOption.value;
          // Tambahkan ke array jawaban
          jawaban.push({
            id_soal: id_soal,
            id_calon_mahasiswa: id_calon_mahasiswa,
            jawaban: selectedJawaban
          });
        }
      });

      // Pastikan jawaban tidak kosong
      if (jawaban.length === 0) {
        console.error('Tidak ada jawaban yang dipilih');
        return;
      }

      // Kirim jawaban ke server
      const response = await axios.post('http://localhost:9000/api/pmb/jawaban/', jawaban);
      console.log('Response:', response.data);
    } catch (error) {
      console.error('Gagal mengirim jawaban:', error);
    }
  }
</script>
@endsection