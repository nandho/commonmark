<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sekolah Indonesia</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.x.x/dist/alpine.min.js" defer></script>
</head>

<body class="bg-gray-100 min-h-screen flex flex-col justify-center items-center">
    <div class="w-full sm:max-w-md p-6 bg-white rounded-lg shadow-md">
        <div x-data="{
        message: '',
        schoolData: [],
        noData: false,
        selectedData: null,
        fetchSchoolData() {
            this.schoolData = []; // Membersihkan data sekolah sebelum pencarian baru
            this.noData = false; // Mengatur noData ke false saat memulai pencarian baru
            if (this.message.length >= 3) {
                axios.get(`https://api-sekolah-indonesia.vercel.app/sekolah/s?sekolah=${this.message}`)
                .then(response => {
                    if (response.data.dataSekolah.length > 0) {
                        this.schoolData = response.data.dataSekolah;
                    } else {
                        this.noData = true; // Set noData to true if no data found
                    }
                })
                .catch(error => {
                    console.error('Error fetching school data:', error);
                });
            } else {
                this.noData = false; // Set noData to false if message length is less than 3
            }
        },
        selectSchool(school) {
            this.selectedData = school;
        }
    }" @keydown.enter="fetchSchoolData">
            <input type="text" x-model="message" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" @input="fetchSchoolData">
            <div x-show="schoolData.length > 0" class="mt-4">
                <select x-model="selectedData" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <option value="" disabled selected>Pilih Sekolah</option>
                    <template x-for="schoolItem in schoolData" :key="schoolItem.npsn">
                        <template x-if="schoolItem.npsn !== undefined && schoolItem.sekolah !== undefined">
                            <option x-bind:value="schoolItem" x-text="schoolItem.npsn + ' - ' + schoolItem.sekolah"></option>
                        </template>
                    </template>
                </select>
            </div>
            <div x-show="noData && message.length >= 3" class="mt-4 text-red-500">
                <p>Maaf, data tidak ditemukan. Silahkan tambahkan data.</p>
            </div>

            <form action="" method="POST" x-show="selectedData !== null">
                @csrf
                <template x-if="selectedData !== null">
                    <input type="hidden" name="npsn" x-model="selectedData.npsn">
                    <input type="hidden" name="sekolah" x-model="selectedData.sekolah">
                </template>
                <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded-md hover:bg-green-600 focus:outline-none focus:bg-green-600">Submit Form</button>
            </form>
        </div>
    </div>





</body>

</html> -->

