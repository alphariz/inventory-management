<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <link rel="icon" type="image/svg+xml" href="favicon.svg" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ $title }}</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="md:flex">
        <!-- Side Menu -->
        <div class="hidden w-1/3 lg:w-1/5 md:block md:bg-slate-400">
            <div class="flex flex-col">
                <!-- Logo -->
                <div class="flex min-w-full border-b-2 shadow-md place-content-between h-14 bg-sky-900 border-slate-100">
                    <div>
                        <img src="" alt="Logo" class="h-full p-2 my-auto w-14" />
                    </div>
                    <a href="/" class="flex flex-col min-w-full my-auto font-semibold text-slate-100 lg:text-xl">
                        <div>STIKes Mahardika</div>
                        <div>Cirebon</div>
                    </a>
                </div>
                <!-- End Logo -->
                <!-- Menu List -->
                <!-- Home -->
                <div class="flex w-full border-y border-slate-400 h-14 bg-slate-500 hover:bg-sky-600 active:bg-sky-800 hover:border-y hover:border-slate-300">
                    <div class="mx-2 my-auto w-14 fill-slate-100">
                        <svg class="w-7 h-7" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                            <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                            <path d="M511.8 287.6L512.5 447.7C512.5 450.5 512.3 453.1 512 455.8V472C512 494.1 494.1 512 472 512H456C454.9 512 453.8 511.1 452.7 511.9C451.3 511.1 449.9 512 448.5 512H392C369.9 512 352 494.1 352 472V384C352 366.3 337.7 352 320 352H256C238.3 352 224 366.3 224 384V472C224 494.1 206.1 512 184 512H128.1C126.6 512 125.1 511.9 123.6 511.8C122.4 511.9 121.2 512 120 512H104C81.91 512 64 494.1 64 472V360C64 359.1 64.03 358.1 64.09 357.2V287.6H32.05C14.02 287.6 0 273.5 0 255.5C0 246.5 3.004 238.5 10.01 231.5L266.4 8.016C273.4 1.002 281.4 0 288.4 0C295.4 0 303.4 2.004 309.5 7.014L416 100.7V64C416 46.33 430.3 32 448 32H480C497.7 32 512 46.33 512 64V185L564.8 231.5C572.8 238.5 576.9 246.5 575.8 255.5C575.8 273.5 560.8 287.6 543.8 287.6L511.8 287.6z" /></svg>
                    </div>
                    <a href="/" class="w-full pb-1 my-auto text-lg text-slate-100">Home</a>
                </div>
                <!-- End Home -->
                <!-- Inventaris -->
                <div class="relative group">
                    <input type="checkbox" name="sidebar_menu" id="" onclick="onlyOne(this)" class="z-10 absolute w-full opacity-0 h-14 peer" />
                    <div class="flex w-full border-y border-slate-400 h-14 bg-slate-500 group-hover:bg-sky-600 group-active:bg-sky-800 peer-checked:bg-sky-700 group-hover:border-y group-hover:border-slate-300">
                        <div class="mx-2 my-auto w-14 fill-slate-100">
                            <svg class="w-7 h-7" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                <path d="M50.73 58.53C58.86 42.27 75.48 32 93.67 32H208V160H0L50.73 58.53zM240 160V32H354.3C372.5 32 389.1 42.27 397.3 58.53L448 160H240zM448 416C448 451.3 419.3 480 384 480H64C28.65 480 0 451.3 0 416V192H448V416z" />
                            </svg>
                        </div>
                        <div class="w-full pb-1 my-auto text-lg text-slate-100">
                            Inventaris
                        </div>
                    </div>
                    <div class="z-0 absolute top-[0.95rem] right-1 w-fit h-fit fill-sky-100 peer-checked:-rotate-90 peer-checked:top-3">
                        <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512">
                            <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                            <path d="M137.4 406.6l-128-127.1C3.125 272.4 0 264.2 0 255.1s3.125-16.38 9.375-22.63l128-127.1c9.156-9.156 22.91-11.9 34.88-6.943S192 115.1 192 128v255.1c0 12.94-7.781 24.62-19.75 29.58S146.5 415.8 137.4 406.6z" /></svg>
                    </div>
                    <!-- Sub Menu .................................................... -->
                    <!-- Aset Barang -->
                    <div class="hidden w-full peer-checked:flex h-14 bg-slate-600 hover:bg-sky-900 hover:border-y hover:border-slate-400 active:bg-sky-700">
                        <div class="w-12 my-auto ml-10">
                            <svg class="w-4 h-4 rotate-90 fill-slate-100" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                <path d="M342.6 182.6C336.4 188.9 328.2 192 319.1 192s-16.38-3.125-22.62-9.375L224 109.3V432c0 44.13-35.89 80-80 80H32c-17.67 0-32-14.31-32-32s14.33-32 32-32h112C152.8 448 160 440.8 160 432V109.3L86.62 182.6c-12.5 12.5-32.75 12.5-45.25 0s-12.5-32.75 0-45.25l127.1-128c12.5-12.5 32.75-12.5 45.25 0l128 128C355.1 149.9 355.1 170.1 342.6 182.6z" />
                            </svg>
                        </div>
                        <a href="/inventory/aset" class="w-full pb-1 my-auto text-lg text-slate-100">
                            Aset Barang
                        </a>
                    </div>
                    <!-- End Aset Barang -->
                    <!-- Kategori Barang -->
                    <div class="hidden w-full peer-checked:flex h-14 bg-slate-600 hover:bg-sky-900 hover:border-y hover:border-slate-400 active:bg-sky-700">
                        <div class="w-12 my-auto ml-10">
                            <svg class="w-4 h-4 rotate-90 fill-slate-100" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                <path d="M342.6 182.6C336.4 188.9 328.2 192 319.1 192s-16.38-3.125-22.62-9.375L224 109.3V432c0 44.13-35.89 80-80 80H32c-17.67 0-32-14.31-32-32s14.33-32 32-32h112C152.8 448 160 440.8 160 432V109.3L86.62 182.6c-12.5 12.5-32.75 12.5-45.25 0s-12.5-32.75 0-45.25l127.1-128c12.5-12.5 32.75-12.5 45.25 0l128 128C355.1 149.9 355.1 170.1 342.6 182.6z" />
                            </svg>
                        </div>
                        <a href="/inventory/kategori" class="w-full pb-1 my-auto text-lg text-slate-100">
                            Kategori Barang
                        </a>
                    </div>
                    <!-- End Kategori Barang -->
                    <!-- Supplier Barang -->
                    <div class="hidden w-full peer-checked:flex h-14 bg-slate-600 hover:bg-sky-900 hover:border-y hover:border-slate-400 active:bg-sky-700">
                        <div class="w-12 my-auto ml-10">
                            <svg class="w-4 h-4 rotate-90 fill-slate-100" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                <path d="M342.6 182.6C336.4 188.9 328.2 192 319.1 192s-16.38-3.125-22.62-9.375L224 109.3V432c0 44.13-35.89 80-80 80H32c-17.67 0-32-14.31-32-32s14.33-32 32-32h112C152.8 448 160 440.8 160 432V109.3L86.62 182.6c-12.5 12.5-32.75 12.5-45.25 0s-12.5-32.75 0-45.25l127.1-128c12.5-12.5 32.75-12.5 45.25 0l128 128C355.1 149.9 355.1 170.1 342.6 182.6z" />
                            </svg>
                        </div>
                        <a href="/inventory/supplier" class="w-full pb-1 my-auto text-lg text-slate-100">
                            Supplier Barang
                        </a>
                    </div>
                    <!-- End Supplier Barang -->
                    <!-- End Sub Menu .................................................... -->
                </div>
                <!-- End Inventaris -->
                <!-- Lokasi -->
                <div class="relative group">
                    <input type="checkbox" name="sidebar_menu" id="" onclick="onlyOne(this)" class="z-10 absolute w-full opacity-0 h-14 peer" />
                    <div class="flex w-full border-y border-slate-400 h-14 bg-slate-500 group-hover:bg-sky-600 group-active:bg-sky-800 peer-checked:bg-sky-700 group-hover:border-y group-hover:border-slate-300">
                        <div class="mx-2 my-auto w-14 fill-slate-100">
                            <svg class="w-7 h-7" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                <path d="M240.1 4.216C249.1-1.405 262-1.405 271.9 4.216L443.6 102.4L447.1 104V104.9L495.9 132.2C508.5 139.4 514.6 154.2 510.9 168.2C507.2 182.2 494.5 192 479.1 192H31.1C17.49 192 4.795 182.2 1.071 168.2C-2.653 154.2 3.524 139.4 16.12 132.2L63.1 104.9V104L68.37 102.4L240.1 4.216zM64 224H128V416H168V224H232V416H280V224H344V416H384V224H448V420.3C448.6 420.6 449.2 420.1 449.8 421.4L497.8 453.4C509.5 461.2 514.7 475.8 510.6 489.3C506.5 502.8 494.1 512 480 512H32C17.9 512 5.46 502.8 1.373 489.3C-2.713 475.8 2.517 461.2 14.25 453.4L62.25 421.4C62.82 420.1 63.41 420.6 64 420.3V224z" />
                            </svg>
                        </div>
                        <div class="w-full pb-1 my-auto text-lg text-slate-100">
                            Lokasi
                        </div>
                    </div>
                    <div class="z-0 absolute top-[0.95rem] right-1 w-fit h-fit fill-sky-100 peer-checked:-rotate-90 peer-checked:top-3">
                        <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512">
                            <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                            <path d="M137.4 406.6l-128-127.1C3.125 272.4 0 264.2 0 255.1s3.125-16.38 9.375-22.63l128-127.1c9.156-9.156 22.91-11.9 34.88-6.943S192 115.1 192 128v255.1c0 12.94-7.781 24.62-19.75 29.58S146.5 415.8 137.4 406.6z" /></svg>
                    </div>
                    <!-- Sub Menu .................................................... -->
                    <!-- Departemen -->
                    <div class="hidden w-full peer-checked:flex h-14 bg-slate-600 hover:bg-sky-900 hover:border-y hover:border-slate-400 active:bg-sky-700">
                        <div class="w-12 my-auto ml-10">
                            <svg class="w-4 h-4 rotate-90 fill-slate-100" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                <path d="M342.6 182.6C336.4 188.9 328.2 192 319.1 192s-16.38-3.125-22.62-9.375L224 109.3V432c0 44.13-35.89 80-80 80H32c-17.67 0-32-14.31-32-32s14.33-32 32-32h112C152.8 448 160 440.8 160 432V109.3L86.62 182.6c-12.5 12.5-32.75 12.5-45.25 0s-12.5-32.75 0-45.25l127.1-128c12.5-12.5 32.75-12.5 45.25 0l128 128C355.1 149.9 355.1 170.1 342.6 182.6z" />
                            </svg>
                        </div>
                        <a href="/location/departemen" class="w-full pb-1 my-auto text-lg text-slate-100">
                            Departemen
                        </a>
                    </div>
                    <!-- End Departemen -->
                    <!-- Ruangan -->
                    <div class="hidden w-full peer-checked:flex h-14 bg-slate-600 hover:bg-sky-900 hover:border-y hover:border-slate-400 active:bg-sky-700">
                        <div class="w-12 my-auto ml-10">
                            <svg class="w-4 h-4 rotate-90 fill-slate-100" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                <path d="M342.6 182.6C336.4 188.9 328.2 192 319.1 192s-16.38-3.125-22.62-9.375L224 109.3V432c0 44.13-35.89 80-80 80H32c-17.67 0-32-14.31-32-32s14.33-32 32-32h112C152.8 448 160 440.8 160 432V109.3L86.62 182.6c-12.5 12.5-32.75 12.5-45.25 0s-12.5-32.75 0-45.25l127.1-128c12.5-12.5 32.75-12.5 45.25 0l128 128C355.1 149.9 355.1 170.1 342.6 182.6z" />
                            </svg>
                        </div>
                        <a href="/location/ruangan" class="w-full pb-1 my-auto text-lg text-slate-100">
                            Ruangan
                        </a>
                    </div>
                    <!-- End Ruangan -->
                    <!-- End Sub Menu .................................................... -->
                </div>
                <!-- End Lokasi -->
                <!-- Laporan -->
                <div class="relative group">
                    <input type="checkbox" name="sidebar_menu" onclick="onlyOne(this)" id="" class="z-10 absolute w-full opacity-0 h-14 peer" />
                    <div class="flex w-full border-y border-slate-400 h-14 bg-slate-500 group-hover:bg-sky-600 group-active:bg-sky-800 peer-checked:bg-sky-700 group-hover:border-y group-hover:border-slate-300">
                        <div class="mx-2 my-auto w-14 fill-slate-100">
                            <svg class="w-7 h-7" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                <path d="M384 96L384 0h-112c-26.51 0-48 21.49-48 48v288c0 26.51 21.49 48 48 48H464c26.51 0 48-21.49 48-48V128h-95.1C398.4 128 384 113.6 384 96zM416 0v96h96L416 0zM192 352V128h-144c-26.51 0-48 21.49-48 48v288c0 26.51 21.49 48 48 48h192c26.51 0 48-21.49 48-48L288 416h-32C220.7 416 192 387.3 192 352z" />
                            </svg>
                        </div>
                        <div class="w-full pb-1 my-auto text-lg text-slate-100">
                            Laporan
                        </div>
                    </div>
                    <div class="z-0 absolute top-[0.95rem] right-1 w-fit h-fit fill-sky-100 peer-checked:-rotate-90 peer-checked:top-3">
                        <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512">
                            <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                            <path d="M137.4 406.6l-128-127.1C3.125 272.4 0 264.2 0 255.1s3.125-16.38 9.375-22.63l128-127.1c9.156-9.156 22.91-11.9 34.88-6.943S192 115.1 192 128v255.1c0 12.94-7.781 24.62-19.75 29.58S146.5 415.8 137.4 406.6z" /></svg>
                    </div>
                    <!-- Sub Menu .................................................... -->
                    <!-- Pengadaan -->
                    <div class="hidden w-full peer-checked:flex h-14 bg-slate-600 hover:bg-sky-900 hover:border-y hover:border-slate-400 active:bg-sky-700">
                        <div class="w-12 my-auto ml-10">
                            <svg class="w-4 h-4 rotate-90 fill-slate-100" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                <path d="M342.6 182.6C336.4 188.9 328.2 192 319.1 192s-16.38-3.125-22.62-9.375L224 109.3V432c0 44.13-35.89 80-80 80H32c-17.67 0-32-14.31-32-32s14.33-32 32-32h112C152.8 448 160 440.8 160 432V109.3L86.62 182.6c-12.5 12.5-32.75 12.5-45.25 0s-12.5-32.75 0-45.25l127.1-128c12.5-12.5 32.75-12.5 45.25 0l128 128C355.1 149.9 355.1 170.1 342.6 182.6z" />
                            </svg>
                        </div>
                        <a href="/report/pengadaan" class="w-full pb-1 my-auto text-lg text-slate-100">
                            Pengadaan
                        </a>
                    </div>
                    <!-- End Pengadaan -->
                    <!-- Penempatan -->
                    <div class="hidden w-full peer-checked:flex h-14 bg-slate-600 hover:bg-sky-900 hover:border-y hover:border-slate-400 active:bg-sky-700">
                        <div class="w-12 my-auto ml-10">
                            <svg class="w-4 h-4 rotate-90 fill-slate-100" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                <path d="M342.6 182.6C336.4 188.9 328.2 192 319.1 192s-16.38-3.125-22.62-9.375L224 109.3V432c0 44.13-35.89 80-80 80H32c-17.67 0-32-14.31-32-32s14.33-32 32-32h112C152.8 448 160 440.8 160 432V109.3L86.62 182.6c-12.5 12.5-32.75 12.5-45.25 0s-12.5-32.75 0-45.25l127.1-128c12.5-12.5 32.75-12.5 45.25 0l128 128C355.1 149.9 355.1 170.1 342.6 182.6z" />
                            </svg>
                        </div>
                        <a href="/report/penempatan" class="w-full pb-1 my-auto text-lg text-slate-100">
                            Penempatan
                        </a>
                    </div>
                    <!-- End Penempatan -->
                    <!-- Mutasi -->
                    <div class="hidden w-full peer-checked:flex h-14 bg-slate-600 hover:bg-sky-900 hover:border-y hover:border-slate-400 active:bg-sky-700">
                        <div class="w-12 my-auto ml-10">
                            <svg class="w-4 h-4 rotate-90 fill-slate-100" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                <path d="M342.6 182.6C336.4 188.9 328.2 192 319.1 192s-16.38-3.125-22.62-9.375L224 109.3V432c0 44.13-35.89 80-80 80H32c-17.67 0-32-14.31-32-32s14.33-32 32-32h112C152.8 448 160 440.8 160 432V109.3L86.62 182.6c-12.5 12.5-32.75 12.5-45.25 0s-12.5-32.75 0-45.25l127.1-128c12.5-12.5 32.75-12.5 45.25 0l128 128C355.1 149.9 355.1 170.1 342.6 182.6z" />
                            </svg>
                        </div>
                        <a href="/report/mutasi" class="w-full pb-1 my-auto text-lg text-slate-100">
                            Mutasi
                        </a>
                    </div>
                    <!-- End Mutasi -->
                    <!-- Peminjaman -->
                    <div class="hidden w-full peer-checked:flex h-14 bg-slate-600 hover:bg-sky-900 hover:border-y hover:border-slate-400 active:bg-sky-700">
                        <div class="w-12 my-auto ml-10">
                            <svg class="w-4 h-4 rotate-90 fill-slate-100" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                <path d="M342.6 182.6C336.4 188.9 328.2 192 319.1 192s-16.38-3.125-22.62-9.375L224 109.3V432c0 44.13-35.89 80-80 80H32c-17.67 0-32-14.31-32-32s14.33-32 32-32h112C152.8 448 160 440.8 160 432V109.3L86.62 182.6c-12.5 12.5-32.75 12.5-45.25 0s-12.5-32.75 0-45.25l127.1-128c12.5-12.5 32.75-12.5 45.25 0l128 128C355.1 149.9 355.1 170.1 342.6 182.6z" />
                            </svg>
                        </div>
                        <a href="/report/peminjaman" class="w-full pb-1 my-auto text-lg text-slate-100">
                            Peminjaman
                        </a>
                    </div>
                    <!-- End Peminjaman -->
                    <!-- End Sub Menu .................................................... -->
                </div>
                <!-- End Laporan -->
                <!-- Pengguna -->
                <div class="flex w-full border-y border-slate-400 h-14 bg-slate-500 hover:bg-sky-600 active:bg-sky-800 hover:border-y hover:border-slate-300">
                    <div class="mx-2 my-auto w-14 fill-slate-100">
                        <svg class="w-7 h-7" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
                            <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                            <path d="M319.9 320c57.41 0 103.1-46.56 103.1-104c0-57.44-46.54-104-103.1-104c-57.41 0-103.1 46.56-103.1 104C215.9 273.4 262.5 320 319.9 320zM369.9 352H270.1C191.6 352 128 411.7 128 485.3C128 500.1 140.7 512 156.4 512h327.2C499.3 512 512 500.1 512 485.3C512 411.7 448.4 352 369.9 352zM512 160c44.18 0 80-35.82 80-80S556.2 0 512 0c-44.18 0-80 35.82-80 80S467.8 160 512 160zM183.9 216c0-5.449 .9824-10.63 1.609-15.91C174.6 194.1 162.6 192 149.9 192H88.08C39.44 192 0 233.8 0 285.3C0 295.6 7.887 304 17.62 304h199.5C196.7 280.2 183.9 249.7 183.9 216zM128 160c44.18 0 80-35.82 80-80S172.2 0 128 0C83.82 0 48 35.82 48 80S83.82 160 128 160zM551.9 192h-61.84c-12.8 0-24.88 3.037-35.86 8.24C454.8 205.5 455.8 210.6 455.8 216c0 33.71-12.78 64.21-33.16 88h199.7C632.1 304 640 295.6 640 285.3C640 233.8 600.6 192 551.9 192z" />
                        </svg>
                    </div>
                    <a href="/pengguna" class="w-full pb-1 my-auto text-lg text-slate-100">Pengguna</a>
                </div>
                <!-- End Pengguna -->
                <!-- End Menu List -->
            </div>
        </div>
        <!-- End Side Menu -->

        <!-- Main Menu -->
        <div class="md:w-full">
            <nav>
                <div class="min-w-full bg-sky-900 h-14 md:bg-slate-100 md:border-b-2">
                    <div class="flex h-full place-content-between">
                        <!-- Start Mobile Menu -->
                        <div class="mx-4 my-auto md:hidden">
                            <label for="" class="group">
                                <input type="checkbox" name="" id="" class="absolute w-6 h-6 opacity-0 cursor-pointer peer" />
                                <svg class="w-6 h-6 fill-slate-50" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                    <!-- ! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                    <path d="M0 96C0 78.33 14.33 64 32 64H416C433.7 64 448 78.33 448 96C448 113.7 433.7 128 416 128H32C14.33 128 0 113.7 0 96zM0 256C0 238.3 14.33 224 32 224H416C433.7 224 448 238.3 448 256C448 273.7 433.7 288 416 288H32C14.33 288 0 273.7 0 256zM416 448H32C14.33 448 0 433.7 0 416C0 398.3 14.33 384 32 384H416C433.7 384 448 398.3 448 416C448 433.7 433.7 448 416 448z" />
                                </svg>

                                <!-- Menu List Start -->
                                <ul class="absolute z-50 hidden mt-4 -mx-4 peer-checked:block">
                                    <li class="w-screen h-12 py-2 text-lg font-semibold text-center border-y text-slate-50 border-slate-50 bg-sky-600 hover:bg-sky-900 active:bg-sky-300 active:text-slate-700">
                                        <a href="/">Home</a>
                                    </li>
                                    <li class="w-screen h-12 py-2 text-lg font-semibold text-center border-y text-slate-50 border-slate-50 bg-sky-600 hover:bg-sky-900 active:bg-sky-300 active:text-slate-700">
                                        <a href="/inventory/aset">Aset Barang</a>
                                    </li>
                                    <li class="w-screen h-12 py-2 text-lg font-semibold text-center border-y text-slate-50 border-slate-50 bg-sky-600 hover:bg-sky-900 active:bg-sky-300 active:text-slate-700">
                                        <a href="/inventory/kategori">Kategori Barang</a>
                                    </li>
                                    <li class="w-screen h-12 py-2 text-lg font-semibold text-center border-y text-slate-50 border-slate-50 bg-sky-600 hover:bg-sky-900 active:bg-sky-300 active:text-slate-700">
                                        <a href="/inventory/supplier">Supplier Barang</a>
                                    </li>
                                    <li class="w-screen h-12 py-2 text-lg font-semibold text-center border-y text-slate-50 border-slate-50 bg-sky-600 hover:bg-sky-900 active:bg-sky-300 active:text-slate-700">
                                        <a href="/location/departemen">Departemen</a>
                                    </li>
                                    <li class="w-screen h-12 py-2 text-lg font-semibold text-center border-y text-slate-50 border-slate-50 bg-sky-600 hover:bg-sky-900 active:bg-sky-300 active:text-slate-700">
                                        <a href="/location/ruangan">Ruangan</a>
                                    </li>
                                    <li class="w-screen h-12 py-2 text-lg font-semibold text-center border-y text-slate-50 border-slate-50 bg-sky-600 hover:bg-sky-900 active:bg-sky-300 active:text-slate-700">
                                        <a href="/report/pengadaan">Pengadaan</a>
                                    </li>
                                    <li class="w-screen h-12 py-2 text-lg font-semibold text-center border-y text-slate-50 border-slate-50 bg-sky-600 hover:bg-sky-900 active:bg-sky-300 active:text-slate-700">
                                        <a href="/report/penempatan">Penempatan</a>
                                    </li>
                                    <li class="w-screen h-12 py-2 text-lg font-semibold text-center border-y text-slate-50 border-slate-50 bg-sky-600 hover:bg-sky-900 active:bg-sky-300 active:text-slate-700">
                                        <a href="/report/mutasi">Mutasi</a>
                                    </li>
                                    <li class="w-screen h-12 py-2 text-lg font-semibold text-center border-y text-slate-50 border-slate-50 bg-sky-600 hover:bg-sky-900 active:bg-sky-300 active:text-slate-700">
                                        <a href="/report/peminjaman">Peminjaman</a>
                                    </li>
                                    <li class="w-screen h-12 py-2 text-lg font-semibold text-center border-y text-slate-50 border-slate-50 bg-sky-600 hover:bg-sky-900 active:bg-sky-300 active:text-slate-700">
                                        <a href="/pengguna">Pengguna</a>
                                    </li>
                                </ul>
                                <!-- Menu List End -->
                            </label>
                        </div>
                        <!-- End Mobile Menu -->

                        <!-- Header Title -->
                        <div class="w-full mx-1 my-auto text-lg font-semibold text-slate-50 md:text-slate-700 md:mx-4">
                            Inventory
                        </div>
                        <!-- End Header Title -->

                        <!-- User Setting -->
                        <div class="mx-4 my-auto">
                            <button type="button" onclick="openDropdown(event,'dropdown-id')">
                                <svg class="w-6 h-6 mt-2 fill-slate-50 md:fill-slate-700" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                    <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                    <path d="M224 256c70.7 0 128-57.31 128-128s-57.3-128-128-128C153.3 0 96 57.31 96 128S153.3 256 224 256zM274.7 304H173.3C77.61 304 0 381.6 0 477.3c0 19.14 15.52 34.67 34.66 34.67h378.7C432.5 512 448 496.5 448 477.3C448 381.6 370.4 304 274.7 304z" />
                                </svg>
                            </button>
                            <div class="z-50 hidden float-left py-2 mt-1 text-left list-none rounded-lg shadow-lg bg-slate-50" id="dropdown-id">
                                <a href="#pablo" class="block w-full px-4 py-2 text-sm font-normal bg-transparent whitespace-nowrap text-slate-700 hover:bg-slate-400 hover:text-slate-100 hover:font-semibold">
                                    Change Password
                                </a>
                                <a href="#pablo" class="block w-full px-4 py-2 text-sm font-normal bg-transparent whitespace-nowrap text-slate-700 hover:bg-slate-400 hover:text-slate-100 hover:font-semibold">
                                    Sign Out
                                </a>
                            </div>
                        </div>
                        <!-- End User Setting -->
                    </div>
                </div>
            </nav>

            <main>
                <!-- Dashboard -->
                <div class="min-w-full h-screen px-4 py-4 bg-slate-100 overflow-auto block">
                    {{ $main }}
                </div>
            </main>

            <footer>
                <div class="min-w-full bg-sky-900 h-14 md:bg-slate-100 md:border-t-2">
                    <div class="flex justify-center h-full place-items-center">
                        <div class="text-slate-50 md:text-slate-700">
                            &copy;STIKes Mahardika
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        <!-- End Main Menu -->
    </div>

    <!-- PopperJS -->
    <script src="https://unpkg.com/@popperjs/core@2.9.1/dist/umd/popper.min.js" charset="utf-8"></script>

    {{-- Sidebar Menu --}}
    <script>
        function onlyOne(checkbox) {
            var checkboxes = document.getElementsByName('sidebar_menu')
            checkboxes.forEach((item) => {
                if (item !== checkbox) item.checked = false
            })
        }

    </script>

    <!-- Dropdown Menu -->
    <script>
        function openDropdown(event, dropdownID) {
            let element = event.target;
            while (element.nodeName !== "BUTTON") {
                element = element.parentNode;
            }
            var popper = Popper.createPopper(
                element
                , document.getElementById(dropdownID), {
                    placement: "bottom-end"
                , }
            );
            document.getElementById(dropdownID).classList.toggle("hidden");
            document.getElementById(dropdownID).classList.toggle("block");
        }

    </script>
</body>
</html>
