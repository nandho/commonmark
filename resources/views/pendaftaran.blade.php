<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PMB Akprada</title>
    <!-- @vite('resources/css/app.css') -->
    <link rel="stylesheet" href="../css/tailwind.output.css">
    <!-- @vite('resources/js/app.js') -->
    <!-- Alpine.js (required for Select2 with Alpine) -->
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2"></script>

</head>

<body>
    <div class="flex h-screen bg-gray-50 light:bg-gray-900" :class="{ 'overflow-hidden': isSideMenuOpen }">
        <div class="flex flex-col flex-1">
            <nav class="bg-white border-gray-200 light:bg-gray-900">
                <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
                    <div class="flex items-center space-x-3 rtl:space-x-reverse">
                        <a href="https://flowbite.com/" class="flex items-center space-x-3">
                            <img src="{{ asset('storage/images/akprada-header.png') }}" class="object-cover h-14 w-auto md:h-20" alt="Flowbite Logo">
                        </a>
                        <div id="hideOnSmallScreen">
                            <span class="text-lg md:text-2xl font-semibold whitespace-nowrap light:text-white">Akademi
                                Pariwisata</span>
                            <br>
                            <span class="text-base md:text-lg font-semibold whitespace-nowrap light:text-white">Dharma
                                Nusantara Sakti </span>
                            <br>
                            <span class="text-base md:text-lg font-semibold whitespace-nowrap light:text-white">Yogyakarta</span>
                        </div>
                    </div>
                    <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 light:text-gray-400 light:hover:bg-gray-700 light:focus:ring-gray-600" aria-controls="navbar-default" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15" />
                        </svg>
                    </button>

                    <div class="w-full md:block md:w-auto hidden" id="navbar-default">
                        <ul class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 md:bg-white light:bg-gray-800 md:light:bg-gray-900 light:border-gray-700">
                            <li>
                                <a href="#" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 light:text-white md:light:hover:text-blue-500 light:hover:bg-gray-700 light:hover:text-white md:light:hover:bg-transparent">About</a>
                            </li>
                            <li>
                                <a href="#" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 light:text-white md:light:hover:text-blue-500 light:hover:bg-gray-700 light:hover:text-white md:light:hover:bg-transparent">Services</a>
                            </li>
                            <li>
                                <a href="#" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 light:text-white md:light:hover:text-blue-500 light:hover:bg-gray-700 light:hover:text-white md:light:hover:bg-transparent">Pricing</a>
                            </li>
                            <li>
                                <a href="#" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 light:text-white md:light:hover:text-blue-500 light:hover:bg-gray-700 light:hover:text-white md:light:hover:bg-transparent">Contact</a>
                            </li>
                            <li>
                                <a href="/login" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 light:text-white md:light:hover:text-blue-500 light:hover:bg-gray-700 light:hover:text-white md:light:hover:bg-transparent">Login</a>
                            </li>
                        </ul>
                    </div>
                    <div id="navdesktop" class="hidden md:block md:w-auto"> <!-- Tambahkan class 'hidden' untuk menyembunyikan menu desktop pada tampilan mobile -->
                        <ul class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 md:bg-white light:bg-gray-800 md:light:bg-gray-900 light:border-gray-700">
                            <li>
                                <a href="#" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 light:text-white md:light:hover:text-blue-500 light:hover:bg-gray-700 light:hover:text-white md:light:hover:bg-transparent">About</a>
                            </li>
                            <li>
                                <a href="#" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 light:text-white md:light:hover:text-blue-500 light:hover:bg-gray-700 light:hover:text-white md:light:hover:bg-transparent">Services</a>
                            </li>
                            <li>
                                <a href="#" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 light:text-white md:light:hover:text-blue-500 light:hover:bg-gray-700 light:hover:text-white md:light:hover:bg-transparent">Pricing</a>
                            </li>
                            <li>
                                <a href="#" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 light:text-white md:light:hover:text-blue-500 light:hover:bg-gray-700 light:hover:text-white md:light:hover:bg-transparent">Contact</a>
                            </li>
                            <li>
                                <a href="/login" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 light:text-white md:light:hover:text-blue-500 light:hover:bg-gray-700 light:hover:text-white md:light:hover:bg-transparent">Login</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <br>
            <main class="h-full pb-16 overflow-y-auto">
                <div class="container px-6 mx-auto grid">
                    <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md light:bg-gray-800">
                        <div class="container mx-auto px-4 md:px-6">
                            <div class="flex items-center justify-between p-4 mb-8 font-semibold text-purple-100 bg-purple-600 rounded-lg shadow-md focus:outline-none focus:shadow-outline-purple">
                                <div class="flex items-center">
                                    <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                        </path>
                                    </svg>
                                    <h1 class="text-2xl">Formulir Pendaftaran</h1>
                                </div>
                            </div>
                        </div>
                        <!-- Form inputan untuk nama sekolah -->
                        <div class="container mx-auto px-4 md:px-6" x-data="{ schoolName: '', schools: [], NamaL : [], NIK:[], NISN:[],jk : [],HP : [], email : [],selectedSchool: '', selectedProvince: '', selectedCity: '', provinces: [], cities: [],selectedType: '',jurusan:[], lulus:[],NamaW:[], NIKW:[], NOHPW:[]  }">
                            <form class="mb-4" id="schoolForm">
                                <div class="container mx-auto px-4 md:px-6">
                                    <div class="p-4 mb-4 text-sm text-blue-800 rounded-lg bg-blue-50 light:bg-gray-800 light:text-blue-400" role="alert">
                                        <span class="font-medium">Lengkapi Datamu Sekarang. <br></span>Jangan sampai
                                        kehabisan kuota! Sedikit lagi kamu akan terdaftar di perguruan tinggi impianmu.
                                    </div>
                                </div>
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                    <div x-model="NamaL" class="container mx-auto px-4 md:px-6">
                                        <label for="NamaL" class="block text-sm font-medium text-gray-700 mb-2">Nama Lengkap: <span class="text-red-500">*</span></label>
                                        <input type="text" x-model="NamaL" id="NamaL" name="NamaL" class="border border-gray-300 rounded-md px-4 py-2 w-full" placeholder="Isikan Nama Lengkap Anda">

                                    </div>
                                    <div x-model="NIK" class="container mx-auto px-4 md:px-6">
                                        <label for="NIK" class="block text-sm font-medium text-gray-700 mb-2">NIK: <span class="text-red-500">*</span></label>
                                        <input type="nomor" x-model="NIK" id="NIK" name="NIK" class="border border-gray-300 rounded-md px-4 py-2 w-full" placeholder="Isikan NIK Anda">

                                    </div>
                                    <div x-model="NISN" class="container mx-auto px-4 md:px-6">
                                        <label for="NISN" class="block text-sm font-medium text-gray-700 mb-2">NISN: <span class="text-red-500">*</span></label>
                                        <input type="nomor" x-model="NISN" id="NISN" name="NISN" class="border border-gray-300 rounded-md px-4 py-2 w-full" placeholder="Isikan NISN Anda">

                                    </div>
                                    <div class="container mx-auto px-4 md:px-6">
                                        <span class="block mb-2 text-sm font-medium text-gray-900 light:text-white">
                                            Jenis Kelamin <span class="text-red-500">*</span>
                                        </span>
                                        <div x-model="jk" id="jk" name="jk" class="mt-2">
                                            <label class="inline-flex items-center text-gray-900 light:text-white">
                                                <input type="radio" class="text-purple-600 form-radio focus:border-purple-400 focus:outline-none focus:shadow-outline-purple light:focus:shadow-outline-gray" name="jenis_kelamin" value="Laki-Laki" />
                                                <span class="ml-2">Laki-Laki</span>
                                            </label>
                                            <label class="inline-flex items-center ml-6 text-gray-900 light:text-white">
                                                <input type="radio" class="text-purple-600 form-radio focus:border-purple-400 focus:outline-none focus:shadow-outline-purple light:focus:shadow-outline-gray" name="jenis_kelamin" value="Perempuan" />
                                                <span class="ml-2">Perempuan</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div x-model="HP" class="container mx-auto px-4 md:px-6">
                                        <label for="HP" class="block text-sm font-medium text-gray-700 mb-2">No. HP: <span class="text-red-500">*</span></label>
                                        <input type="nomor" x-model="HP" id="HP" name="HP" class="border border-gray-300 rounded-md px-4 py-2 w-full" placeholder="082xxxxxxxxx">
                                    </div>
                                    <div x-model="email" class="container mx-auto px-4 md:px-6">
                                        <label for="email" class="block text-sm font-medium text-gray-700 mb-2">E-mail: <span class="text-red-500">*</span></label>
                                        <input type="email" x-model="email" id="email" name="email" class="border border-gray-300 rounded-md px-4 py-2 w-full" placeholder="example@domaian.com">
                                    </div>
                                    <!-- Dropdown untuk pilihan provinsi -->
                                    <div class="container mx-auto px-4 md:px-6">
                                        <label for="selectedProvince" class="block text-sm font-medium text-gray-700">Provinsi: <span class="text-red-500">*</span></label>
                                        <select x-model="selectedProvince" id="selectedProvince" name="selectedProvince" class="border border-gray-300 rounded-md px-4 py-2 w-full">
                                            <option value="" selected>Pilih Provinsi</option>
                                            <template x-for="province in provinces" :key="province.id">
                                                <option x-text="province.name" :value="province.id"></option>
                                            </template>
                                        </select>
                                    </div>
                                    <!-- Dropdown untuk pilihan kabupaten/kota -->
                                    <div class="container mx-auto px-4 md:px-6">
                                        <label for="selectedCity" class="block text-sm font-medium text-gray-700">Kabupaten/Kota: <span class="text-red-500">*</span></label>
                                        <select x-model="selectedCity" id="selectedCity" name="selectedCity" class="border border-gray-300 rounded-md px-4 py-2 w-full">
                                            <option value="" selected>Pilih Kabupaten / Kota</option>
                                            <template x-for="city in cities" :key="city.id">
                                                <option x-text="city.name" :value="city.id"></option>
                                            </template>
                                        </select>
                                    </div>
                                </div>
                                <br>
                                <div class="container mx-auto px-4 md:px-6">
                                    <div class="p-4 mb-4 text-sm text-blue-800 rounded-lg bg-blue-50 light:bg-gray-800 light:text-blue-400" role="alert">
                                        <span class="font-medium">Asal Sekolah. <br></span>
                                    </div>
                                </div>
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                    <div class="container mx-auto px-4 md:px-6">
                                        <label for="schoolName" class="block text-sm font-medium text-gray-700">Nama Sekolah: <span class="text-red-500">*</span></label>
                                        <input type="text" x-model="schoolName" id="schoolName" name="schoolName" required class="border border-gray-300 rounded-md px-4 py-2 w-full" placeholder="Masukan Nama Sekolah Dengan Lengkap">
                                        <!-- Tempat untuk menampilkan hasil -->
                                        <p id="result" class="text-gray-700"></p>
                                        <!-- Tampilkan kotak inputan jika data tidak ditemukan -->
                                        <div x-show="schools.length === 0 && schoolName !== ''" class="mb-4">
                                            <label for="manualInput" class="block text-sm font-medium text-gray-700 mb-2">Masukkan Nama Sekolah:</label>
                                            <input type="text" x-model="selectedSchool" id="manualInput" name="manualInput" class="border border-gray-300 rounded-md px-4 py-2 w-full">
                                        </div>
                                        <!-- Dropdown untuk pilihan sekolah -->
                                        <div class="mb-4" x-show="schools.length > 0">
                                            <label for="selectedSchool" class="block text-sm font-medium text-gray-700 mb-2">Pilih Sekolah: <span class="text-red-500">*</span></label>
                                            <select x-model="selectedSchool" id="selectedSchool" name="selectedSchool" class="border border-gray-300 rounded-md px-4 py-2 w-full">
                                                <option value="" disabled selected>Pilih Sekolah</option>
                                                <template x-for="school in schools" :key="school.npsn">
                                                    <option x-text="`${school.npsn} - ${school.sekolah}`" :value="`${school.npsn}:${school.sekolah}`"></option>
                                                </template>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="container mx-auto px-4 md:px-6">
                                        <label for="schoolType" class="block text-sm font-medium text-gray-700 mb-2">Jenis Sekolah: <span class="text-red-500">*</span></label>
                                        <select x-model="selectedType" id="selectedType" name="schoolType" class="border border-gray-300 rounded-md px-4 py-2 w-full">
                                            <option value="" selected>Pilih Jenis Sekolah</option>
                                            <option value="SMA">SMA</option>
                                            <option value="SMK">SMK</option>
                                            <option value="MAN">MAN </option>
                                            <option value="SMKS">SMKS </option>
                                            <option value="Paket C">Paket C</option>
                                        </select>
                                    </div>
                                    <div x-model="jurusan" class="container mx-auto px-4 md:px-6">
                                        <label for="jurusan" class="block text-sm font-medium text-gray-700 mb-2">Jurusan Sekolah (Cth: IPA, IPS): <span class="text-red-500">*</span></label>
                                        <input type="text" x-model="jurusan" id="jurusan" name="jurusan" class="border border-gray-300 rounded-md px-4 py-2 w-full" placeholder="Isi Jurusan Anda">
                                    </div>
                                    <div x-model="lulus" class="container mx-auto px-4 md:px-6">
                                        <label for="lulus" class="block text-sm font-medium text-gray-700 mb-2">Tahun Lulus (Cth: 2023): <span class="text-red-500">*</span></label>
                                        <input type="text" x-model="lulus" id="lulus" name="lulus" class="border border-gray-300 rounded-md px-4 py-2 w-full" placeholder="Isi Tahun Lulus">
                                    </div>
                                </div>
                                <br>
                                <div class="container mx-auto px-4 md:px-6">
                                    <div class="p-4 mb-4 text-sm text-blue-800 rounded-lg bg-blue-50 light:bg-gray-800 light:text-blue-400" role="alert">
                                        <span class="font-medium">Data Lainnya. <br></span>
                                    </div>
                                </div>
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                    <div class="container mx-auto px-4 md:px-6">
                                        <label for="schoolType" class="block text-sm font-medium text-gray-700 mb-2">Progam Studi: <span class="text-red-500">*</span></label>
                                        <select x-model="selectedType" id="selectedType" name="schoolType" class="border border-gray-300 rounded-md px-4 py-2 w-full">
                                            <option value="" selected>Pilih Program Studi</option>
                                            <option value="D3 perhotelan">D3 - Perhotelan</option>
                                        </select>
                                    </div>
                                    <div x-model="NamaW" class="container mx-auto px-4 md:px-6">
                                        <label for="NamaW" class="block text-sm font-medium text-gray-700 mb-2">Nama Orang Tua/ Wali: <span class="text-red-500">*</span></label>
                                        <input type="text" x-model="NamaW" id="NamaW" name="NamaW" class="border border-gray-300 rounded-md px-4 py-2 w-full" placeholder="Isi Jurusan Anda">
                                    </div>
                                    <div x-model="NOHPW" class="container mx-auto px-4 md:px-6">
                                        <label for="NOHPW" class="block text-sm font-medium text-gray-700 mb-2">No. HP Orang Tua / Wali: <span class="text-red-500">*</span></label>
                                        <input type="nomor" x-model="NOHPW" id="NOHPW" name="NOHPW" class="border border-gray-300 rounded-md px-4 py-2 w-full" placeholder="082xxxxxxxxx">

                                    </div>
                                    <div x-model="NIKW" class="container mx-auto px-4 md:px-6">
                                        <label for="NIKW" class="block text-sm font-medium text-gray-700 mb-2">NIK Orang Tua / Wali: <span class="text-red-500">*</span></label>
                                        <input type="nomor" x-model="NIKW" id="NIKW" name="NIKW" class="border border-gray-300 rounded-md px-4 py-2 w-full" placeholder="Isi NIK Orang Tua/Wali">

                                    </div>
                                </div>
                                <br>
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 justify-end">
                                    <div class="container mx-auto px-4 md:px-6">
                                        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center light:bg-blue-600 light:hover:bg-blue-700 light:focus:ring-blue-800">Kirim Data</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
    <!-- JavaScript untuk melakukan permintaan data ke API -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script>
        const base_url = "http://localhost:9000";
        // Fungsi untuk mengambil data dari API
        async function fetchData(schoolName) {
            const apiUrl = 'https://api-sekolah-indonesia.vercel.app/sekolah/s?sekolah=' + encodeURIComponent(schoolName);

            try {
                // Melakukan permintaan GET ke API menggunakan Axios
                const response = await axios.get(apiUrl);

                // Menyaring dan menampilkan NPSN dan nama sekolah
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

        // Fungsi untuk mengambil data provinsi dari API
        async function fetchProvinces() {
            try {
                const response = await axios.get('https://www.emsifa.com/api-wilayah-indonesia/api/provinces.json');
                document.querySelector('[x-data]').__x.$data.provinces = response.data;
            } catch (error) {
                console.error(error);
            }
        }

        // Fungsi untuk mengambil data kabupaten/kota berdasarkan id provinsi dari API
        async function fetchCities(provinceId) {
            try {
                const response = await axios.get(`https://www.emsifa.com/api-wilayah-indonesia/api/regencies/${provinceId}.json`);
                document.querySelector('[x-data]').__x.$data.cities = response.data;
            } catch (error) {
                console.error(error);
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
            const [npsn, sekolah] = event.target.value.split(':');
            document.getElementById('result').innerText = `Memilih sekolah "${sekolah}" dengan NPSN: ${npsn}`;
        });

        // Memanggil fungsi fetchProvinces saat halaman dimuat
        fetchProvinces();

        // Event listener untuk memanggil fungsi fetchCities saat provinsi dipilih
        document.getElementById('selectedProvince').addEventListener('change', function(event) {
            const provinceId = event.target.value;
            fetchCities(provinceId);
        });

        // Event listener untuk menangani pengiriman form
        document.getElementById('schoolForm').addEventListener('submit', function(event) {
            event.preventDefault(); // Mencegah pengiriman form secara default
            const nama_lengkap = document.getElementById('NamaL').value;
            const nik = document.getElementById('NIK').value;
            const nisn = document.getElementById('NISN').value;
            const jenis_kelamin = document.getElementById('jk').value;
            console.log(jenis_kelamin)
            const nomor_hp = document.getElementById('HP').value;
            const email = document.getElementById('email').value;
            const selectedOption = document.getElementById('selectedSchool').value.split(':');
            const jenis_sekolah = document.getElementById('selectedType').value; // Menggunakan nilai langsung dari variabel selectedType
            const jurusan = document.getElementById('jurusan').value;
            const tahun_lulus = document.getElementById('lulus').value;
            const nama_wali = document.getElementById('NamaW').value;
            const nik_wali = document.getElementById('NIKW').value;
            const nomor_hp_wali = document.getElementById('NOHPW').value;
            const npsn = selectedOption[0];
            const schoolName = selectedOption[1];
            const inputsekolah = document.getElementById('manualInput').value;
            // Mendapatkan nama provinsi dan nama kota yang dipilih
            const selectedProvinceId = document.getElementById('selectedProvince').value;
            const provinsi = document.getElementById('selectedProvince').options[document.getElementById('selectedProvince').selectedIndex].text;
            const selectedCityName = document.getElementById('selectedCity').value;
            const kabupaten = document.getElementById('selectedCity').options[document.getElementById('selectedCity').selectedIndex].text;

            // Kirim data menggunakan Axios
            axios
                .post(`${base_url}/api/pmb`, {
                    nama_lengkap: nama_lengkap,
                    nik: nik,
                    nisn: nisn,
                    jenis_kelamin: jenis_kelamin,
                    nomor_hp: nomor_hp,
                    email: email,
                    npsn: npsn,
                    jenis_sekolah: jenis_sekolah,
                    jurusan: jurusan,
                    tahun_lulus: tahun_lulus,
                    nama_wali: nama_wali,
                    nik_wali: nik_wali,
                    nomor_hp_wali: nomor_hp_wali,
                    schoolName: schoolName,
                    inputsekolah: inputsekolah,
                    selectedProvince: selectedProvinceId,
                    selectedCity: selectedCityName
                })
                .then(function(response) {
                    console.log(response); // Log respon dari server jika sukses
                })
                .catch(function(error) {
                    console.error(error); // Log kesalahan jika terjadi
                });
        });
    </script>
    <script>
        // Mengambil referensi ke tombol hamburger
        const navbarToggle = document.querySelector('[data-collapse-toggle="navbar-default"]');
        // Mengambil referensi ke menu navbar
        const navbarMenu = document.getElementById('navbar-default');
        // Mengambil referensi ke menu desktop
        const navDesktop = document.getElementById('navdesktop');

        // Menambahkan event listener untuk menghandle klik pada tombol hamburger
        navbarToggle.addEventListener('click', function() {
            // Toggle class 'hidden' pada menu navbar saat tombol hamburger diklik
            navbarMenu.classList.toggle('hidden');
            // Toggle atribut aria-expanded pada tombol hamburger
            navbarToggle.setAttribute('aria-expanded', navbarMenu.classList.contains('hidden') ? 'false' : 'true');
        });

        // Memeriksa lebar layar saat halaman dimuat dan saat jendela diubah ukurannya
        window.addEventListener('DOMContentLoaded', checkWidth);
        window.addEventListener('resize', checkWidth);

        function checkWidth() {
            // Jika lebar layar lebih besar dari 800px (tampilan desktop)
            if (window.innerWidth > 800) {
                // Tampilkan menu desktop
                navDesktop.classList.remove('hidden');
            } else {
                // Sembunyikan menu desktop
                navDesktop.classList.add('hidden');
            }
        }
    </script>

</body>

</html>