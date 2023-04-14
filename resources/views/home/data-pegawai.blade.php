<title>Light Service | Data Pegawai</title>

<x-app-layout>

@include('home.side-bar')

<div class="h-screen ml-14 md:ml-64">

    <h2 class="text-3xl mt-4 items-center text-center text-gray-400 mb-5">Data Pegawai</h2>
    
    <div class="flex mb-2 justify-end">

        {{-- Sorting data --}}
        <div class="flex items-center mr-5 ml-2.5">
            <button class="ml-2 p-1.5 lg:p-2.5 bg-blue-700 rounded-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
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
                   <th class="px-4 py-3">#</th>
                   <th class="px-4 py-3">Nama</th>
                   <th class="px-4 py-3">Alamat</th>
                   <th class="px-4 py-3">Nomor Telepon</th>
                   <th class="px-4 py-3">Email</th>
                   </tr>
               </thead>

               <tbody class="divide-y divide-gray-700 dark:bg-gray-800 bg-gray-700">
                   <tr class="dark:bg-gray-800 dark:hover:bg-gray-900 text-gray-300 dark:text-gray-400">
                   <td class="px-4 py-3 text-sm">1</td>
                   <td class="px-4 py-3 text-sm">Radit</td>
                   <td class="px-4 py-3 text-sm">Desa Ngameplsari, Sidoajo</td>
                   <td class="px-4 py-3 text-sm">0821151212</td>
                   <td class="px-4 py-3 text-sm">test@gmail.com</td>
                   </tr>
               
               
                    <tr class="dark:bg-gray-800 dark:hover:bg-gray-900 text-gray-300 dark:text-gray-400">
                    <td class="px-4 py-3 text-sm">2</td>
                    <td class="px-4 py-3 text-sm">Tya</td>
                    <td class="px-4 py-3 text-sm">Jalan Krukah selatam no.192</td>
                    <td class="px-4 py-3 text-sm">0876121231</td>
                    <td class="px-4 py-3 text-sm">testcioy@gmail.com</td>
                    </tr>
                

                    <tr class="dark:bg-gray-800 dark:hover:bg-gray-900 text-gray-300 dark:text-gray-400">
                    <td class="px-4 py-3 text-sm">3</td>
                    <td class="px-4 py-3 text-sm">Dika</td>
                    <td class="px-4 py-3 text-sm">Jalan Buntu no.2</td>
                    <td class="px-4 py-3 text-sm">0812112412</td>
                    <td class="px-4 py-3 text-sm">testiniemail@gmail.com</td>
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