<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit User Profile</title>
</head>

<<<<<<< HEAD
@section('content')
<div class="w-full p-6 mx-auto">
  <div class="flex flex-wrap -mx-3">
    <div class="w-full max-w-full px-3 shrink-0 md:w-8/12 md:flex-0">
      <div class="relative flex flex-col min-w-0 break-words bg-white border-0 shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
        <div class="border-black/12.5 rounded-t-2xl border-b-0 border-solid p-6 pb-0">
          <div class="flex items-center">
            <p class="mb-0 dark:text-white/80">Biodata</p>
            <button type="button" class="inline-block px-8 py-2 mb-4 ml-auto font-bold leading-normal text-center text-white align-middle transition-all ease-in bg-blue-500 border-0 rounded-lg shadow-md cursor-pointer text-xs tracking-tight-rem hover:shadow-xs hover:-translate-y-px active:opacity-85">Settings</button>
          </div>
        </div>
        <div class="flex-auto p-6">
          <p class="leading-normal uppercase dark:text-white dark:opacity-60 text-sm">Data Diri</p>
          <div class="flex flex-wrap -mx-3">
            <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
              <div class="mb-4">
                <label for="nik" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">NIK</label>
                <span type="text" id="nik" name="nik" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
              </div>
            </div>
            <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
              <div class="mb-4">
                <label for="email" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Email
                  address</label>
                <span id="email" name="email" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none"></span>
              </div>
            </div>
            <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
              <div class="mb-4">
                <label for="username" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Nama Lengkap</label>
                <span name="username" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none"></span>
              </div>
            </div>
            <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
              <div class="mb-4">
                <label for="nohp" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Nomor HP</label>
                <span name="nohp" id="nohp" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none"></span>
              </div>
            </div>
            <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
              <div class="mb-4">
                <label for="jk" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Jenis Kelamin</label>
                <span name="jk" id="jk" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none"></span>
              </div>
            </div>
            <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
              <div class="mb-4">
                <label for="tml" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Tempat Lahir</label>
                <span name="tml" id="tml" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none"></span>
              </div>
            </div>
            <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
              <div class="mb-4">
                <label for="ttl" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Tanggal Lahir</label>
                <span name="ttl" id="ttl" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none"></span>
              </div>
            </div>
            <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
              <div class="mb-4">
                <label for="agm" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Tanggal Lahir</label>
                <span name="agm" id="agm" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none"></span>
              </div>
            </div>
          </div>
          <hr class="h-px mx-0 my-4 bg-transparent border-0 opacity-25 bg-gradient-to-r from-transparent via-black/40 to-transparent dark:bg-gradient-to-r dark:from-transparent dark:via-white dark:to-transparent " />
          <p class="leading-normal uppercase dark:text-white dark:opacity-60 text-sm">Alamat</p>
          <div class="flex flex-wrap -mx-3">
            <div class="w-full max-w-full px-3 shrink-0 md:w-full md:flex-0">
              <div class="mb-4">
                <label for="address" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Address</label>
                <input type="text" name="address" value="Bld Mihail Kogalniceanu, nr. 8 Bl 1, Sc 1, Ap 09" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
              </div>
            </div>
            <div class="w-full max-w-full px-3 shrink-0 md:w-4/12 md:flex-0">
              <div class="mb-4">
                <label for="city" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">City</label>
                <input type="text" name="city" value="New York" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
              </div>
            </div>
            <div class="w-full max-w-full px-3 shrink-0 md:w-4/12 md:flex-0">
              <div class="mb-4">
                <label for="country" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Country</label>
                <input type="text" name="country" value="United States" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
              </div>
            </div>
            <div class="w-full max-w-full px-3 shrink-0 md:w-4/12 md:flex-0">
              <div class="mb-4">
                <label for="postal code" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Postal
                  code</label>
                <input type="text" name="postal code" value="437300" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
              </div>
            </div>
          </div>
          <hr class="h-px mx-0 my-4 bg-transparent border-0 opacity-25 bg-gradient-to-r from-transparent via-black/40 to-transparent dark:bg-gradient-to-r dark:from-transparent dark:via-white dark:to-transparent " />
=======
<body>
  <h1>Edit User Profile</h1>
  <form id="editForm">
    <label for="nama">Nama:</label><br>
    <input type="text" id="nama" name="nama"><br>
    <label for="email">Email:</label><br>
    <input type="text" id="email" name="email"><br>
    <label for="role">Role:</label><br>
    <input type="text" id="role" name="role"><br>
    <!-- Add other input fields as needed -->
    <button type="submit">Simpan</button>
  </form>
>>>>>>> 10d0212 (Update WSL FE datadiri)

  <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
  <script>
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
        const userData = response.data.data;
        console.log(userData)
        // Mengisi nilai input dengan data pengguna yang diterima
        document.getElementById('nama').value = userData.data.nama_lengkap;
        document.getElementById('email').value = userData.user.email;
        document.getElementById('role').value = userData.role;
      } catch (error) {
        console.error('Gagal mengambil data pengguna:', error);
      }
    }

    // Panggil fungsi untuk mengambil data pengguna saat halaman dimuat
    fetchUserData();

    document.getElementById('editForm').addEventListener('submit', async function(event) {
      event.preventDefault();
      const formData = new FormData(this);
      const updatedUserData = {};
      formData.forEach((value, key) => {
        updatedUserData[key] = value;
      });

      try {
        const token = document.cookie.split('; ').find(row => row.startsWith('token=')).split('=')[1];
        const config = {
          headers: {
            'Authorization': `Bearer ${token}`,
            'Content-Type': 'application/json' // Set content type to JSON
          }
        };

<<<<<<< HEAD
  fetchUserData();
</script>
@endsection
=======
        // Mengambil data pengguna dari API
        const response = await axios.get('http://localhost:9000/api/user', config);
        const userData = response.data.data;
        // Mendapatkan ID pengguna dari data yang diterima
        const userId = userData.data.id;

        // Menggunakan ID untuk membuat URL pembaruan
        const updateUserUrl = `http://localhost:9000/api/pmb/${userId}`;

        // Data yang ingin diperbarui diambil dari inputan
        const updatedData = {
          nama_lengkap: document.getElementById('nama').value,
          email: document.getElementById('email').value,
          role: document.getElementById('role').value
        };

        // Melakukan pembaruan data menggunakan metode PATCH
        const patchResponse = await axios.patch(updateUserUrl, updatedData, config);

        console.log('Data berhasil diperbarui:', patchResponse.data);
      } catch (error) {
        console.error('Error updating data:', error.message);
      }
    });
  </script>


</body>

</html>
>>>>>>> 10d0212 (Update WSL FE datadiri)
