@extends('base')

@section('title', 'Detail Semester')

@section('content')
<div class="w-full p-6 mx-auto">
  <!-- Tempat untuk menampilkan detail semester -->
  <div id="detailSemester" class="bg-white p-6 rounded-lg shadow-lg">
    <!-- Data semester akan di-render di sini oleh Axios -->
  </div>
</div>

<script>
  document.addEventListener('DOMContentLoaded', function() {
    var semesterId = '{{ $id }}'; // ID yang diterima dari controller
    var detailContainer = document.getElementById('detailSemester');

    axios.get('http://localhost:9000/api/Semester/' + semesterId)
      .then(function(response) {
        // Menangani sukses
        var semester = response.data;
        detailContainer.innerHTML = `
          <h2 class="text-xl font-semibold mb-2">${semester.nama_semester}</h2>
          <p><strong>ID:</strong> ${semester.id}</p>
          <p><strong>Tanggal Mulai:</strong> ${semester.tanggal_mulai}</p>
          <p><strong>Tanggal Selesai:</strong> ${semester.tanggal_selesai}</p>
          <p><strong>Status:</strong> ${semester.status}</p>
        `;
      })
      .catch(function(error) {
        // Menangani error
        console.error(error);
      });
  });
</script>
@endsection
