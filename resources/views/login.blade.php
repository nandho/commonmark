<html>

<head>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;900&display=swap" rel="stylesheet" />
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1" />
    @vite('resources/css/app.css')
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js" defer></script>

</head>

<body>
    <!-- component -->
    <div class="py-6">
        <div class="flex bg-white rounded-lg shadow-lg overflow-hidden mx-auto max-w-sm lg:max-w-4xl">
            <div class="lg:block lg:w-1/2 bg-cover" style="background-image:url('{{ asset('assets/img/Foto-Hero.png') }}')">
            </div>
            <div class="w-full p-8 lg:w-1/2">
                <h2 class="text-2xl font-semibold text-gray-700 text-center">Selamat Datang</h2>
                <p class="text-xl text-gray-600 text-center">Calon Mahasiswa/i Akparda!</p>
                <a href="/daftar" class="flex items-center justify-center mt-4 text-white rounded-lg shadow-md hover:bg-gray-100">
                    <div class="px-4 py-3">
                        <img src="{{ asset('assets/img/akprada-header.png') }}" class="object-cover h-14 w-auto md:h-10" alt="Flowbite Logo">
                    </div>
                    <h1 class="px-4 py-3 w-5/6 text-center text-gray-600 font-bold">Silahkan Daftar Jika Belum Memiliki Akun</h1>
                </a>
                <div class="mt-4 flex items-center justify-between">
                    <span class="border-b w-1/5 lg:w-1/4"></span>
                    <a href="#" class="text-xs text-center text-gray-500 uppercase">or login</a>
                    <span class="border-b w-1/5 lg:w-1/4"></span>
                </div>

                <form id="loginForm">
                    <div class="mt-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2">Username</label>
                        <input name="username" id="username" class="bg-gray-200 text-gray-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded py-2 px-4 block w-full appearance-none" type="text" />
                    </div>
                    <div class="mt-4">
                        <div class="flex justify-between">
                            <label class="block text-gray-700 text-sm font-bold mb-2">Password</label>
                        </div>
                        <input id="password" class="bg-gray-200 text-gray-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded py-2 px-4 block w-full appearance-none" type="password" />
                    </div>
                    <div class="mt-8">
                        <button type="submit" class=" bg-blue-700 hover:bg-blue-800 text-white font-bold py-2 px-4 w-full rounded  ">Login</button>
                    </div>
                </form>

                <div class="mt-4 flex items-center justify-between">
                    <span class="border-b w-1/5 md:w-1/4"></span>
                    <a href="#" class="text-xs text-gray-500 uppercase">or sign up</a>
                    <span class="border-b w-1/5 md:w-1/4"></span>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script>
        document.getElementById('loginForm').addEventListener('submit', function(event) {
            event.preventDefault();
            const baseUrl = window.location.origin;

            const username = document.getElementById('username').value;
            const password = document.getElementById('password').value;

            axios.post(`${baseUrl}/api/auth/login`, {
                    username: username,
                    password: password
                })
                .then(response => {
                    console.log('Login successful:', response.data);
                    // Set HttpOnly, Secure, and SameSite cookie via server-side response
                    document.cookie = `token=${response.data.token}; path=/; max-age=3600; Secure; SameSite=Strict`;
                    // Arahkan ke halaman daftar dosen setelah login sukses
                    window.location.href = '/tes';
                })
                .catch(error => {
                    console.error('Error logging in:', error);
                });
        });
    </script>

</html>
