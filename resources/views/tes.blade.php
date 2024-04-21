<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ujian</title>
</head>

<body>
  <h1>Ujian</h1>
  <div id="soal-container"></div>
  <button onclick="submitJawaban()">Submit Jawaban</button>

  <script>
    // Ambil data soal dari API
    async function fetchSoal() {
      const response = await fetch('http://localhost:9000/api/ujian');
      const data = await response.json();
      return data.data;
    }

    // Tampilkan soal
    async function renderSoal() {
      const soalContainer = document.getElementById('soal-container');
      const dataSoal = await fetchSoal();
      let html = '';

      // Loop melalui setiap soal
      for (let i = 0; i < dataSoal.count; i++) {
        const soal = dataSoal[i];
        html += `
          <div id="soal-${soal.id}">
            <p>${soal.soal}</p>
            ${soal.foto ? `<img src="${soal.foto}" alt="Gambar Soal">` : ''}
            <input type="radio" name="jawaban-${soal.id}" value="${soal.pilihan1}">${soal.pilihan1}<br>
            <input type="radio" name="jawaban-${soal.id}" value="${soal.pilihan2}">${soal.pilihan2}<br>
            <input type="radio" name="jawaban-${soal.id}" value="${soal.pilihan3}">${soal.pilihan3}<br>
            <input type="radio" name="jawaban-${soal.id}" value="${soal.pilihan4}">${soal.pilihan4}<br>
          </div>
          <br>
        `;
      }

      soalContainer.innerHTML = html;
    }

    // Submit jawaban
    function submitJawaban() {
      const dataSoal = document.getElementById('soal-container').querySelectorAll('div');
      const jawaban = {};

      // Loop melalui setiap div soal
      dataSoal.forEach((divSoal) => {
        const id = divSoal.id.split('-')[1];
        const selectedOption = divSoal.querySelector('input:checked');
        if (selectedOption) {
          jawaban[id] = selectedOption.value;
        }
      });

      // Kirim jawaban ke server
      console.log('Jawaban:', jawaban);
      // Lakukan request POST ke server dengan jawaban yang dikumpulkan
      // Contoh:
      // fetch('http://localhost:9000/api/submit-jawaban', {
      //   method: 'POST',
      //   body: JSON.stringify(jawaban),
      //   headers: {
      //     'Content-Type': 'application/json'
      //   }
      // })
      // .then(response => response.json())
      // .then(data => console.log(data))
      // .catch(error => console.error('Error:', error));
    }

    // Panggil fungsi renderSoal untuk menampilkan soal saat halaman dimuat
    renderSoal();
  </script>
</body>

</html>