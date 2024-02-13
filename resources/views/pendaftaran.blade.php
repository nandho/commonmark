<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PMB Akprada</title>
    <!-- <link rel="stylesheet" href="{{ asset('css/tailwind.output.css') }}"> -->
    <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet"> -->
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    <!-- Alpine.js (required for Select2 with Alpine) -->
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
</head>

<body>
    <div class="flex h-screen bg-gray-50 light:bg-gray-900" :class="{ 'overflow-hidden': isSideMenuOpen }">
        <div class="flex flex-col flex-1">
            <nav x-data="{ open: false }" class="bg-white border-gray-200 light:bg-gray-900">
                <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
                    <div class="flex items-center space-x-3 rtl:space-x-reverse">
                        <a href="https://flowbite.com/" class="flex items-center space-x-3">
                            <img src="{{ asset('storage/images/akprada-header.png') }}" class="object-cover h-14 w-auto md:h-20" alt="Flowbite Logo">
                        </a>
                        <div id="hideOnSmallScreen">
                            <span class="text-lg md:text-2xl font-semibold whitespace-nowrap light:text-white">Akademi
                                Pariwisata</span>
                            <br>
                            <span class="text-base md:text-lg font-semibold whitespace-nowrap light:text-white">Dharma
                                Nusantara Sakti </span>
                            <br>
                            <span class="text-base md:text-lg font-semibold whitespace-nowrap light:text-white">Yogyakarta</span>
                        </div>
                    </div>
                    <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
                        <a href="" type="button" id="loginButton" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center light:bg-blue-600 light:hover:bg-blue-700 light:focus:ring-blue-800">Login</a>
                        <button @click="open = !open" data-collapse-toggle="navbar-cta" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 light:text-gray-400 light:hover:bg-gray-700 light:focus:ring-gray-600" aria-controls="navbar-cta" aria-expanded="false">
                            <span class="sr-only">Open main menu</span>
                            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15" />
                            </svg>
                        </button>
                    </div>
                    <div :class="{ 'hidden': !open }" class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-cta">
                        <ul class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white light:bg-gray-800 md:light:bg-gray-900 light:border-gray-700">
                            <li>
                                <a href="#" class="block py-2 px-3 md:p-0 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:light:hover:text-blue-500 light:text-white light:hover:bg-gray-700 light:hover:text-white md:light:hover:bg-transparent light:border-gray-700">Beranda</a>
                            </li>
                            <li>
                                <a href="#" class="block py-2 px-3 md:p-0 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 d:light:hover:text-blue-500 light:text-white light:hover:bg-gray-700 light:hover:text-white md:light:hover:bg-transparent light:border-gray-700">Pendaftaran</a>
                            </li>
                            <li>
                                <a href="#" class="block py-2 px-3 md:p-0 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:light:hover:text-blue-500 light:text-white light:hover:bg-gray-700 light:hover:text-white md:light:hover:bg-transparent light:border-gray-700">Informasi</a>
                            </li>
                            <li><a href="" type="button" id="login" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center light:bg-blue-600 light:hover:bg-blue-700 light:focus:ring-blue-800">Login</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <br>
            <main class="h-full pb-16 overflow-y-auto">
                <div class="container px-6 mx-auto grid">
                    <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md light:bg-gray-800">
                        <div class="container mx-auto px-4 md:px-6">
                            <div class="flex items-center justify-between p-4 mb-8 font-semibold text-purple-100 bg-purple-600 rounded-lg shadow-md focus:outline-none focus:shadow-outline-purple">
                                <div class="flex items-center">
                                    <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                        </path>
                                    </svg>
                                    <h1 class="text-2xl">Formulir Pendaftaran</h1>
                                </div>
                            </div>
                        </div>
                        <form>
                            <div class="container mx-auto px-4 md:px-6">
                                <div class="p-4 mb-4 text-sm text-blue-800 rounded-lg bg-blue-50 light:bg-gray-800 light:text-blue-400" role="alert">
                                    <span class="font-medium">Lengkapi Datamu Sekarang. <br></span>Jangan sampai
                                    kehabisan kuota! Sedikit lagi kamu akan terdaftar di perguruan tinggi impianmu.
                                </div>
                            </div>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div class="container mx-auto px-4 md:px-6">
                                    <label for="Name" class="block mb-2 text-sm font-medium text-gray-900 light:text-white">Nama
                                        Lengkap <span class="text-red-500">*</span></label>
                                    <input type="text" id="Name" aria-describedby="helper-text-explanation" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  light:bg-gray-700 light:border-gray-600 light:placeholder-gray-400 light:text-white light:focus:ring-blue-500 light:focus:border-blue-500" placeholder="Isi Nama Lengkap Anda">
                                </div>
                                <div class="container mx-auto px-4 md:px-6">
                                    <span class="block mb-2 text-sm font-medium text-gray-900 light:text-white">
                                        Jenis Kelamin <span class="text-red-500">*</span>
                                    </span>
                                    <div class="mt-2">
                                        <label class="inline-flex items-center text-gray-900 light:text-white">
                                            <input type="radio" class="text-purple-600 form-radio focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray" name="jenis_kelamin" value="Laki-Laki" />
                                            <span class="ml-2">Laki-Laki</span>
                                        </label>
                                        <label class="inline-flex items-center ml-6 text-gray-900 light:text-white">
                                            <input type="radio" class="text-purple-600 form-radio focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray" name="jenis_kelamin" value="Perempuan" />
                                            <span class="ml-2">Perempuan</span>
                                        </label>
                                    </div>
                                </div>

                                <div class="container mx-auto px-4 md:px-6">
                                    <label for="hp" class="block mb-2 text-sm font-medium text-gray-900 light:text-white">No. HP
                                        <span class="text-red-500">*</span></label>
                                    <input type="nomor" id="hp" aria-describedby="helper-text-explanation" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  light:bg-gray-700 light:border-gray-600 light:placeholder-gray-400 light:text-white light:focus:ring-blue-500 light:focus:border-blue-500" placeholder="0821xxxxxxxx">
                                </div>
                                <div class="container mx-auto px-4 md:px-6">
                                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 light:text-white">Alamat
                                        Email <span class="text-red-500">*</span></label>
                                    <input type="email" id="email" aria-describedby="helper-text-explanation" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  light:bg-gray-700 light:border-gray-600 light:placeholder-gray-400 light:text-white light:focus:ring-blue-500 light:focus:border-blue-500" placeholder="email@domain.com">
                                </div>
                                <div class="container mx-auto px-4 md:px-6">
                                    <label for="ttl" class="block mb-2 text-sm font-medium text-gray-900 light:text-white">Tanggal
                                        Lahir <span class="text-red-500">*</span></label>
                                    <input type="date" id="ttl" aria-describedby="helper-text-explanation" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  light:bg-gray-700 light:border-gray-600 light:placeholder-gray-400 light:text-white light:focus:ring-blue-500 light:focus:border-blue-500" placeholder="0821xxxxxxxx">
                                </div>
                                <div class="container mx-auto px-4 md:px-6">
                                    <label for="tempt" class="block mb-2 text-sm font-medium text-gray-900 light:text-white">Tempat
                                        Lahir <span class="text-red-500">*</span></label>
                                    <input type="text" id="tempat" aria-describedby="helper-text-explanation" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  light:bg-gray-700 light:border-gray-600 light:placeholder-gray-400 light:text-white light:focus:ring-blue-500 light:focus:border-blue-500" placeholder="email@domain.com">
                                </div>
                                <div class="container mx-auto px-4 md:px-6">
                                    <label for="negara" class="block mb-2 text-sm font-medium text-gray-900 light:text-white">Kabupaten / Kota
                                        <span class="text-red-500">*</span>
                                    </label>
                                    <div x-data="select({ data: { ht: 'HTML', css: 'CSS', php: 'PHP', java: 'JavaScript', py: 'Python', lara: 'Laravel' }, emptyOptionsMessage: 'No Course Match Your Search.', name: 'course', placeholder: 'Pilih Kewarganegaraan' })" x-init="init()" @click.away="closeListbox()" @keydown.escape="closeListbox()" class="relative">
                                        <span class="inline-block w-full rounded-md shadow-sm">
                                            <button x-ref="button" @click="toggleListboxVisibility($event)" :aria-expanded="open" aria-haspopup="listbox" class="relative z-0 w-full py-2 pl-3 pr-10 text-left transition duration-150 ease-in-out bg-gray-50 border border-gray-300 text-gray-900 rounded-md cursor-default focus:outline-none focus:shadow-outline-blue focus:border-blue-300 sm:text-sm sm:leading-5">
                                                <span x-show="!open" x-text="value in options ? options[value] : placeholder" :class="{ 'text-gray-500': !(value in options) }" class="block truncate"></span>
                                            </button>
                                        </span>
                                        <div x-show="open" x-transition:leave="transition ease-in duration-100" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" x-cloak class="absolute z-10 w-full mt-1 bg-white rounded-md shadow-lg">
                                            <input x-ref="search" x-show="open" x-model="search" @keydown.enter.stop.prevent="selectOption()" @keydown.arrow-up.prevent="focusPreviousOption()" @keydown.arrow-down.prevent="focusNextOption()" type="search" class="relative z-0 w-full py-2 pl-3 pr-10 text-left transition duration-150 ease-in-out bg-gray-50 border border-gray-300 text-gray-900 rounded-md cursor-default focus:outline-none focus:shadow-outline-blue focus:border-blue-300 sm:text-sm sm:leading-5" />
                                            <ul x-ref="listbox" @keydown.enter.stop.prevent="selectOption()" @keydown.arrow-up.prevent="focusPreviousOption()" @keydown.arrow-down.prevent="focusNextOption()" role="listbox" :aria-activedescendant="focusedOptionIndex ? name + 'Option' + focusedOptionIndex : null" tabindex="-1" class="py-1 overflow-auto text-base leading-6 rounded-md shadow-xs max-h-60 focus:outline-none sm:text-sm sm:leading-5">
                                                <template x-for="(key, index) in Object.keys(options)" :key="index">
                                                    <li :id="name + 'Option' + focusedOptionIndex" @click="selectOption()" @mouseenter="focusedOptionIndex = index" @mouseleave="focusedOptionIndex = null" role="option" :aria-selected="focusedOptionIndex === index" :class="{ 'text-white bg-indigo-600': index === focusedOptionIndex, 'text-gray-900': index !== focusedOptionIndex }" class="relative py-2 pl-3 text-gray-900 cursor-default select-none pr-9">
                                                        <span x-text="Object.values(options)[index]" :class="{ 'font-semibold': index === focusedOptionIndex, 'font-normal': index !== focusedOptionIndex }" class="block font-normal truncate"></span>
                                                        <span x-show="key === value" :class="{ 'text-white': index === focusedOptionIndex, 'text-indigo-600': index !== focusedOptionIndex }" class="absolute inset-y-0 right-0 flex items-center pr-4 text-indigo-600">
                                                            <svg class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                                                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                                            </svg>
                                                        </span>
                                                    </li>
                                                </template>
                                                <div x-show="!Object.keys(options).length" x-text="emptyOptionsMessage" class="px-3 py-2 text-gray-900 cursor-default select-none"></div>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="container mx-auto px-4 md:px-6">
                                    <label for="nik" class="block mb-2 text-sm font-medium text-gray-900 light:text-white">NIK / No.
                                        KTP <span class="text-red-500">*</span> </label>
                                    <input type="nomor" id="nik" aria-describedby="helper-text-explanation" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  light:bg-gray-700 light:border-gray-600 light:placeholder-gray-400 light:text-white light:focus:ring-blue-500 light:focus:border-blue-500" placeholder="Isi No. KTP Anda">
                                </div>
                            </div>
                            <br>
                            <!-- Sekolah -->
                            <div class="container mx-auto px-4 md:px-6">
                                <div class="p-4 mb-4 text-sm text-blue-800 rounded-lg bg-blue-50 light:bg-gray-800 light:text-blue-400" role="alert">
                                    <span class="font-medium">Asal Sekolah. <br></span>
                                </div>
                            </div>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <!-- Provinsi -->
                                <div class="container mx-auto px-4 md:px-6" x-data="{ showSchoolInput: false }">
                                    <div x-data="select({ data: { ht: 'HTML', css: 'CSS', php: 'PHP', java: 'JavaScript', py: 'Python', lara: 'Laravel' }, emptyOptionsMessage: 'No Course Match Your Search.', name: 'school', placeholder: 'Pilih Provinsi', showSchoolInput: showSchoolInput })" x-init="init()" @click.away="closeListbox()" @keydown.escape="closeListbox()" class="relative">
                                        <label for="school" class="block mb-2 text-sm font-medium text-gray-900 light:text-white">Provinsi
                                            <span class="text-red-500">*</span>
                                        </label>
                                        <span class="inline-block w-full rounded-md shadow-sm">
                                            <button x-ref="button" @click="toggleListboxVisibility($event)" :aria-expanded="open" aria-haspopup="listbox" class="relative z-0 w-full py-2 pl-3 pr-10 text-left transition duration-150 ease-in-out bg-gray-50 border border-gray-300 text-gray-900 rounded-md cursor-default focus:outline-none focus:shadow-outline-blue focus:border-blue-300 sm:text-sm sm:leading-5">
                                                <span x-show="!open" x-text="value in options ? options[value] : placeholder" :class="{ 'text-gray-500': !(value in options) }" class="block truncate"></span>
                                            </button>
                                        </span>
                                        <div x-show="open" x-transition:leave="transition ease-in duration-100" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" x-cloak class="absolute z-10 w-full mt-1 bg-white rounded-md shadow-lg">
                                            <input x-ref="search" x-show="open" x-model="search" @keydown.enter.stop.prevent="selectOption()" @keydown.arrow-up.prevent="focusPreviousOption()" @keydown.arrow-down.prevent="focusNextOption()" type="search" class="relative z-0 w-full py-2 pl-3 pr-10 text-left transition duration-150 ease-in-out bg-gray-50 border border-gray-300 text-gray-900 rounded-md cursor-default focus:outline-none focus:shadow-outline-blue focus:border-blue-300 sm:text-sm sm:leading-5" />
                                            <ul x-ref="listbox" @keydown.enter.stop.prevent="selectOption()" @keydown.arrow-up.prevent="focusPreviousOption()" @keydown.arrow-down.prevent="focusNextOption()" role="listbox" :aria-activedescendant="focusedOptionIndex ? name + 'Option' + focusedOptionIndex : null" tabindex="-1" class="py-1 overflow-auto text-base leading-6 rounded-md shadow-xs max-h-60 focus:outline-none sm:text-sm sm:leading-5">
                                                <template x-for="(key, index) in Object.keys(options)" :key="index">
                                                    <li :id="name + 'Option' + focusedOptionIndex" @click="selectOption(key)" @mouseenter="focusedOptionIndex = index" @mouseleave="focusedOptionIndex = null" role="option" :aria-selected="focusedOptionIndex === index" :class="{ 'text-white bg-indigo-600': index === focusedOptionIndex, 'text-gray-900': index !== focusedOptionIndex }" class="relative py-2 pl-3 text-gray-900 cursor-default select-none pr-9">
                                                        <span x-text="Object.values(options)[index]" :class="{ 'font-semibold': index === focusedOptionIndex, 'font-normal': index !== focusedOptionIndex }" class="block font-normal truncate"></span>
                                                        <span x-show="key === value" :class="{ 'text-white': index === focusedOptionIndex, 'text-indigo-600': index !== focusedOptionIndex }" class="absolute inset-y-0 right-0 flex items-center pr-4 text-indigo-600">
                                                            <svg class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                                                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                                            </svg>
                                                        </span>
                                                    </li>
                                                </template>
                                                <div x-show="!Object.keys(options).length" x-text="emptyOptionsMessage" class="px-3 py-2 text-gray-900 cursor-default select-none"></div>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- Kabupaten Kota -->
                                <div class="container mx-auto px-4 md:px-6" x-data="{ showSchoolInput: false }">
                                    <div x-data="select({ data: { ht: 'HTML', css: 'CSS', php: 'PHP', java: 'JavaScript', py: 'Python', lara: 'Laravel' }, emptyOptionsMessage: 'No Course Match Your Search.', name: 'school', placeholder: 'Pilih Kabupaten / Kota', showSchoolInput: showSchoolInput })" x-init="init()" @click.away="closeListbox()" @keydown.escape="closeListbox()" class="relative">
                                        <label for="school" class="block mb-2 text-sm font-medium text-gray-900 light:text-white">Kabupaten / Kota
                                            <span class="text-red-500">*</span>
                                        </label>
                                        <span class="inline-block w-full rounded-md shadow-sm">
                                            <button x-ref="button" @click="toggleListboxVisibility($event)" :aria-expanded="open" aria-haspopup="listbox" class="relative z-0 w-full py-2 pl-3 pr-10 text-left transition duration-150 ease-in-out bg-gray-50 border border-gray-300 text-gray-900 rounded-md cursor-default focus:outline-none focus:shadow-outline-blue focus:border-blue-300 sm:text-sm sm:leading-5">
                                                <span x-show="!open" x-text="value in options ? options[value] : placeholder" :class="{ 'text-gray-500': !(value in options) }" class="block truncate"></span>
                                            </button>
                                        </span>
                                        <div x-show="open" x-transition:leave="transition ease-in duration-100" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" x-cloak class="absolute z-10 w-full mt-1 bg-white rounded-md shadow-lg">
                                            <input x-ref="search" x-show="open" x-model="search" @keydown.enter.stop.prevent="selectOption()" @keydown.arrow-up.prevent="focusPreviousOption()" @keydown.arrow-down.prevent="focusNextOption()" type="search" class="relative z-0 w-full py-2 pl-3 pr-10 text-left transition duration-150 ease-in-out bg-gray-50 border border-gray-300 text-gray-900 rounded-md cursor-default focus:outline-none focus:shadow-outline-blue focus:border-blue-300 sm:text-sm sm:leading-5" />
                                            <ul x-ref="listbox" @keydown.enter.stop.prevent="selectOption()" @keydown.arrow-up.prevent="focusPreviousOption()" @keydown.arrow-down.prevent="focusNextOption()" role="listbox" :aria-activedescendant="focusedOptionIndex ? name + 'Option' + focusedOptionIndex : null" tabindex="-1" class="py-1 overflow-auto text-base leading-6 rounded-md shadow-xs max-h-60 focus:outline-none sm:text-sm sm:leading-5">
                                                <template x-for="(key, index) in Object.keys(options)" :key="index">
                                                    <li :id="name + 'Option' + focusedOptionIndex" @click="selectOption(key)" @mouseenter="focusedOptionIndex = index" @mouseleave="focusedOptionIndex = null" role="option" :aria-selected="focusedOptionIndex === index" :class="{ 'text-white bg-indigo-600': index === focusedOptionIndex, 'text-gray-900': index !== focusedOptionIndex }" class="relative py-2 pl-3 text-gray-900 cursor-default select-none pr-9">
                                                        <span x-text="Object.values(options)[index]" :class="{ 'font-semibold': index === focusedOptionIndex, 'font-normal': index !== focusedOptionIndex }" class="block font-normal truncate"></span>
                                                        <span x-show="key === value" :class="{ 'text-white': index === focusedOptionIndex, 'text-indigo-600': index !== focusedOptionIndex }" class="absolute inset-y-0 right-0 flex items-center pr-4 text-indigo-600">
                                                            <svg class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                                                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                                            </svg>
                                                        </span>
                                                    </li>
                                                </template>
                                                <div x-show="!Object.keys(options).length" x-text="emptyOptionsMessage" class="px-3 py-2 text-gray-900 cursor-default select-none"></div>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- Jenis Sekolah -->
                                <div class="container mx-auto px-4 md:px-6" x-data="{ showSchoolInput: false }">
                                    <div x-data="select({ data: { ht: 'HTML', css: 'CSS', php: 'PHP', java: 'JavaScript', py: 'Python', lara: 'Laravel' }, emptyOptionsMessage: 'No Course Match Your Search.', name: 'school', placeholder: 'Pilih Jenis Sekolah', showSchoolInput: showSchoolInput })" x-init="init()" @click.away="closeListbox()" @keydown.escape="closeListbox()" class="relative">
                                        <label for="school" class="block mb-2 text-sm font-medium text-gray-900 light:text-white">Jenis Sekolah
                                            <span class="text-red-500">*</span>
                                        </label>
                                        <span class="inline-block w-full rounded-md shadow-sm">
                                            <button x-ref="button" @click="toggleListboxVisibility($event)" :aria-expanded="open" aria-haspopup="listbox" class="relative z-0 w-full py-2 pl-3 pr-10 text-left transition duration-150 ease-in-out bg-gray-50 border border-gray-300 text-gray-900 rounded-md cursor-default focus:outline-none focus:shadow-outline-blue focus:border-blue-300 sm:text-sm sm:leading-5">
                                                <span x-show="!open" x-text="value in options ? options[value] : placeholder" :class="{ 'text-gray-500': !(value in options) }" class="block truncate"></span>
                                            </button>
                                        </span>
                                        <div x-show="open" x-transition:leave="transition ease-in duration-100" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" x-cloak class="absolute z-10 w-full mt-1 bg-white rounded-md shadow-lg">
                                            <input x-ref="search" x-show="open" x-model="search" @keydown.enter.stop.prevent="selectOption()" @keydown.arrow-up.prevent="focusPreviousOption()" @keydown.arrow-down.prevent="focusNextOption()" type="search" class="relative z-0 w-full py-2 pl-3 pr-10 text-left transition duration-150 ease-in-out bg-gray-50 border border-gray-300 text-gray-900 rounded-md cursor-default focus:outline-none focus:shadow-outline-blue focus:border-blue-300 sm:text-sm sm:leading-5" />
                                            <ul x-ref="listbox" @keydown.enter.stop.prevent="selectOption()" @keydown.arrow-up.prevent="focusPreviousOption()" @keydown.arrow-down.prevent="focusNextOption()" role="listbox" :aria-activedescendant="focusedOptionIndex ? name + 'Option' + focusedOptionIndex : null" tabindex="-1" class="py-1 overflow-auto text-base leading-6 rounded-md shadow-xs max-h-60 focus:outline-none sm:text-sm sm:leading-5">
                                                <template x-for="(key, index) in Object.keys(options)" :key="index">
                                                    <li :id="name + 'Option' + focusedOptionIndex" @click="selectOption(key)" @mouseenter="focusedOptionIndex = index" @mouseleave="focusedOptionIndex = null" role="option" :aria-selected="focusedOptionIndex === index" :class="{ 'text-white bg-indigo-600': index === focusedOptionIndex, 'text-gray-900': index !== focusedOptionIndex }" class="relative py-2 pl-3 text-gray-900 cursor-default select-none pr-9">
                                                        <span x-text="Object.values(options)[index]" :class="{ 'font-semibold': index === focusedOptionIndex, 'font-normal': index !== focusedOptionIndex }" class="block font-normal truncate"></span>
                                                        <span x-show="key === value" :class="{ 'text-white': index === focusedOptionIndex, 'text-indigo-600': index !== focusedOptionIndex }" class="absolute inset-y-0 right-0 flex items-center pr-4 text-indigo-600">
                                                            <svg class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                                                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                                            </svg>
                                                        </span>
                                                    </li>
                                                </template>
                                                <div x-show="!Object.keys(options).length" x-text="emptyOptionsMessage" class="px-3 py-2 text-gray-900 cursor-default select-none"></div>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- NPSSS -->
                                <div class="container mx-auto px-4 md:px-6" x-data="{ showSchoolInput: false }">
                                    <div x-data="select({ data: { ht: 'HTML', css: 'CSS', php: 'PHP', java: 'JavaScript', py: 'Python', lara: 'Laravel' }, emptyOptionsMessage: 'No Course Match Your Search.', name: 'school', placeholder: 'Pilih ', showSchoolInput: showSchoolInput })" x-init="init()" @click.away="closeListbox()" @keydown.escape="closeListbox()" class="relative">
                                        <label for="school" class="block mb-2 text-sm font-medium text-gray-900 light:text-white">NPSN / Nama Sekolah
                                            <span class="text-red-500">*</span>
                                        </label>
                                        <span class="inline-block w-full rounded-md shadow-sm">
                                            <button x-ref="button" @click="toggleListboxVisibility($event)" :aria-expanded="open" aria-haspopup="listbox" class="relative z-0 w-full py-2 pl-3 pr-10 text-left transition duration-150 ease-in-out bg-gray-50 border border-gray-300 text-gray-900 rounded-md cursor-default focus:outline-none focus:shadow-outline-blue focus:border-blue-300 sm:text-sm sm:leading-5">
                                                <span x-show="!open" x-text="value in options ? options[value] : placeholder" :class="{ 'text-gray-500': !(value in options) }" class="block truncate"></span>
                                            </button>
                                        </span>
                                        <div x-show="open" x-transition:leave="transition ease-in duration-100" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" x-cloak class="absolute z-10 w-full mt-1 bg-white rounded-md shadow-lg">
                                            <input x-ref="search" x-show="open" x-model="search" @keydown.enter.stop.prevent="selectOption()" @keydown.arrow-up.prevent="focusPreviousOption()" @keydown.arrow-down.prevent="focusNextOption()" type="search" class="relative z-0 w-full py-2 pl-3 pr-10 text-left transition duration-150 ease-in-out bg-gray-50 border border-gray-300 text-gray-900 rounded-md cursor-default focus:outline-none focus:shadow-outline-blue focus:border-blue-300 sm:text-sm sm:leading-5" />
                                            <ul x-ref="listbox" @keydown.enter.stop.prevent="selectOption()" @keydown.arrow-up.prevent="focusPreviousOption()" @keydown.arrow-down.prevent="focusNextOption()" role="listbox" :aria-activedescendant="focusedOptionIndex ? name + 'Option' + focusedOptionIndex : null" tabindex="-1" class="py-1 overflow-auto text-base leading-6 rounded-md shadow-xs max-h-60 focus:outline-none sm:text-sm sm:leading-5">
                                                <template x-for="(key, index) in Object.keys(options)" :key="index">
                                                    <li :id="name + 'Option' + focusedOptionIndex" @click="selectOption(key)" @mouseenter="focusedOptionIndex = index" @mouseleave="focusedOptionIndex = null" role="option" :aria-selected="focusedOptionIndex === index" :class="{ 'text-white bg-indigo-600': index === focusedOptionIndex, 'text-gray-900': index !== focusedOptionIndex }" class="relative py-2 pl-3 text-gray-900 cursor-default select-none pr-9">
                                                        <span x-text="Object.values(options)[index]" :class="{ 'font-semibold': index === focusedOptionIndex, 'font-normal': index !== focusedOptionIndex }" class="block font-normal truncate"></span>
                                                        <span x-show="key === value" :class="{ 'text-white': index === focusedOptionIndex, 'text-indigo-600': index !== focusedOptionIndex }" class="absolute inset-y-0 right-0 flex items-center pr-4 text-indigo-600">
                                                            <svg class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                                                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                                            </svg>
                                                        </span>
                                                    </li>
                                                </template>
                                                <div x-show="!Object.keys(options).length" x-text="emptyOptionsMessage" class="px-3 py-2 text-gray-900 cursor-default select-none"></div>
                                            </ul>
                                        </div>
                                    </div>

                                    <span>
                                        <p id="helper-text-explanation" class="mt-2 text-sm text-gray-500 dark:text-gray-400">Jika data tidak ditemukan, silakan <button @click.prevent="showSchoolInput = true" class="font-medium text-blue-600 hover:underline dark:text-blue-500">+Tambah Sekolah</button>.</p>
                                    </span>

                                    <template x-if="showSchoolInput">
                                        <div>
                                            <label for="schoolInput" class="block mt-2 text-sm font-medium text-gray-900 light:text-white">Tambah Sekolah</label>
                                            <input type="text" id="schoolInput" name="schoolInput" placeholder="Masukkan nama sekolah" class="w-full px-3 py-2 leading-6 text-gray-900 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                                        </div>
                                        <!-- Tambah input lainnya di sini -->
                                        <div>
                                            <label for="otherInput" class="block mt-2 text-sm font-medium text-gray-900 light:text-white">Input Lainnya</label>
                                            <input type="text" id="otherInput" name="otherInput" placeholder="Masukkan informasi tambahan" class="w-full px-3 py-2 leading-6 text-gray-900 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                                        </div>
                                    </template>
                                </div>
                                <!-- Jurusan -->
                                <div class="container mx-auto px-4 md:px-6" x-data="{ showSchoolInput: false }">
                                    <div x-data="select({ data: { ht: 'HTML', css: 'CSS', php: 'PHP', java: 'JavaScript', py: 'Python', lara: 'Laravel' }, emptyOptionsMessage: 'No Course Match Your Search.', name: 'school', placeholder: 'Pilih Jurusan', showSchoolInput: showSchoolInput })" x-init="init()" @click.away="closeListbox()" @keydown.escape="closeListbox()" class="relative">
                                        <label for="school" class="block mb-2 text-sm font-medium text-gray-900 light:text-white">Jurusan
                                            <span class="text-red-500">*</span>
                                        </label>
                                        <span class="inline-block w-full rounded-md shadow-sm">
                                            <button x-ref="button" @click="toggleListboxVisibility($event)" :aria-expanded="open" aria-haspopup="listbox" class="relative z-0 w-full py-2 pl-3 pr-10 text-left transition duration-150 ease-in-out bg-gray-50 border border-gray-300 text-gray-900 rounded-md cursor-default focus:outline-none focus:shadow-outline-blue focus:border-blue-300 sm:text-sm sm:leading-5">
                                                <span x-show="!open" x-text="value in options ? options[value] : placeholder" :class="{ 'text-gray-500': !(value in options) }" class="block truncate"></span>
                                            </button>
                                        </span>
                                        <div x-show="open" x-transition:leave="transition ease-in duration-100" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" x-cloak class="absolute z-10 w-full mt-1 bg-white rounded-md shadow-lg">
                                            <input x-ref="search" x-show="open" x-model="search" @keydown.enter.stop.prevent="selectOption()" @keydown.arrow-up.prevent="focusPreviousOption()" @keydown.arrow-down.prevent="focusNextOption()" type="search" class="relative z-0 w-full py-2 pl-3 pr-10 text-left transition duration-150 ease-in-out bg-gray-50 border border-gray-300 text-gray-900 rounded-md cursor-default focus:outline-none focus:shadow-outline-blue focus:border-blue-300 sm:text-sm sm:leading-5" />
                                            <ul x-ref="listbox" @keydown.enter.stop.prevent="selectOption()" @keydown.arrow-up.prevent="focusPreviousOption()" @keydown.arrow-down.prevent="focusNextOption()" role="listbox" :aria-activedescendant="focusedOptionIndex ? name + 'Option' + focusedOptionIndex : null" tabindex="-1" class="py-1 overflow-auto text-base leading-6 rounded-md shadow-xs max-h-60 focus:outline-none sm:text-sm sm:leading-5">
                                                <template x-for="(key, index) in Object.keys(options)" :key="index">
                                                    <li :id="name + 'Option' + focusedOptionIndex" @click="selectOption(key)" @mouseenter="focusedOptionIndex = index" @mouseleave="focusedOptionIndex = null" role="option" :aria-selected="focusedOptionIndex === index" :class="{ 'text-white bg-indigo-600': index === focusedOptionIndex, 'text-gray-900': index !== focusedOptionIndex }" class="relative py-2 pl-3 text-gray-900 cursor-default select-none pr-9">
                                                        <span x-text="Object.values(options)[index]" :class="{ 'font-semibold': index === focusedOptionIndex, 'font-normal': index !== focusedOptionIndex }" class="block font-normal truncate"></span>
                                                        <span x-show="key === value" :class="{ 'text-white': index === focusedOptionIndex, 'text-indigo-600': index !== focusedOptionIndex }" class="absolute inset-y-0 right-0 flex items-center pr-4 text-indigo-600">
                                                            <svg class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                                                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                                            </svg>
                                                        </span>
                                                    </li>
                                                </template>
                                                <div x-show="!Object.keys(options).length" x-text="emptyOptionsMessage" class="px-3 py-2 text-gray-900 cursor-default select-none"></div>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- Tahun Lulus -->
                                <div class="container mx-auto px-4 md:px-6" x-data="{ showSchoolInput: false }">
                                    <div x-data="select({ data: { ht: 'HTML', css: 'CSS', php: 'PHP', java: 'JavaScript', py: 'Python', lara: 'Laravel' }, emptyOptionsMessage: 'No Course Match Your Search.', name: 'school', placeholder: 'Pilih Tahun Lulus', showSchoolInput: showSchoolInput })" x-init="init()" @click.away="closeListbox()" @keydown.escape="closeListbox()" class="relative">
                                        <label for="school" class="block mb-2 text-sm font-medium text-gray-900 light:text-white">Tahun lulus
                                            <span class="text-red-500">*</span>
                                        </label>
                                        <span class="inline-block w-full rounded-md shadow-sm">
                                            <button x-ref="button" @click="toggleListboxVisibility($event)" :aria-expanded="open" aria-haspopup="listbox" class="relative z-0 w-full py-2 pl-3 pr-10 text-left transition duration-150 ease-in-out bg-gray-50 border border-gray-300 text-gray-900 rounded-md cursor-default focus:outline-none focus:shadow-outline-blue focus:border-blue-300 sm:text-sm sm:leading-5">
                                                <span x-show="!open" x-text="value in options ? options[value] : placeholder" :class="{ 'text-gray-500': !(value in options) }" class="block truncate"></span>
                                            </button>
                                        </span>
                                        <div x-show="open" x-transition:leave="transition ease-in duration-100" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" x-cloak class="absolute z-10 w-full mt-1 bg-white rounded-md shadow-lg">
                                            <input x-ref="search" x-show="open" x-model="search" @keydown.enter.stop.prevent="selectOption()" @keydown.arrow-up.prevent="focusPreviousOption()" @keydown.arrow-down.prevent="focusNextOption()" type="search" class="relative z-0 w-full py-2 pl-3 pr-10 text-left transition duration-150 ease-in-out bg-gray-50 border border-gray-300 text-gray-900 rounded-md cursor-default focus:outline-none focus:shadow-outline-blue focus:border-blue-300 sm:text-sm sm:leading-5" />
                                            <ul x-ref="listbox" @keydown.enter.stop.prevent="selectOption()" @keydown.arrow-up.prevent="focusPreviousOption()" @keydown.arrow-down.prevent="focusNextOption()" role="listbox" :aria-activedescendant="focusedOptionIndex ? name + 'Option' + focusedOptionIndex : null" tabindex="-1" class="py-1 overflow-auto text-base leading-6 rounded-md shadow-xs max-h-60 focus:outline-none sm:text-sm sm:leading-5">
                                                <template x-for="(key, index) in Object.keys(options)" :key="index">
                                                    <li :id="name + 'Option' + focusedOptionIndex" @click="selectOption(key)" @mouseenter="focusedOptionIndex = index" @mouseleave="focusedOptionIndex = null" role="option" :aria-selected="focusedOptionIndex === index" :class="{ 'text-white bg-indigo-600': index === focusedOptionIndex, 'text-gray-900': index !== focusedOptionIndex }" class="relative py-2 pl-3 text-gray-900 cursor-default select-none pr-9">
                                                        <span x-text="Object.values(options)[index]" :class="{ 'font-semibold': index === focusedOptionIndex, 'font-normal': index !== focusedOptionIndex }" class="block font-normal truncate"></span>
                                                        <span x-show="key === value" :class="{ 'text-white': index === focusedOptionIndex, 'text-indigo-600': index !== focusedOptionIndex }" class="absolute inset-y-0 right-0 flex items-center pr-4 text-indigo-600">
                                                            <svg class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                                                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                                            </svg>
                                                        </span>
                                                    </li>
                                                </template>
                                                <div x-show="!Object.keys(options).length" x-text="emptyOptionsMessage" class="px-3 py-2 text-gray-900 cursor-default select-none"></div>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div><br>
                            <!-- program Studi -->
                            <div class="container mx-auto px-4 md:px-6">
                                <div class="p-4 mb-4 text-sm text-blue-800 rounded-lg bg-blue-50 light:bg-gray-800 light:text-blue-400" role="alert">
                                    <span class="font-medium">Pilihan Program Studi.<br></span>
                                </div>
                            </div>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div class="container mx-auto px-4 md:px-6" x-data="{ showSchoolInput: false }">
                                    <div x-data="select({ data: { ht: 'HTML', css: 'CSS', php: 'PHP', java: 'JavaScript', py: 'Python', lara: 'Laravel' }, emptyOptionsMessage: 'No Course Match Your Search.', name: 'school', placeholder: 'Pilih Program Studi', showSchoolInput: showSchoolInput })" x-init="init()" @click.away="closeListbox()" @keydown.escape="closeListbox()" class="relative">
                                        <label for="school" class="block mb-2 text-sm font-medium text-gray-900 light:text-white">Program Studi
                                            <span class="text-red-500">*</span>
                                        </label>
                                        <span class="inline-block w-full rounded-md shadow-sm">
                                            <button x-ref="button" @click="toggleListboxVisibility($event)" :aria-expanded="open" aria-haspopup="listbox" class="relative z-0 w-full py-2 pl-3 pr-10 text-left transition duration-150 ease-in-out bg-gray-50 border border-gray-300 text-gray-900 rounded-md cursor-default focus:outline-none focus:shadow-outline-blue focus:border-blue-300 sm:text-sm sm:leading-5">
                                                <span x-show="!open" x-text="value in options ? options[value] : placeholder" :class="{ 'text-gray-500': !(value in options) }" class="block truncate"></span>
                                            </button>
                                        </span>
                                        <div x-show="open" x-transition:leave="transition ease-in duration-100" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" x-cloak class="absolute z-10 w-full mt-1 bg-white rounded-md shadow-lg">
                                            <input x-ref="search" x-show="open" x-model="search" @keydown.enter.stop.prevent="selectOption()" @keydown.arrow-up.prevent="focusPreviousOption()" @keydown.arrow-down.prevent="focusNextOption()" type="search" class="relative z-0 w-full py-2 pl-3 pr-10 text-left transition duration-150 ease-in-out bg-gray-50 border border-gray-300 text-gray-900 rounded-md cursor-default focus:outline-none focus:shadow-outline-blue focus:border-blue-300 sm:text-sm sm:leading-5" />
                                            <ul x-ref="listbox" @keydown.enter.stop.prevent="selectOption()" @keydown.arrow-up.prevent="focusPreviousOption()" @keydown.arrow-down.prevent="focusNextOption()" role="listbox" :aria-activedescendant="focusedOptionIndex ? name + 'Option' + focusedOptionIndex : null" tabindex="-1" class="py-1 overflow-auto text-base leading-6 rounded-md shadow-xs max-h-60 focus:outline-none sm:text-sm sm:leading-5">
                                                <template x-for="(key, index) in Object.keys(options)" :key="index">
                                                    <li :id="name + 'Option' + focusedOptionIndex" @click="selectOption(key)" @mouseenter="focusedOptionIndex = index" @mouseleave="focusedOptionIndex = null" role="option" :aria-selected="focusedOptionIndex === index" :class="{ 'text-white bg-indigo-600': index === focusedOptionIndex, 'text-gray-900': index !== focusedOptionIndex }" class="relative py-2 pl-3 text-gray-900 cursor-default select-none pr-9">
                                                        <span x-text="Object.values(options)[index]" :class="{ 'font-semibold': index === focusedOptionIndex, 'font-normal': index !== focusedOptionIndex }" class="block font-normal truncate"></span>
                                                        <span x-show="key === value" :class="{ 'text-white': index === focusedOptionIndex, 'text-indigo-600': index !== focusedOptionIndex }" class="absolute inset-y-0 right-0 flex items-center pr-4 text-indigo-600">
                                                            <svg class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                                                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                                            </svg>
                                                        </span>
                                                    </li>
                                                </template>
                                                <div x-show="!Object.keys(options).length" x-text="emptyOptionsMessage" class="px-3 py-2 text-gray-900 cursor-default select-none"></div>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div><br>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 justify-end">
                                <div class="container mx-auto px-4 md:px-6">
                                    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </main>
        </div>
    </div>

    <!-- Alpine.js script -->
    <script>
        function select(config) {
            return {
                data: config.data,
                emptyOptionsMessage: config.emptyOptionsMessage ?? 'No results match your search.',
                focusedOptionIndex: null,
                name: config.name,
                open: false,
                options: {},
                placeholder: config.placeholder ?? 'Select an option',
                search: '',
                value: config.value,
                closeListbox() {
                    this.open = false;
                    this.focusedOptionIndex = null;
                    this.search = '';
                },
                focusNextOption() {
                    if (this.focusedOptionIndex === null) return this.focusedOptionIndex = Object.keys(this.options).length - 1;

                    if (this.focusedOptionIndex + 1 >= Object.keys(this.options).length) return;

                    this.focusedOptionIndex++;

                    this.$refs.listbox.children[this.focusedOptionIndex].scrollIntoView({
                        block: "center"
                    });
                },
                focusPreviousOption() {
                    if (this.focusedOptionIndex === null) return this.focusedOptionIndex = 0;

                    if (this.focusedOptionIndex <= 0) return;

                    this.focusedOptionIndex--;

                    this.$refs.listbox.children[this.focusedOptionIndex].scrollIntoView({
                        block: "center"
                    });
                },
                init() {
                    this.options = this.data;

                    if (!(this.value in this.options)) this.value = null;

                    this.$watch('search', ((value) => {
                        if (!this.open || !value) return this.options = this.data;

                        this.options = Object.keys(this.data)
                            .filter((key) => this.data[key].toLowerCase().includes(value.toLowerCase()))
                            .reduce((options, key) => {
                                options[key] = this.data[key];
                                return options;
                            }, {});
                    }));
                },
                selectOption(key) {
                    if (!this.open) return this.toggleListboxVisibility();

                    if (key === this.value) {
                        this.value = null; // Batalkan pilihan jika sudah dipilih
                    } else {
                        this.value = key;
                    }

                    this.closeListbox();
                },
                toggleListboxVisibility(event) {
                    event.preventDefault(); // Menghentikan perilaku default dari tombol

                    if (this.open) return this.closeListbox();

                    this.focusedOptionIndex = Object.keys(this.options).indexOf(this.value);

                    if (this.focusedOptionIndex < 0) this.focusedOptionIndex = 0;

                    this.open = true;

                    this.$nextTick(() => {
                        this.$refs.search.focus();
                    });
                }
            }
        }
    </script>



    <script>
        // Function to toggle visibility of login buttons based on window size
        function toggleLoginButtonVisibility() {
            var loginButton = document.getElementById('loginButton');
            var login = document.getElementById('login');

            // Check window width
            if (window.innerWidth <= 450) {
                // Hide loginButton and show login
                loginButton.style.display = 'none';
                login.style.display = 'inline-block';
            } else {
                // Show loginButton and hide login
                loginButton.style.display = 'inline-block';
                login.style.display = 'none';
            }
        }

        // Add event listener for window resize
        window.addEventListener('resize', function() {
            toggleLoginButtonVisibility();
        });

        // Initial check on page load
        window.addEventListener('load', function() {
            toggleLoginButtonVisibility();
        });
    </script>
</body>

</html>