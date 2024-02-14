<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uji Pengambilan Data API dengan Axios</title>
    <!-- Tambahkan link untuk Alpine.js -->
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2"></script>
    <!-- Tambahkan link untuk Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100 py-8">
    <div class="max-w-md mx-auto bg-white rounded p-8 shadow-md">
        <h1 class="text-2xl font-bold mb-4">Uji Pengambilan Data API dengan Axios</h1>

        <!-- Form inputan untuk nama sekolah -->
        <div x-data="{ schoolName: '', schools: [], selectedSchool: '' }">
            <form class="mb-4">
                <div class="mb-4">
                    <label for="schoolName" class="block text-sm font-medium text-gray-700">Nama Sekolah:</label>
                    <input type="text" x-model="schoolName" id="schoolName" name="schoolName" required class="border border-gray-300 rounded-md px-4 py-2 w-full">
                </div>
            </form>

            <!-- Tampilkan kotak inputan jika data tidak ditemukan -->
            <div x-show="schools.length === 0 && schoolName !== ''" class="mb-4">
                <label for="manualInput" class="block text-sm font-medium text-gray-700 mb-2">Masukkan NPSN Sekolah:</label>
                <input type="text" x-model="selectedSchool" id="manualInput" name="manualInput" class="border border-gray-300 rounded-md px-4 py-2 w-full">
            </div>

            <!-- Dropdown untuk pilihan sekolah -->
            <div class="mb-4" x-show="schools.length > 0">
                <label for="selectedSchool" class="block text-sm font-medium text-gray-700 mb-2">Pilih Sekolah:</label>
                <select x-model="selectedSchool" id="selectedSchool" name="selectedSchool" class="border border-gray-300 rounded-md px-4 py-2 w-full">
                    <option value="" disabled selected>Pilih Sekolah</option>
                    <template x-for="school in schools" :key="school.npsn">
                        <option x-text="school.sekolah" :value="school.npsn"></option>
                    </template>
                </select>
            </div>
        </div>

        <!-- Tempat untuk menampilkan hasil -->
        <p id="result" class="text-gray-700"></p>
    </div>

    <!-- JavaScript untuk melakukan permintaan data ke API -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script>
        // Fungsi untuk mengambil data dari API
        async function fetchData(schoolName) {
            const apiUrl = 'https://api-sekolah-indonesia.vercel.app/sekolah/s?sekolah=' + encodeURIComponent(schoolName);

            try {
                // Melakukan permintaan GET ke API menggunakan Axios
                const response = await axios.get(apiUrl);

                // Menyaring dan menampilkan hanya NPSN dan nama sekolah
                const filteredData = response.data.dataSekolah.map(school => ({
                    npsn: school.npsn,
                    sekolah: school.sekolah
                }));

                // Mengisi data sekolah ke dalam dropdown
                document.querySelector('[x-data]').__x.$data.schools = filteredData;

                // Mengosongkan hasil jika ada
                document.getElementById('result').innerHTML = '';
            } catch (error) {
                // Menampilkan pesan "Data tidak ditemukan" jika terjadi kesalahan
                document.getElementById('result').innerHTML = 'Data tidak ditemukan';

                // Menyembunyikan dropdown jika data tidak ditemukan
                document.querySelector('[x-data]').__x.$data.schools = [];
            }
        }

        // Memanggil fungsi fetchData saat pengguna mengetikkan data
        document.getElementById('schoolName').addEventListener('input', function(event) {
            const schoolName = event.target.value.trim(); // Mendapatkan nilai dari input

            // Memanggil fetchData hanya jika ada nilai yang dimasukkan
            if (schoolName.length > 0) {
                fetchData(schoolName); // Panggil fungsi untuk mengambil data
            } else {
                // Mengosongkan dropdown jika input kosong
                document.querySelector('[x-data]').__x.$data.schools = [];
            }
        });

        // Memanggil fungsi fetchData saat pengguna memilih sekolah
        document.getElementById('selectedSchool').addEventListener('change', function(event) {
            const npsn = event.target.value;
            document.getElementById('result').innerText = 'Memilih sekolah dengan NPSN: ' + npsn;
        });
    </script>
</body>

</html>