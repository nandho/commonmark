<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User Profile</title>
</head>

<body>
  <h1>User Profile</h1>
  <div>
    <h2>Nama: <span id="nama"></span></h2>
    <p>Email: <span id="email"></span></p>
    <p>Role: <span id="role"></span></p>
    <p>NIK: <span id="nik"></span></p>
    <p>No HP: <span id="nohp"></span></p>
    <p>Jenis Kelamin: <span id="jk"></span></p>
    <p>Tempat Lahir: <span id="tml"></span></p>
    <p>Tanggal Lahir: <span id="ttl"></span></p>
    <p>Nama Sekolah: <span id="skl"></span></p>
    <p>Agama: <span id="agm"></span></p>
    <button onclick="editProfile()">Edit Profile</button>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
  <script>
    async function fetchUserData() {
      try {
        // Ambil token dari cookies
        const token = document.cookie.split('; ').find(row => row.startsWith('token=')).split('=')[1];

        const config = {
          headers: {
            'Authorization': `Bearer ${token}`
          }
        };

        axios.get('http://localhost:9000/api/user', config).then(response => {
          const data = response.data.data; // Dapatkan data dari response
          console.log(data)
          document.getElementById('nama').innerText = data.data.nama_lengkap;
          document.getElementById('email').innerText = data.user.email;
          document.getElementById('role').innerText = data.role;
          document.getElementById('nik').innerText = data.data.nik;
          document.getElementById('nohp').innerText = data.data.nomor_hp;
          document.getElementById('jk').innerText = data.data.jenis_kelamin;
          document.getElementById('tml').innerText = data.data.tempat_lahir;
          document.getElementById('ttl').innerText = data.data.tanggal_lahir;
          document.getElementById('skl').innerText = data.data.nama_sekolah;
          document.getElementById('agm').innerText = data.data.agma;

        });

      } catch (error) {
        console.error(error);
      }
    }

    fetchUserData();

    function editProfile() {
      window.location.href = "/tes";
    }
  </script>
</body>

</html>