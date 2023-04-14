<title>Light Service | Data Pendapatan</title>

<x-app-layout>

@include('home.side-bar')

<div class="h-screen ml-14 md:ml-64">

    <h2 class="text-3xl mt-4 items-center text-center text-gray-400 mb-5">Data Pendapatan</h2>
    
    <div class="flex justify-between mb-2">
        {{-- progress hari ini --}}
        <div class="flex items-start ml-5">
            <div class="items-start mr-5">
                <button class="btn gap-2 text-xs">
                    Servis masuk hari ini
                    <div class="badge badge-primary">+9</div>
                </button>
                <button class="btn gap-2 text-xs">
                    Servis ditangani hari ini
                    <div class="badge badge-secondary">+10</div>
                </button>
                <button class="btn gap-2 text-xs">
                    Servis Keluar hari ini
                    <div class="badge badge-accent">+7</div>
                </button>
            </div>
        </div>

        {{-- Sorting dan tambah pelanggan --}}
        <div class="flex items-center mr-5 ml-2.5">
            <button type="button" class="p-1.5 lg:p-2.5 -ml-2 bg-blue-700 rounded-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                <svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="h-5 w-5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 4.5h14.25M3 9h9.75M3 13.5h9.75m4.5-4.5v12m0 0l-3.75-3.75M17.25 21L21 17.25"></path>
                </svg>
            </button>
        </div>
    
    </div>

    {{-- Tabel data report harian --}}

       <div class="mt-0.5 mx-4">
           <div class="w-full overflow-hidden rounded-lg shadow-xs">
           <div class="w-full overflow-x-auto">
               <table class="w-full">
               <thead>
                   <tr class="text-xs font-semibold tracking-wide text-left uppercase border-b dark:border-gray-700 text-gray-400 bg-gray-800">
                   <th class="px-4 py-3">Hari</th>
                   <th class="px-4 py-3">Tanggal</th>
                   <th class="px-4 py-3">Barang Servis Masuk</th>
                   <th class="px-4 py-3">Barang Servis Selesai</th>
                   <th class="px-4 py-3">Barang Servis Keluar</th>
                   <th class="px-4 py-3">Total Pemasukan (Rp)</th>
                   </tr>
               </thead>

               <tbody class="divide-y divide-gray-700 dark:bg-gray-800 bg-gray-700">
                   <tr class="dark:bg-gray-800 dark:hover:bg-gray-900 text-gray-300 dark:text-gray-400">
                   <td class="px-4 py-3 text-sm">Senin</td>
                   <td class="px-4 py-3 text-sm">10 april 2023</td>
                   <td class="px-4 py-3 text-sm">3 barang</td>
                   <td class="px-4 py-3 text-sm">5 barang</td>
                   <td class="px-4 py-3 text-sm">1 barang</td>
                   <td class="px-4 py-3 text-sm">Rp. 2.500.000</td>
                   </tr>
               
               
                <tr class="dark:bg-gray-800 dark:hover:bg-gray-900 text-gray-300 dark:text-gray-400">
                <td class="px-4 py-3 text-sm">Selasa</td>
                <td class="px-4 py-3 text-sm">11 april 2023</td>
                <td class="px-4 py-3 text-sm">2 barang</td>
                <td class="px-4 py-3 text-sm">5 barang</td>
                <td class="px-4 py-3 text-sm">6 barang</td>
                <td class="px-4 py-3 text-sm">Rp. 8.500.000</td>
                </tr>
                

                <tr class="dark:bg-gray-800 dark:hover:bg-gray-900 text-gray-300 dark:text-gray-400">
                <td class="px-4 py-3 text-sm">Rabu</td>
                <td class="px-4 py-3 text-sm">12 april 2023</td>
                <td class="px-4 py-3 text-sm">2 barang</td>
                <td class="px-4 py-3 text-sm">5 barang</td>
                <td class="px-4 py-3 text-sm">6 barang</td>
                <td class="px-4 py-3 text-sm">Rp. 8.500.000</td>
                </tr>

                </tbody>

               </table>
           </div>
           <div class="grid px-4 py-3 text-xs font-semibold tracking-wide text-gray-500 uppercase border-t dark:border-gray-700 sm:grid-cols-9 dark:text-gray-400  dark:bg-gray-800 divide-gray-700 bg-gray-700">
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