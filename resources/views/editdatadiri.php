<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit User Profile</title>
</head>

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
