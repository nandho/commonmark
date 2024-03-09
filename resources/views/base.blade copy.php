<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;900&display=swap" rel="stylesheet" />
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1" />

    @vite('resources/css/app.css')
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
</head>

<body class="bg-gray-300 text-gray-800">
    <!-- component -->
    <div class="container m-auto grid  text-white md:grid-cols-12">
        <header class="col-span-12 bg-blue-500 p-4 w-auto">
            <nav class="flex items-center justify-end  p-4">
                <!-- user menu -->
                <div class="flex items-center space-x-4">
                    <button id="dataButton" class="bg-black border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded text-base w-auto">
                        <p class="text-white">Data</p>
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-1 text-white" viewBox="0 0 24 24">
                            <path d="M5 12h14M12 5l7 7-7 7"></path>
                        </svg>
                    </button>
                    <div class="relative">
                        <button class="focus:outline-none focus:bg-blue-400 hover:bg-blue-400 p-2.5 rounded-md" onclick="toggleDropdown()">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 cursor-pointer" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="12" cy="12" r="10" />
                                <path d="M16 15s-1.5-2-4-2-4 2-4 2" />
                                <path d="M9 9a3 3 0 0 1 6 0" />
                            </svg>
                        </button>
                        <div id="dropdownMenu" class="absolute right-0 mt-2 w-56 bg-white rounded-md shadow-lg hidden">
                            <div class="py-1" role="menu" aria-orientation="vertical" aria-labelledby="options-menu">
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Logout</a>
                                <!-- You can add more dropdown items here -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- mobile menu button -->
                <div class="md:hidden">
                    <button id="mobile-menu-button" class=" p-2.5 rounded-md focus:outline-none focus:bg-blue-400 hover:bg-blue-400">
                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
            </nav>
        </header>
        <aside id="sidebar" class="col-span-2 bg-blue-700 p-4 inset-y-0 left-0 transform -translate-x-full md:relative md:translate-x-0 transition duration-150 ease-in-out">aside</aside>
        <main id="mainContent" class="col-span-4 p-4 md:col-span-10 row h-screen">
            @yield('content')
        </main>

        <footer class="col-span-12 bg-blue-800 p-4 min-h-[120px]">Footer</footer>
    </div>
    <script>
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const sidebar = document.getElementById('sidebar');
        const mainContent = document.getElementById('mainContent');

        // Menambahkan fungsi untuk memeriksa lebar layar dan menyesuaikan tampilan mainContent
        function adjustMainContentWidth() {
            // Jika lebar layar mencukupi untuk mode desktop, atur mainContent sesuai col-span-4
            if (window.innerWidth > 768) {
                mainContent.classList.add('col-span-4');
                mainContent.classList.remove('col-span-12');
            } else {
                // Jika lebar layar adalah mode mobile, atur mainContent sesuai col-span-12 secara default
                mainContent.classList.add('col-span-12');
                mainContent.classList.remove('col-span-4');
            }
        }

        // Panggil fungsi untuk menyesuaikan lebar mainContent saat halaman dimuat
        adjustMainContentWidth();

        // Tambahkan event listener untuk menyesuaikan lebar mainContent saat ukuran layar berubah
        window.addEventListener('resize', adjustMainContentWidth);

        // Tambahkan event listener untuk mobileMenuButton
        mobileMenuButton.addEventListener('click', () => {
            sidebar.classList.toggle('-translate-x-full');
            sidebar.classList.toggle('translate-x-0');
            mainContent.classList.toggle('ml-0');

            // Menambahkan atau menghapus kelas CSS untuk menyesuaikan lebar mainContent
            if (sidebar.classList.contains('-translate-x-full')) {
                // Jika sidebar ditutup, atur lebar mainContent menjadi penuh (full width)
                mainContent.classList.remove('col-span-4');
                mainContent.classList.add('col-span-12');
            } else {
                // Jika sidebar dibuka kembali, atur lebar mainContent sesuai dengan col-span-4
                mainContent.classList.remove('col-span-12');
                mainContent.classList.add('col-span-4');
            }

            // Menambahkan atau menghapus padding pada elemen parent agar tidak ada jarak dengan header
            const rowElement = document.querySelector('.row');
            if (rowElement) {
                rowElement.classList.toggle('pt-12'); // Sesuaikan dengan kebutuhan Anda
            }
        });
    </script>


    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script>
        async function fetchData() {
            try {
                const response = await axios.get('http://202.91.8.170:9000/api/pmb/72cac49d-f48c-4927-9672-a12ea2be3788/');
                const data = response.data.data;
                const idButton = document.getElementById('dataButton');
                idButton.textContent = `ID: ${data.id}`;
            } catch (error) {
                console.error(error);
            }
        }

        fetchData();
    </script>

    <script>
        function toggleDropdown() {
            var menu = document.getElementById("dropdownMenu");
            menu.classList.toggle("hidden");
        }
    </script>

</body>


</html>