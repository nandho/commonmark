@extends('base')

@section('title', 'SIAKAD')

@section('content')

<div class="w-full p-6 mx-auto">
  <h1>Ujian</h1>
  <div id="soal-container"></div>
  <button onclick="submitJawaban()">Submit Jawaban</button>
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
      return data;
    } catch (error) {
      console.error('Gagal mengambil data soal:', error);
      throw error;
    }
  }

  async function renderSoal() {
    try {
      const soalContainer = document.getElementById('soal-container');
      const dataSoal = await fetchSoal(); // Tunggu hingga data soal tersedia
      let html = '';

      // Loop melalui setiap soal
      for (const id in dataSoal) {
        if (id !== 'count') {
          const soal = dataSoal[id];
          html += `
          <div id="${soal.id}">
            <p>${soal.soal}</p>
            ${soal.foto ? `<img src="${soal.foto}" alt="Gambar Soal">` : ''}
            <input type="radio" name="jawaban-${soal.id}" value="A">${soal.pilihan1}<br>
            <input type="radio" name="jawaban-${soal.id}" value="B">${soal.pilihan2}<br>
            <input type="radio" name="jawaban-${soal.id}" value="C">${soal.pilihan3}<br>
            <input type="radio" name="jawaban-${soal.id}" value="D">${soal.pilihan4}<br>
          </div>
          <br>
        `;
        }
      }

      soalContainer.innerHTML = html;
    } catch (error) {
      console.error('Gagal menampilkan soal:', error);
    }
  }

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

  // Panggil fungsi renderSoal untuk menampilkan soal saat halaman dimuat
  renderSoal();
</script>

@endsection