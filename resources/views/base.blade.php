<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="../assets/img/favicon.png" />
    <title>@yield('title')</title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- Nucleo Icons -->
    <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Popper -->
    <script src="https://unpkg.com/@popperjs/core@2"></script>
    <!-- Main Styling -->
    <link href="../assets/css/argon-dashboard-tailwind.css?v=1.0.1" rel="stylesheet" />
    <!-- JavaScript untuk melakukan permintaan data ke API -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
</head>

<body
    class="m-0 font-sans antialiased font-normal dark:bg-slate-900 text-base leading-default bg-gray-50 text-slate-500">
    <div class="absolute bg-y-50 w-full top-0 min-h-75">
        <span class="absolute top-0 left-0 w-full h-full bg-blue-500 opacity-60"></span>
    </div>

    <aside
        class="fixed inset-y-0 flex-wrap items-center justify-between block w-full p-0 my-4 overflow-y-auto antialiased transition-transform duration-200 -translate-x-full bg-white border-0 shadow-xl dark:shadow-none dark:bg-slate-850 max-w-64 ease-nav-brand z-990 xl:ml-6 rounded-2xl xl:left-0 xl:translate-x-0"
        aria-expanded="false">
        <div class="flex items-center">
            <i class="absolute top-0 right-0 p-4 opacity-50 cursor-pointer fas fa-times dark:text-white text-slate-400 xl:hidden"
                sidenav-close></i>
            <a class="flex items-center px-2 py-3 m-0 text-sm whitespace-nowrap dark:text-white text-slate-700"
                href="" target="_blank">
                <img src="{{ asset('storage/images/akparda.webp') }}" {{-- class="inline h-full max-w-full transition-all duration-200 dark:hidden ease-nav-brand max-h-7" --}}
                    class="inline h-10 max-w-full transition-all duration-200 dark:hidden ease-nav-brand max-h-10"
                    alt="main_logo" />
                <img src="{{ asset('storage/images/akparda.webp') }}"
                    class="hidden h-8 max-w-full transition-all duration-200 dark:inline ease-nav-brand max-h-8"
                    alt="main_logo" />
                <div
                    class="ml-1 font-semibold transition-all duration-200 ease-nav-brand text-ellipsis overflow-hidden whitespace-nowrap">
                    <span class="block">Akademi Pariwisata</span>
                    <span class="block">Dharma Nusantara Sakti</span>
                </div>
            </a>
        </div>
        <hr
            class="h-px mt-0 bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent dark:bg-gradient-to-r dark:from-transparent dark:via-white dark:to-transparent" />

        <!-- Calon Mahasiswa Baru -->
        <div id="calonMahasiswaItems" class="items-center block w-auto max-h-screen overflow-auto grow basis-full">
            <ul class="flex flex-col pl-0 mb-0">
                <li class="mt-0.5 w-full">
                    <a class="py-2.7 bg-blue-500/13 dark:text-white dark:opacity-80 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap rounded-lg px-4 font-semibold text-slate-700 transition-colors"
                        href="./pages/dashboard.html">
                        <div
                            class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                            <i class="relative top-0 text-sm leading-normal text-blue-500 ni ni-tv-2"></i>
                        </div>
                        <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">Dashboard</span>
                    </a>
                </li>

                <!-- <li class="mt-0.5 w-full">
          <a class=" dark:text-white dark:opacity-80 py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors" href="./pages/tables.html">
            <div class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
              <i class="relative top-0 text-sm leading-normal text-orange-500 ni ni-calendar-grid-58"></i>
            </div>
            <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">Tables</span>
          </a>
        </li>

        <li class="mt-0.5 w-full">
          <a class=" dark:text-white dark:opacity-80 py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors" href="./pages/billing.html">
            <div class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center fill-current stroke-0 text-center xl:p-2.5">
              <i class="relative top-0 text-sm leading-normal text-emerald-500 ni ni-credit-card"></i>
            </div>
            <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">Billing</span>
          </a>
        </li> -->

                <li class="mt-0.5 w-full">
                    <a class=" dark:text-white dark:opacity-80 py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors"
                        href="./pages/virtual-reality.html">
                        <div
                            class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                            <i class="relative top-0 text-sm leading-normal text-cyan-500 ni ni-app"></i>
                        </div>
                        <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">Berkas</span>
                    </a>
                </li>

                <li class="mt-0.5 w-full">
                    <a class=" dark:text-white dark:opacity-80 py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors"
                        href="./pages/rtl.html">
                        <div
                            class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                            <i class="relative top-0 text-sm leading-normal text-red-600 ni ni-world-2"></i>
                        </div>
                        <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">Soal Ujian</span>
                    </a>
                </li>

                <li class="w-full mt-4">
                    <h6 class="pl-6 ml-2 text-xs font-bold leading-tight uppercase dark:text-white opacity-60">Biodata
                    </h6>
                </li>

                <li class="mt-0.5 w-full">
                    <a class=" dark:text-white dark:opacity-80 py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors"
                        href="./pages/profile.html">
                        <div
                            class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                            <i class="relative top-0 text-sm leading-normal text-slate-700 ni ni-single-02"></i>
                        </div>
                        <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">Data Diri</span>
                    </a>
                </li>

            </ul>
        </div>
        <!-- / End Navbar Menu -->

        <!-- PMB-->
        <div id="pmb" style="display: none;"
            class="items-center block w-auto max-h-screen overflow-auto grow basis-full">
            <ul class="flex flex-col pl-0 mb-0">
                <li class="mt-0.5 w-full">
                    <a class="py-2.7 bg-blue-500/13 dark:text-white dark:opacity-80 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap rounded-lg px-4 font-semibold text-slate-700 transition-colors"
                        href="./pages/dashboard.html">
                        <div
                            class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                            <i class="relative top-0 text-sm leading-normal text-blue-500 ni ni-tv-2"></i>
                        </div>
                        <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">Dashboard</span>
                    </a>
                </li>

                <li class="mt-0.5 w-full">
                    <a class=" dark:text-white dark:opacity-80 py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors"
                        href="./pages/tables.html">
                        <div
                            class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                            <i class="relative top-0 text-sm leading-normal text-orange-500 ni ni-calendar-grid-58"></i>
                        </div>
                        <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">Tables</span>
                    </a>
                </li>

                <li class="mt-0.5 w-full">
                    <a class=" dark:text-white dark:opacity-80 py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors"
                        href="./pages/billing.html">
                        <div
                            class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center fill-current stroke-0 text-center xl:p-2.5">
                            <i class="relative top-0 text-sm leading-normal text-emerald-500 ni ni-credit-card"></i>
                        </div>
                        <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">Billing</span>
                    </a>
                </li>

                <li class="mt-0.5 w-full">
                    <a class=" dark:text-white dark:opacity-80 py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors"
                        href="./pages/virtual-reality.html">
                        <div
                            class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                            <i class="relative top-0 text-sm leading-normal text-cyan-500 ni ni-app"></i>
                        </div>
                        <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">Virtual Reality</span>
                    </a>
                </li>

                <li class="mt-0.5 w-full">
                    <a class=" dark:text-white dark:opacity-80 py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors"
                        href="./pages/rtl.html">
                        <div
                            class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                            <i class="relative top-0 text-sm leading-normal text-red-600 ni ni-world-2"></i>
                        </div>
                        <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">RTL</span>
                    </a>
                </li>

                <li class="w-full mt-4">
                    <h6 class="pl-6 ml-2 text-xs font-bold leading-tight uppercase dark:text-white opacity-60">Account
                        pages</h6>
                </li>

                <li class="mt-0.5 w-full">
                    <a class=" dark:text-white dark:opacity-80 py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors"
                        href="./pages/profile.html">
                        <div
                            class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                            <i class="relative top-0 text-sm leading-normal text-slate-700 ni ni-single-02"></i>
                        </div>
                        <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">Profile</span>
                    </a>
                </li>

                <li class="mt-0.5 w-full">
                    <a class=" dark:text-white dark:opacity-80 py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors"
                        href="./pages/sign-in.html">
                        <div
                            class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                            <i class="relative top-0 text-sm leading-normal text-orange-500 ni ni-single-copy-04"></i>
                        </div>
                        <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">Sign In</span>
                    </a>
                </li>

                <li class="mt-0.5 w-full">
                    <a class=" dark:text-white dark:opacity-80 py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors"
                        href="./pages/sign-up.html">
                        <div
                            class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                            <i class="relative top-0 text-sm leading-normal text-cyan-500 ni ni-collection"></i>
                        </div>
                        <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">Sign Up</span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- / End Navbar Menu -->
    </aside>
    <div class="relative h-full max-h-screen transition-all duration-200 ease-in-out xl:ml-68">
        <div class="relative w-full mx-auto mt-40 ">
            <br>
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
            @yield('content')
        </div>
    </div>

</body>
<!-- plugin for scrollbar  -->
<script src="../assets/js/plugins/perfect-scrollbar.min.js" async></script>
<!-- main script file  -->
<script src="../assets/js/argon-dashboard-tailwind.js?v=1.0.1" async></script>
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
                const data = response.data.data.user; // Dapatkan data dari response

                const role = data.role;
                // Tampilkan data di console log
                console.log(data);
                console.log("Role : " + role);
                // Tampilkan email di dalam elemen span
                document.getElementById('role').innerText = role;

                // Jika user memiliki role 'calonmahasiswa'
                if (role === 'calonmahasiswa') {
                    document.getElementById('calonMahasiswaItems').style.display = 'block';
                } else if (role === 'pmb') {
                    document.getElementById('pmbItems').style.display = 'block';
                } else {
                    // Jika user bukan 'calonmahasiswa'
                    document.getElementById('otherItems').style.display = 'block';
                }
            });

        } catch (error) {
            console.error(error);
        }
    }

    fetchUserData();
</script>

</html>
