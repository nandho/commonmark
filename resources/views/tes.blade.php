@extends('base')

@section('title', 'SIAKAD')

@section('content')
<div class="w-full p-6 mx-auto">
  <div class="flex flex-wrap -mx-3">
    <div class="w-full max-w-full px-3 shrink-0 md:w-12 md:flex-0">
      <div class="relative flex flex-col min-w-0 break-words bg-white border-0 shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
        <div class="border-black/12.5 rounded-t-2xl border-b-0 border-solid p-6 pb-0">
          <h2 class="text-2xl font-bold mb-4 dark:text-white">Data Semester</h2>
          <div class="overflow-x-auto">
            <table class="min-w-full bg-white">
              <thead>
                <tr>
                  <th class="px-6 py-3 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">ID</th>
                  <th class="px-6 py-3 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">Nama Semester</th>
                  <th class="px-6 py-3 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">Tanggal Mulai</th>
                  <th class="px-6 py-3 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">Tanggal Selesai</th>
                  <th class="px-6 py-3 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">Status</th>
                </tr>
              </thead>
              <tbody id="semesterData">
                <!-- Data dari API akan di-render di sini -->
              </tbody>
            </table>
          </div>
          <a href="{{ url('biodata') }}" class="mt-4 inline-block px-6 py-2 font-bold text-white bg-blue-500 rounded-lg hover:bg-blue-700">Kembali</a>
        </div>
      </div>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script>
  const baseUrl = 'http://localhost:9000/api/Semester';
  axios.get(baseUrl)
    .then(response => {
      const semesters = response.data;
      let rows = '';
      semesters.forEach(semester => {
        rows += `
          <tr class="hover:bg-gray-100">
            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">${semester.id}</td>
            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">${semester.nama_semester}</td>
            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">${semester.tanggal_mulai}</td>
            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">${semester.tanggal_selesai}</td>
            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">${semester.status}</td>
          </tr>
        `;
      });
      document.getElementById('semesterData').innerHTML = rows;
    })
    .catch(error => console.error('Error:', error));
</script>
@endsection
