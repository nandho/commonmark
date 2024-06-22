@extends('base')

@section('title', 'SIAKAD')

@section('content')
<div class="w-full p-6 mx-auto">
    <div class="flex flex-wrap -mx-3">
        <div class="w-full max-w-full px-3 shrink-0 md:w-8/12 md:flex-0">
            <div class="relative flex flex-col min-w-0 break-words bg-white border-0 shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
                <div class="border-black/12.5 rounded-t-2xl border-b-0 border-solid p-6 pb-0">
                    <div class="flex items-center">
                        <p class="mb-0 dark:text-white/80">Soal Ujian</p>
                        <div id="timer" class="inline-block px-8 py-2 mb-4 ml-auto font-bold leading-normal text-center text-white align-middle transition-all ease-in bg-blue-500 border-0 rounded-lg shadow-md cursor-pointer text-xs tracking-tight-rem hover:shadow-xs hover:-translate-y-px active:opacity-85"></div>
                    </div>
                </div>
                <div class="flex-auto p-6">
                    <div class="block flex-wrap -mx-3">
                        <div id="soal-detail">
                        </div>
                        <br>
                        <button id="previous-button" class="inline-block px-8 py-2 mb-4 ml-auto font-bold leading-normal text-center text-white align-middle transition-all ease-in bg-blue-500 border-0 rounded-lg shadow-md cursor-pointer text-xs tracking-tight-rem hover:shadow-xs hover:-translate-y-px active:opacity-85">Sebelumnya</button>
                        <button id="next-button" class="inline-block px-8 py-2 mb-4 ml-auto font-bold leading-normal text-center text-white align-middle transition-all ease-in bg-blue-500 border-0 rounded-lg shadow-md cursor-pointer text-xs tracking-tight-rem hover:shadow-xs hover:-translate-y-px active:opacity-85">Selanjutnya</button>
                        <button id="submit-button" class="inline-block px-8 py-2 mb-4 ml-auto font-bold leading-normal text-center text-white align-middle transition-all ease-in bg-blue-500 border-0 rounded-lg shadow-md cursor-pointer text-xs tracking-tight-rem hover:shadow-xs hover:-translate-y-px active:opacity-85">Submit Jawaban</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="w-full max-w-full px-3 mt-6 shrink-0 md:w-4/12 md:flex-0 md:mt-0">
            <div class="relative flex flex-col min-w-0 break-words bg-white border-0 shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
                <div class="flex-auto p-6 pt-0">
                    <div class="mt-6 text-center">
                        <h5 id="namal" class="dark:text-white">Lembar Soal</h5>
                    </div>

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
    // Variabel global untuk menyimpan jawaban sementara
    let jawabanSementara = {};

    // Fungsi untuk mengambil data soal dari API
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

    // Fungsi untuk menampilkan soal pada detail container
    // Fungsi untuk menampilkan soal pada detail container
    function tampilkanSoal(container, soal, nomorSoal) {
        let html = `
    <div class="bg-white border border-gray-200 p-4 rounded-md grid grid-cols-2">
    <div class="col-span-1">
        <div>
            <h2 class="text-lg font-semibold mb-4">SOAL NO ${nomorSoal}</h2>
            <hr class="h-px mx-0 my-4 bg-black border-0 opacity-25 dark:opacity-50" />
        </div>
        <div class="col-span-1 flex">
            <div>
                <h2 class="text-lg font-semibold mb-4">${soal.soal}</h2>
                <form>
                    <div class="flex items-center mb-2">
                        <input type="radio" id="pilihan1" name="jawaban" value="A" class="mr-2">
                        <label for="pilihan1">${soal.pilihan1}</label>
                    </div>
                    <div class="flex items-center mb-2">
                        <input type="radio" id="pilihan2" name="jawaban" value="B" class="mr-2">
                        <label for="pilihan2">${soal.pilihan2}</label>
                    </div>
                    <div class="flex items-center mb-2">
                        <input type="radio" id="pilihan3" name="jawaban" value="C" class="mr-2">
                        <label for="pilihan3">${soal.pilihan3}</label>
                    </div>
                    <div class="flex items-center mb-2">
                        <input type="radio" id="pilihan4" name="jawaban" value="D" class="mr-2">
                        <label for="pilihan4">${soal.pilihan4}</label>
                    </div>
                </form>
            </div>
            <div class="ml-auto">
            ${soal.foto ? `<img class=" h-auto max-w-full rounded-lg" src="${soal.foto}" alt="soal image" loading="lazy">` : ''}
            </div>

        </div>
    </div>
</div>
    `;
        container.innerHTML = html;

        // Memeriksa apakah jawaban untuk nomor soal ini sudah tersimpan
        if (jawabanSementara[nomorSoal]) {
            const selectedRadio = document.querySelector(`input[name="jawaban"][value="${jawabanSementara[nomorSoal].jawaban}"]`);
            if (selectedRadio) {
                selectedRadio.checked = true;
            }
        }

        // Menambahkan event listener untuk setiap pilihan jawaban
        const radioButtons = document.querySelectorAll('input[name="jawaban"]');
        radioButtons.forEach(radio => {
            radio.addEventListener('change', () => {
                jawabanSementara[nomorSoal] = {
                    id_soal: soal.id, // Menyimpan ID soal
                    id_calon_mahasiswa: userData.data.id, // Menyimpan ID calon mahasiswa
                    jawaban: radio.value // Menyimpan jawaban yang dipilih
                };
                console.log(jawabanSementara);
            });
        });
    }


    // Fungsi untuk merender tombol nomor soal dan detail soal
    async function renderSoal() {
        const soalContainer = document.getElementById('soal-container');
        const soalDetailContainer = document.getElementById('soal-detail');
        const dataSoal = await fetchSoal(); // Tunggu hingga data soal tersedia
        let html = '';

        // Tampilkan soal nomor satu secara default
        tampilkanSoal(soalDetailContainer, dataSoal[0], 1);

        // Loop melalui setiap soal
        for (let i = 0; i < dataSoal.count; i++) {
            html += `
          <button class="button bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" value="${i}">
              ${i + 1}
          </button>
      `;
        }
        soalContainer.innerHTML = html;

        // Tandai tombol nomor soal pertama sebagai aktif
        const tombolSoal = document.querySelectorAll('.button');
        tombolSoal[0].setAttribute('data-active', 'true');

        // Tambahkan event listener untuk setiap tombol nomor soal
        tombolSoal.forEach((tombol, index) => {
            tombol.addEventListener('click', () => {
                // Hapus atribut data-active dari tombol sebelumnya
                const activeButton = document.querySelector('.button[data-active="true"]');
                if (activeButton) {
                    activeButton.removeAttribute('data-active');
                }
                // Tandai tombol yang diklik sebagai aktif
                tombol.setAttribute('data-active', 'true');
                tampilkanSoal(soalDetailContainer, dataSoal[index], index + 1);
            });
        });

        // Tambahkan event listener untuk tombol "Selanjutnya"
        const nextButton = document.getElementById('next-button');
        nextButton.addEventListener('click', () => {
            const activeButton = document.querySelector('.button[data-active="true"]');
            const nextButtonIndex = parseInt(activeButton.value) + 1;
            if (nextButtonIndex < tombolSoal.length) {
                // Klik tombol selanjutnya secara programatik
                tombolSoal[nextButtonIndex].click();
            }
        });

        // Tambahkan event listener untuk tombol "Sebelumnya"
        const previousButton = document.getElementById('previous-button');
        previousButton.addEventListener('click', () => {
            const activeButton = document.querySelector('.button[data-active="true"]');
            const previousButtonIndex = parseInt(activeButton.value) - 1;
            if (previousButtonIndex >= 0) {
                // Klik tombol sebelumnya secara programatik
                tombolSoal[previousButtonIndex].click();
            }
        });

        // Tampilkan tombol "Submit Jawaban" hanya pada soal terakhir
        const submitButton = document.getElementById('submit-button');
        if (tombolSoal.length === 1) {
            // Jika hanya ada satu soal, tampilkan tombol "Submit Jawaban"
            submitButton.style.display = 'inline-block';
        } else {
            // Jika lebih dari satu soal, tampilkan tombol "Submit Jawaban" pada soal terakhir
            submitButton.style.display = 'none';
            tombolSoal[tombolSoal.length - 1].classList.add('last-soal');
            tombolSoal[tombolSoal.length - 1].addEventListener('click', () => {
                submitButton.style.display = 'inline-block';
            });
        }

        // Mulai timer
        let startTime = new Date();
        let timer = setInterval(() => {
            let now = new Date();
            let elapsedTime = now - startTime; // Waktu dalam milidetik
            let remainingTime = 2 * 60 * 60 * 1000 - elapsedTime; // Waktu tersisa dalam milidetik
            if (remainingTime <= 0) {
                clearInterval(timer);
                submitJawaban();
            } else {
                let hours = Math.floor(remainingTime / (1000 * 60 * 60));
                let minutes = Math.floor((remainingTime % (1000 * 60 * 60)) / (1000 * 60));
                let seconds = Math.floor((remainingTime % (1000 * 60)) / 1000);
                document.getElementById('timer').innerText = `Waktu Tersisa: ${hours} jam ${minutes} menit ${seconds} detik`;
            }
        }, 1000); // Cek setiap detik
    }



    // Fungsi untuk mengirim jawaban ke server
    async function submitJawaban() {
        try {
            const jawaban = Object.values(jawabanSementara); // Ambil nilai jawaban dari objek jawabanSementara

            // Kirim jawaban ke server dalam format JSON
            const response = await axios.post('http://localhost:9000/api/pmb/jawaban/', JSON.stringify(jawaban), {
                headers: {
                    'Content-Type': 'application/json'
                }
            });
            console.log('Response:', response.data);
        } catch (error) {
            console.error('Gagal mengirim jawaban:', error);
        }
    }

    // Panggil fungsi renderSoal untuk menampilkan tombol nomor soal saat halaman dimuat
    renderSoal();

    // Panggil fungsi submitJawaban ketika tombol submit diklik
    document.getElementById('submit-button').addEventListener('click', submitJawaban);
</script>

@endsection
