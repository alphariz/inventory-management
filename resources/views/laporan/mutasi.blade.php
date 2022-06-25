<x-app-layout title="Mutasi">
    @slot('main')
    <div class="flex flex-col">
        <div class="flex pb-2 border-b border-slate-300 place-content-between">
            <div class="pt-1 font-semibold text-slate-700 uppercase">Mutasi</div>
            {{-- Tambah Aset Mobile Mode --}}
            <div class="md:hidden">
                <a href="#tambah_data" class="flex">
                    <div class="h-8 px-2 py-2 bg-green-700 rounded-l">
                        <svg class="w-4 h-4 fill-slate-50" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                            <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                            <path d="M432 256c0 17.69-14.33 32.01-32 32.01H256v144c0 17.69-14.33 31.99-32 31.99s-32-14.3-32-31.99v-144H48c-17.67 0-32-14.32-32-32.01s14.33-31.99 32-31.99H192v-144c0-17.69 14.33-32.01 32-32.01s32 14.32 32 32.01v144h144C417.7 224 432 238.3 432 256z" /></svg>
                    </div>
                    <div class="px-2 pt-1 bg-green-600 rounded-r text-slate-100">Tambah</div>
                </a>
            </div>
            {{-- End Tambah Aset Mobile Mode --}}
        </div>
        <div class="flex place-content-between">
            {{-- Search Bar --}}
            <div class="w-full my-2 md:w-1/2 lg:w-1/3">
                <form action="">
                    <div class="container w-full h-10">
                        <div class="relative">
                            <div class="absolute top-4 left-3">
                                <svg class="z-20 w-4 h-4 text-gray-400 hover:text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                    <path d="M500.3 443.7l-119.7-119.7c27.22-40.41 40.65-90.9 33.46-144.7C401.8 87.79 326.8 13.32 235.2 1.723C99.01-15.51-15.51 99.01 1.724 235.2c11.6 91.64 86.08 166.7 177.6 178.9c53.8 7.189 104.3-6.236 144.7-33.46l119.7 119.7c15.62 15.62 40.95 15.62 56.57 0C515.9 484.7 515.9 459.3 500.3 443.7zM79.1 208c0-70.58 57.42-128 128-128s128 57.42 128 128c0 70.58-57.42 128-128 128S79.1 278.6 79.1 208z" /></svg>
                            </div>
                            <input type="text" class="z-0 w-full h-12 pl-10 pr-20 rounded-lg focus:shadow focus:outline-none" placeholder="Cari barang ...">
                            <div class="absolute top-2 right-2">
                                <button class="w-20 h-8 text-white rounded-lg bg-sky-600 hover:bg-sky-500 active:bg-sky-700" type="submit">Cari</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            {{-- End Search bar --}}

            {{-- Tambah --}}
            <div class="hidden my-4 md:block">
                <a href="#tambah_data" class="flex group">
                    <div class="h-8 px-2 py-2 bg-green-700 rounded-l group-hover:bg-green-600 group-active:bg-green-800">
                        <svg class="w-4 h-4 fill-slate-50" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                            <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                            <path d="M432 256c0 17.69-14.33 32.01-32 32.01H256v144c0 17.69-14.33 31.99-32 31.99s-32-14.3-32-31.99v-144H48c-17.67 0-32-14.32-32-32.01s14.33-31.99 32-31.99H192v-144c0-17.69 14.33-32.01 32-32.01s32 14.32 32 32.01v144h144C417.7 224 432 238.3 432 256z" /></svg>
                    </div>
                    <div class="px-2 pt-1 bg-green-600 rounded-r group-hover:bg-green-500 group-active:bg-green-700 text-slate-100">Tambah</div>
                </a>
            </div>
            {{-- End Tambah --}}
        </div>

        {{-- Table --}}
        <div class="flex flex-col shadow-md">
            {{-- Isi Tabel --}}
            <div class="mt-2 overflow-x-auto rounded-t-lg">
                <table class="w-full text-sm text-left">
                    <thead class="bg-slate-400 uppercase text-slate-100">
                        <tr>
                            <th scope="col" class="px-3 py-3 text-center">No</th>
                            <th scope="col" class="px-6 py-3 text-center">Tanggal</th>
                            <th scope="col" class="px-6 py-3">Kode Mutasi</th>
                            <th scope="col" class="px-6 py-3">Kode Penempatan</th>
                            <th scope="col" class="px-6 py-3">Lokasi Lama</th>
                            <th scope="col" class="px-6 py-3">Lokasi Baru</th>
                            <th scope="col" class="px-6 py-3">Nama Barang</th>
                            <th scope="col" class="px-6 py-3">Keterangan</th>
                            <th scope="col" class="px-6 py-3 text-center">Qty Barang</th>
                            <th scope="col" class="px-6 py-3 text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="bg-white border-b hover:bg-gray-50">
                            <td scope="col" class="px-3 py-3 text-center">1</td>
                            <td scope="col" class="px-6 py-3 text-center">26-06-2022</td>
                            <td scope="col" class="px-6 py-3">MB00010</td>
                            <td scope="col" class="px-6 py-3">PB00010</td>
                            <td scope="col" class="px-6 py-3">Ruang Ketua</td>
                            <td scope="col" class="px-6 py-3">Lab Komputer</td>
                            <td scope="col" class="px-6 py-3">Meja Komputer</td>
                            <td scope="col" class="px-6 py-3">Tidak ada</td>
                            <td scope="col" class="px-6 py-3 text-center">1</td>
                            <td class="px-6 py-3">
                                <div class="flex w-full place-content-center">

                                    {{-- Edit --}}
                                    <form action="" method="post">
                                        <button type="submit" class="w-full h-7 bg-yellow-500 hover:bg-yellow-600 active:bg-yellow-400 rounded-l-md">
                                            <div class="inline-flex">
                                                <svg class="w-4 h-4 fill-slate-50 mx-2 mt-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                    <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                                    <path d="M490.3 40.4C512.2 62.27 512.2 97.73 490.3 119.6L460.3 149.7L362.3 51.72L392.4 21.66C414.3-.2135 449.7-.2135 471.6 21.66L490.3 40.4zM172.4 241.7L339.7 74.34L437.7 172.3L270.3 339.6C264.2 345.8 256.7 350.4 248.4 353.2L159.6 382.8C150.1 385.6 141.5 383.4 135 376.1C128.6 370.5 126.4 361 129.2 352.4L158.8 263.6C161.6 255.3 166.2 247.8 172.4 241.7V241.7zM192 63.1C209.7 63.1 224 78.33 224 95.1C224 113.7 209.7 127.1 192 127.1H96C78.33 127.1 64 142.3 64 159.1V416C64 433.7 78.33 448 96 448H352C369.7 448 384 433.7 384 416V319.1C384 302.3 398.3 287.1 416 287.1C433.7 287.1 448 302.3 448 319.1V416C448 469 405 512 352 512H96C42.98 512 0 469 0 416V159.1C0 106.1 42.98 63.1 96 63.1H192z" /></svg>
                                                <span class="hidden md:block md:mr-2 text-slate-50 font-semibold mt-[0.2rem]">Edit</span>
                                            </div>
                                        </button>
                                    </form>
                                    {{-- End Edit --}}

                                    {{-- Delete --}}
                                    <form action="" method="post">
                                        <button type="submit" class="w-full h-7 bg-red-500 hover:bg-red-600 active:bg-red-400 rounded-r-md">
                                            <div class="inline-flex">
                                                <svg class="w-4 h-4 fill-slate-50 mx-2 mt-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                    <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                                    <path d="M135.2 17.69C140.6 6.848 151.7 0 163.8 0H284.2C296.3 0 307.4 6.848 312.8 17.69L320 32H416C433.7 32 448 46.33 448 64C448 81.67 433.7 96 416 96H32C14.33 96 0 81.67 0 64C0 46.33 14.33 32 32 32H128L135.2 17.69zM31.1 128H416V448C416 483.3 387.3 512 352 512H95.1C60.65 512 31.1 483.3 31.1 448V128zM111.1 208V432C111.1 440.8 119.2 448 127.1 448C136.8 448 143.1 440.8 143.1 432V208C143.1 199.2 136.8 192 127.1 192C119.2 192 111.1 199.2 111.1 208zM207.1 208V432C207.1 440.8 215.2 448 223.1 448C232.8 448 240 440.8 240 432V208C240 199.2 232.8 192 223.1 192C215.2 192 207.1 199.2 207.1 208zM304 208V432C304 440.8 311.2 448 320 448C328.8 448 336 440.8 336 432V208C336 199.2 328.8 192 320 192C311.2 192 304 199.2 304 208z" /></svg>
                                                <span class="hidden md:block md:mr-2 text-slate-50 font-semibold mt-[0.2rem]">Delete</span>
                                            </div>
                                        </button>
                                    </form>
                                    {{-- End Delete --}}

                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            {{-- Paginasi Tabel --}}
            <div class="bg-white px-4 py-3 flex items-center justify-between border-t border-gray-200 sm:px-6 rounded-b-lg">
                <div class="flex-1 flex justify-between sm:hidden">
                    <a href="#" class="relative inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50"> Previous </a>
                    <a href="#" class="ml-3 relative inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50"> Next </a>
                </div>
                <div class="hidden sm:flex-1 sm:flex sm:items-center sm:justify-between">
                    <div>
                        <p class="text-sm text-gray-700">
                            Showing
                            <span class="font-medium">1</span>
                            to
                            <span class="font-medium">10</span>
                            of
                            <span class="font-medium">97</span>
                            results
                        </p>
                    </div>
                    <div>
                        <nav class="relative z-0 inline-flex rounded-md shadow-sm -space-x-px" aria-label="Pagination">
                            <a href="#" class="relative inline-flex items-center px-2 py-2 rounded-l-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                                <span class="sr-only">Previous</span>
                                <!-- Heroicon name: solid/chevron-left -->
                                <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                                </svg>
                            </a>
                            <!-- Current: "z-10 bg-indigo-50 border-indigo-500 text-indigo-600", Default: "bg-white border-gray-300 text-gray-500 hover:bg-gray-50" -->
                            <a href="#" aria-current="page" class="z-10 bg-indigo-50 border-indigo-500 text-indigo-600 relative inline-flex items-center px-4 py-2 border text-sm font-medium"> 1 </a>
                            <a href="#" class="bg-white border-gray-300 text-gray-500 hover:bg-gray-50 relative inline-flex items-center px-4 py-2 border text-sm font-medium"> 2 </a>
                            <a href="#" class="bg-white border-gray-300 text-gray-500 hover:bg-gray-50 hidden md:inline-flex relative items-center px-4 py-2 border text-sm font-medium"> 3 </a>
                            <span class="relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm font-medium text-gray-700"> ... </span>
                            <a href="#" class="bg-white border-gray-300 text-gray-500 hover:bg-gray-50 hidden md:inline-flex relative items-center px-4 py-2 border text-sm font-medium"> 8 </a>
                            <a href="#" class="bg-white border-gray-300 text-gray-500 hover:bg-gray-50 relative inline-flex items-center px-4 py-2 border text-sm font-medium"> 9 </a>
                            <a href="#" class="bg-white border-gray-300 text-gray-500 hover:bg-gray-50 relative inline-flex items-center px-4 py-2 border text-sm font-medium"> 10 </a>
                            <a href="#" class="relative inline-flex items-center px-2 py-2 rounded-r-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                                <span class="sr-only">Next</span>
                                <!-- Heroicon name: solid/chevron-right -->
                                <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                                </svg>
                            </a>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        {{-- End Tabel --}}
    </div>
    @endslot
</x-app-layout>
