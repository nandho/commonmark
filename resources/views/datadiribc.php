@extends('base')

@section('title', 'SIAKAD')

@section('content')
<div class="relative flex flex-col flex-auto min-w-0 p-4 mx-6 overflow-hidden break-words bg-white border-0 dark:bg-slate-850 dark:shadow-dark-xl shadow-3xl rounded-2xl bg-clip-border">
  <div class="flex flex-wrap -mx-3">
    <div class="flex-none w-auto max-w-full px-3">
      <div class="relative inline-flex items-center justify-center text-white transition-all duration-200 ease-in-out text-base h-19 w-19 rounded-xl">
        <img src="../assets/img/team-1.jpg" alt="profile_image" class="w-full shadow-2xl rounded-xl" />
      </div>
    </div>
    <div class="flex-none w-auto max-w-full px-3 my-auto">
      <div class="h-full">
        <h5 name="username" class="mb-1 dark:text-white"></h5>
        <p id="role" class="mb-0 font-semibold leading-normal dark:text-white dark:opacity-60 text-sm"></p>
      </div>
    </div>
    <div class="w-full max-w-full px-3 mx-auto mt-4 sm:my-auto sm:mr-0 md:w-1/2 md:flex-none">
      <div class=" max-w-full  mx-auto sm:my-auto sm:mr-0 md:w-1/2 md:flex-none>
        <nav class=" z-20 flex flex-wrap items-center justify-between w-full px-6 py-2 text-black transition-all ease-in shadow-none duration-250 lg:flex-nowrap lg:justify-start" navbar-profile navbar-scroll="true">
        <div class="flex items-center justify-between w-full px-6 py-1 mx-auto flex-wrap-inherit">
          <div class="flex items-center mt-2 grow sm:mt-0 sm:mr-6 md:mr-0 lg:flex lg:basis-auto">
            <ul class="flex flex-row justify-end pl-0 mb-0 list-none md-max:w-full">
              <li class="flex items-center">
                <a href="../pages/sign-in.html" class="block px-0 py-2 font-semibold text-black transition-all ease-in-out text-sm">
                  <i class="fa fa-user sm:mr-1" aria-hidden="true"></i>
                  <span class="hidden sm:inline">Sign In</span>
                </a>
              </li>
              <li class="flex items-center pl-4 xl:hidden">
                <a href="javascript:;" class="block p-0 text-black transition-all ease-in-out text-sm" sidenav-trigger>
                  <div class="w-4.5 overflow-hidden">
                    <i class="ease mb-0.75 relative block h-0.5 rounded-sm bg-black transition-all"></i>
                    <i class="ease mb-0.75 relative block h-0.5 rounded-sm bg-black transition-all"></i>
                    <i class="ease relative block h-0.5 rounded-sm bg-black transition-all"></i>
                  </div>
                </a>
              </li>
              <li class="flex items-center px-4">
                <a href="javascript:;" class="p-0 text-black transition-all ease-in-out text-sm">
                  <i fixed-plugin-button-nav class="cursor-pointer fa fa-cog" aria-hidden="true"></i>
                  <!-- fixed-plugin-button-nav  -->
                </a>
              </li>
            </ul>
          </div>
        </div>
        </nav>
      </div>
    </div>
  </div>
</div>
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

          <p class="leading-normal uppercase dark:text-white dark:opacity-60 text-sm">About me</p>
          <div class="flex flex-wrap -mx-3">
            <div class="w-full max-w-full px-3 shrink-0 md:w-full md:flex-0">
              <div class="mb-4">
                <label for="about me" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">About
                  me</label>
                <input type="text" name="about me" value="A beautiful Dashboard for Bootstrap 5. It is Free and Open Source." class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="w-full max-w-full px-3 mt-6 shrink-0 md:w-4/12 md:flex-0 md:mt-0">
      <div class="relative flex flex-col min-w-0 break-words bg-white border-0 shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
        <img class="w-full rounded-t-2xl" src="../assets/img/bg-profile.jpg" alt="profile cover image">
        <div class="flex flex-wrap justify-center -mx-3">
          <div class="w-4/12 max-w-full px-3 flex-0 ">
            <div class="mb-6 -mt-6 lg:mb-0 lg:-mt-16">
              <a href="javascript:;">
                <img class="h-auto max-w-full border-2 border-white border-solid rounded-circle" src="../assets/img/team-2.jpg" alt="profile image">
              </a>
            </div>
          </div>
        </div>
        <div class="flex-auto p-6 pt-0">
          <div class="mt-6 text-center">
            <h5 name="username" class="dark:text-white ">
              <span class="font-light">, 35</span>
            </h5>
            <div class="mb-2 font-semibold leading-relaxed text-base dark:text-white/80 text-slate-700">
              <i class="mr-2 dark:text-white ni ni-pin-3"></i>
              Bucharest, Romania
            </div>
            <div class="mt-6 mb-2 font-semibold leading-relaxed text-base dark:text-white/80 text-slate-700">
              <i class="mr-2 dark:text-white ni ni-briefcase-24"></i>
              Solution Manager - Creative Tim Officer
            </div>
            <div id="skl" class="dark:text-white/80">
              <i class="mr-2 dark:text-white ni ni-hat-3"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
  <footer class="pt-4">
    <div class="w-full px-6 mx-auto">
      <div class="flex flex-wrap items-center -mx-3 lg:justify-between">
        <div class="w-full max-w-full px-3 mt-0 mb-6 shrink-0 lg:mb-0 lg:w-1/2 lg:flex-none">
          <div class="leading-normal text-center text-sm text-slate-500 lg:text-left">
            ©
            <script>
              document.write(new Date().getFullYear() + ",");
            </script>
            made with <i class="fa fa-heart"></i> by
            <a href="https://www.creative-tim.com" class="font-semibold dark:text-white text-slate-700" target="_blank">Creative Tim</a>
            for a better web.
          </div>
        </div>
        <div class="w-full max-w-full px-3 mt-0 shrink-0 lg:w-1/2 lg:flex-none">
          <ul class="flex flex-wrap justify-center pl-0 mb-0 list-none lg:justify-end">
            <li class="nav-item">
              <a href="https://www.creative-tim.com" class="block px-4 pt-0 pb-1 font-normal transition-colors ease-in-out text-sm text-slate-500" target="_blank">Creative Tim</a>
            </li>
            <li class="nav-item">
              <a href="https://www.creative-tim.com/presentation" class="block px-4 pt-0 pb-1 font-normal transition-colors ease-in-out text-sm text-slate-500" target="_blank">About Us</a>
            </li>
            <li class="nav-item">
              <a href="https://creative-tim.com/blog" class="block px-4 pt-0 pb-1 font-normal transition-colors ease-in-out text-sm text-slate-500" target="_blank">Blog</a>
            </li>
            <li class="nav-item">
              <a href="https://www.creative-tim.com/license" class="block px-4 pt-0 pb-1 pr-0 font-normal transition-colors ease-in-out text-sm text-slate-500" target="_blank">License</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>
</div>
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
        const nama = data.data.nama_lengkap; // Simpan nama dalam variabel
        const email = data.user.email;
        const role = data.user.role;
        const nik = data.data.nik;
        const nohp = data.data.nomor_hp;
        const jk = data.data.jenis_kelamin;
        const tml = data.data.tempat_lahir;
        const ttl = data.data.tanggal_lahir;
        const skl = data.data.nama_sekolah;
        const agma = data.data.agma;
        // Tampilkan data di console log
        console.log(data);
        console.log(nama);
        console.log("Email : " + email);
        console.log("Role : " + role);
        console.log("NIK : " + nik);
        // Masukkan nama ke dalam tag span
        const usernameSpans = document.querySelectorAll('span[name="username"]');
        usernameSpans.forEach(span => {
          span.innerText = nama;
        });
        // Tampilkan nama di dalam elemen h5
        const usernameHeadings = document.querySelectorAll('h5[name="username"]');
        // Iterasi melalui setiap elemen dan atur teksnya
        usernameHeadings.forEach(heading => {
          heading.innerText = nama;
        });
        // Tampilkan email di dalam elemen span
        document.getElementById('email').innerText = email;
        document.getElementById('nik').innerText = nik;
        document.getElementById('nohp').innerText = nohp;
        document.getElementById('role').innerText = role;
        document.getElementById('jk').innerText = jk;
        document.getElementById('tml').innerText = tml;
        document.getElementById('ttl').innerText = ttl;
        document.getElementById('skl').innerText = skl;
        document.getElementById('agm').value=agma;

      });

    } catch (error) {
      console.error(error);
    }
  }

  fetchUserData();
</script>
@endsection