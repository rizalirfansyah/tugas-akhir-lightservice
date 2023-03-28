<title>Light Service | Bisa Diambil</title>

<x-app-layout>

@include('home.side-bar')

<div class="h-screen ml-14 mb-10 md:ml-64">

    <div class="flex justify-between">
    {{-- Search bar --}}
        <form class="flex items-center pt-4 space-x-1 ml-3">
            <label for="simple-search" class="sr-only">Search</label>
            <div class="relative w-32 lg:w-96 md:w-80 sm:w-72">
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                    <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
                </div>
                <input type="text" id="simple-search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Cari pelanggan..." required>
            </div>
            <button class="p-1.5 lg:p-2.5 -ml-2 text-sm font-medium text-white bg-blue-700 rounded-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-600">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                <span class="sr-only">Search</span>
            </button>
        </form>

    {{-- Sorting dan tambah pelanggan --}}
        <div class="flex items-center mr-5 ml-2.5">
            <button type="button" class="p-1.5 lg:p-2.5 -ml-2 bg-blue-700 rounded-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                <svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="h-5 w-5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 4.5h14.25M3 9h9.75M3 13.5h9.75m4.5-4.5v12m0 0l-3.75-3.75M17.25 21L21 17.25"></path>
                </svg>
            </button>

            {{-- <button type="button" class="p-2.5 ml-2 bg-gray-400 rounded-lg border border-blue-700 hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-blue-700 dark:bg-blue-600 dark:hover:bg-gray-700 dark:focus:ring-blue-800 text-sm">Export ke excel</button> --}}

            {{-- <button type="button" class="p-1 lg:p-2.5 ml-2 bg-gray-400 rounded-lg border border-blue-700 hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-blue-700 dark:bg-blue-600 dark:hover:bg-gray-700 dark:focus:ring-blue-800 text-xs lg:text-sm md:text-sm sm:text-xs">Tambah pelanggan</button> --}}
        </div>

    </div>
    
    
    <!-- Pelanggan Table -->
    <div class="mt-0.5 mx-4">
        <div class="w-full overflow-hidden rounded-lg shadow-xs">
        <div class="w-full overflow-x-auto">
            <table class="w-full">
            <thead>
                <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                <th class="px-4 py-3">#</th>
                <th class="px-4 py-3">No.Servis</th>
                <th class="px-4 py-3">Tgl. Terima</th>
                <th class="px-4 py-3">Pemilik</th>
                <th class="px-4 py-3">Chat</th>
                <th class="px-4 py-3">Nama Barang</th>
                <th class="px-4 py-3">Kelengkapan</th>
                <th class="px-4 py-3">Data kerusakan</th>
                <th class="px-4 py-3">Kondisi</th>
                <th class="px-4 py-3">Biaya</th>
                <th class="px-4 py-3">Detail status</th>
                <th class="px-4 py-3">Ubah status</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                <tr class="bg-gray-50 dark:bg-gray-800 hover:bg-gray-100 dark:hover:bg-gray-900 text-gray-700 dark:text-gray-400">
                <td class="px-4 py-3 text-sm">1</td>
                <td class="px-4 py-3 text-sm">0129529192</td>
                <td class="px-4 py-3 text-sm">15-01-2021</td>
                <td class="px-4 py-3 text-sm">Hans burger</td>
                <td class="px-4 py-3 text-sm items-center">
                    <div class="px-2 py-2 items-center">
                        <a href="" class="relative inline-flex transititext-primary text-primary transition duration-150 ease-in-out hover:text-primary-600 focus:text-primary-600 active:text-primary-700 dark:text-primary-400 dark:hover:text-primary-500 dark:focus:text-primary-500 dark:active:text-primary-600" data-te-toggle="tooltip" title="whatsapp">
                            <img src="img/homeicon/whatsapp.svg" alt="" class="w-5 h-5">
                        </a>
                        <a href="" class="relative transititext-primary text-primary transition duration-150 ease-in-out hover:text-primary-600 focus:text-primary-600 active:text-primary-700 dark:text-primary-400 dark:hover:text-primary-500 dark:focus:text-primary-500 dark:active:text-primary-600" data-te-toggle="tooltip" title="konfirmasi servis">
                            <img src="img/homeicon/rupiah.svg" alt="" class="mt-1 w-5 h-5">
                        </a>
                    </div>
                </td>
                <td class="px-4 py-3 text-sm">iPhone 7 plus</td>
                <td class="px-4 py-3 text-sm">Unit</td>
                <td class="px-4 py-3 text-sm">LCD Retak</td>
                <td class="px-4 py-3 text-xs sm:text-xs">
                    <span class="px-2 py-1 font-semibold leading-tight text-white bg-blue-700 rounded-full items-center text-center"> Selesai </span>
                </td>
                <td class="px-4 py-3 text-sm">Rp.850.000</td>
                <td class="px-4 py-3 text-xs flex mt-9 lg:mt-6 md:mt-9 sm:mt-6">
                    <span class="px-2 py-1 flex font-semibold leading-tight text-white bg-blue-700 rounded-full items-center text-center"> Bisa Diambil </span>
                </td>
                <td class="px-4 py-3">
                    <button class="relative inline-flex items-center justify-center p-0.5 mb-2 mr-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-cyan-500 to-blue-500 group-hover:from-cyan-500 group-hover:to-blue-500 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-cyan-200 dark:focus:ring-cyan-800">
                        <span class="text-xs relative px-1 py-1 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                            Sudah Diambil
                        </span>
                    </button>
                    <button class="relative inline-flex items-center justify-center p-0.5 mb-2 mr-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-pink-500 to-orange-400 group-hover:from-pink-500 group-hover:to-orange-400 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-pink-200 dark:focus:ring-pink-800">
                        <span class="text-xs relative px-1 py-1 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                            Servis Lagi
                        </span>
                      </button>
                </td>
                </tr>

                <tr class="bg-gray-50 dark:bg-gray-800 hover:bg-gray-100 dark:hover:bg-gray-900 text-gray-700 dark:text-gray-400">
                <td class="px-4 py-3 text-sm">2</td>
                <td class="px-4 py-3 text-sm">0215192512</td>
                <td class="px-4 py-3 text-sm">23-03-2021</td>
                <td class="px-4 py-3 text-sm">Steven kebab</td>
                <td class="px-4 py-3 text-sm">
                    <div class="px-2 py-2 items-center">
                        <a href="" class="relative inline-flex transititext-primary text-primary transition duration-150 ease-in-out hover:text-primary-600 focus:text-primary-600 active:text-primary-700 dark:text-primary-400 dark:hover:text-primary-500 dark:focus:text-primary-500 dark:active:text-primary-600" data-te-toggle="tooltip" title="whatsapp">
                            <img src="img/homeicon/whatsapp.svg" alt="" class="w-5 h-5">
                        </a>
                        <a href="" class="relative transititext-primary text-primary transition duration-150 ease-in-out hover:text-primary-600 focus:text-primary-600 active:text-primary-700 dark:text-primary-400 dark:hover:text-primary-500 dark:focus:text-primary-500 dark:active:text-primary-600" data-te-toggle="tooltip" title="konfirmasi servis">
                            <img src="img/homeicon/rupiah.svg" alt="" class=" mt-1 w-5 h-5">
                        </a>
                    </div>
                </td>
                <td class="px-4 py-3 text-sm">Laptop asus tuf FX505dt</td>
                <td class="px-4 py-3 text-sm">Unit, adapter</td>
                <td class="px-4 py-3 text-sm">Single fan, deep cleaning</td>
                <td class="px-4 py-3 text-xs">
                    <span class="px-2 py-1 font-semibold leading-tight text-white bg-red-700 rounded-full items-center text-center"> Dibatalkan </span>
                </td>
                <td class="px-4 py-3 text-sm">Rp.1.250.000</td>
                <td class="px-4 py-3 text-xs flex mt-9 lg:mt-6 md:mt-9 sm:mt-6">
                    <span class="px-2 py-1 flex font-semibold leading-tight text-white bg-blue-700 rounded-full items-center text-center"> Bisa Diambil </span>
                </td>
                <td class="px-4 py-3">
                    <button class="relative inline-flex items-center justify-center p-0.5 mb-2 mr-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-cyan-500 to-blue-500 group-hover:from-cyan-500 group-hover:to-blue-500 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-cyan-200 dark:focus:ring-cyan-800">
                        <span class="text-xs relative px-1 py-1 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                            Sudah Diambil
                        </span>
                    </button>
                    <button class="relative inline-flex items-center justify-center p-0.5 mb-2 mr-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-pink-500 to-orange-400 group-hover:from-pink-500 group-hover:to-orange-400 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-pink-200 dark:focus:ring-pink-800">
                        <span class="text-xs relative px-1 py-1 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                            Servis Lagi
                        </span>
                      </button>
                </td>
                </tr>
            </tbody>
            </table>
        </div>
        <div class="grid px-4 py-3 text-xs font-semibold tracking-wide text-gray-500 uppercase border-t dark:border-gray-700 bg-gray-50 sm:grid-cols-9 dark:text-gray-400 dark:bg-gray-800">
            <span class="flex items-center col-span-3"></span>
            <span class="col-span-2"></span>
            <!-- Pagination -->
            <span class="flex col-span-4 mt-2 sm:mt-auto sm:justify-end">
            <nav aria-label="Table navigation">
                <ul class="inline-flex items-center">
                <li>
                    <button class="px-3 py-1 rounded-md rounded-l-lg focus:outline-none focus:shadow-outline-purple" aria-label="Previous">
                    <svg aria-hidden="true" class="w-4 h-4 fill-current" viewBox="0 0 20 20">
                        <path d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" fill-rule="evenodd"></path>
                    </svg>
                    </button>
                </li>
                <li>
                    <button class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple">1</button>
                </li>
                <li>
                    <button class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple">2</button>
                </li>
                <li>
                    <button class="px-3 py-1 text-white dark:text-gray-800 transition-colors duration-150 bg-blue-600 dark:bg-gray-100 border border-r-0 border-blue-600 dark:border-gray-100 rounded-md focus:outline-none focus:shadow-outline-purple">3</button>
                </li>
                <li>
                    <button class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple">4</button>
                </li>
                <li>
                    <span class="px-3 py-1">...</span>
                </li>
                <li>
                    <button class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple">8</button>
                </li>
                <li>
                    <button class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple">9</button>
                </li>
                <li>
                    <button class="px-3 py-1 rounded-md rounded-r-lg focus:outline-none focus:shadow-outline-purple" aria-label="Next">
                    <svg class="w-4 h-4 fill-current" aria-hidden="true" viewBox="0 0 20 20">
                        <path d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" fill-rule="evenodd"></path>
                    </svg>
                    </button>
                </li>
                </ul>
            </nav>
            </span>
        </div>
        </div>
    </div>
    <!-- ./Pelanggan Table -->
</div>


</x-app-layout>