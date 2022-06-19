<x-app-layout title="Home">
    @slot('main')
    <div class="grid w-full h-full grid-cols-2 gap-5 lg:grid-cols-4">
        <!-- User -->
        <div class="w-full rounded-lg shadow-lg bg-slate-50 h-60 lg:h-40">
            <div class="flex flex-col lg:grid lg:grid-cols-2">
                <div class="h-40 rounded-t-lg bg-sky-600 lg:row-span-2 lg:rounded-none lg:rounded-l-lg">
                    <svg class="w-full h-full p-8 fill-slate-100" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
                        <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                        <path d="M319.9 320c57.41 0 103.1-46.56 103.1-104c0-57.44-46.54-104-103.1-104c-57.41 0-103.1 46.56-103.1 104C215.9 273.4 262.5 320 319.9 320zM369.9 352H270.1C191.6 352 128 411.7 128 485.3C128 500.1 140.7 512 156.4 512h327.2C499.3 512 512 500.1 512 485.3C512 411.7 448.4 352 369.9 352zM512 160c44.18 0 80-35.82 80-80S556.2 0 512 0c-44.18 0-80 35.82-80 80S467.8 160 512 160zM183.9 216c0-5.449 .9824-10.63 1.609-15.91C174.6 194.1 162.6 192 149.9 192H88.08C39.44 192 0 233.8 0 285.3C0 295.6 7.887 304 17.62 304h199.5C196.7 280.2 183.9 249.7 183.9 216zM128 160c44.18 0 80-35.82 80-80S172.2 0 128 0C83.82 0 48 35.82 48 80S83.82 160 128 160zM551.9 192h-61.84c-12.8 0-24.88 3.037-35.86 8.24C454.8 205.5 455.8 210.6 455.8 216c0 33.71-12.78 64.21-33.16 88h199.7C632.1 304 640 295.6 640 285.3C640 233.8 600.6 192 551.9 192z" />
                    </svg>
                </div>
                <div class="flex justify-center h-full place-items-center lg:place-content-end lg:pr-4 lg:relative">
                    <div class="text-xl font-semibold md:text-2xl lg:text-3xl lg:font-bold lg:absolute lg:bottom-0 lg:text-slate-700">
                        Pengguna
                    </div>
                </div>
                <div class="flex justify-center h-full place-items-center lg:place-content-end lg:pr-4 lg:relative">
                    <div class="text-xl lg:text-5xl lg:font-bold lg:absolute lg:top-0 lg:text-slate-700">
                        10
                    </div>
                </div>
            </div>
        </div>

        <!-- Supplier -->
        <div class="w-full rounded-lg shadow-lg bg-slate-50 h-60 lg:h-40">
            <div class="flex flex-col lg:grid lg:grid-cols-2">
                <div class="h-40 rounded-t-lg bg-sky-600 lg:row-span-2 lg:rounded-none lg:rounded-l-lg">
                    <svg class="w-full h-full p-8 fill-slate-100" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
                        <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                        <path d="M32 96C32 60.65 60.65 32 96 32H320C343.7 32 364.4 44.87 375.4 64H427.2C452.5 64 475.4 78.9 485.7 102L538.5 220.8C538.1 221.9 539.4 222.9 539.8 223.1H544C579.3 223.1 608 252.7 608 287.1V319.1C625.7 319.1 640 334.3 640 352C640 369.7 625.7 384 608 384H576C576 437 533 480 480 480C426.1 480 384 437 384 384H256C256 437 213 480 160 480C106.1 480 64 437 64 384H32C14.33 384 0 369.7 0 352C0 334.3 14.33 319.1 32 319.1V287.1C14.33 287.1 0 273.7 0 255.1V159.1C0 142.3 14.33 127.1 32 127.1V96zM469.9 224L427.2 128H384V224H469.9zM160 432C186.5 432 208 410.5 208 384C208 357.5 186.5 336 160 336C133.5 336 112 357.5 112 384C112 410.5 133.5 432 160 432zM480 336C453.5 336 432 357.5 432 384C432 410.5 453.5 432 480 432C506.5 432 528 410.5 528 384C528 357.5 506.5 336 480 336z" />
                    </svg>
                </div>
                <div class="flex justify-center h-full place-items-center lg:place-content-end lg:pr-4 lg:relative">
                    <div class="text-xl font-semibold lg:text-3xl lg:font-bold lg:absolute lg:bottom-0 lg:text-slate-700">
                        Supplier
                    </div>
                </div>
                <div class="flex justify-center h-full place-items-center lg:place-content-end lg:pr-4 lg:relative">
                    <div class="text-xl lg:text-5xl lg:font-bold lg:absolute lg:top-0 lg:text-slate-700">
                        10
                    </div>
                </div>
            </div>
        </div>

        <!-- Ruangan -->
        <div class="w-full rounded-lg shadow-lg bg-slate-50 h-60 lg:h-40">
            <div class="flex flex-col lg:grid lg:grid-cols-2">
                <div class="h-40 rounded-t-lg bg-sky-600 lg:row-span-2 lg:rounded-none lg:rounded-l-lg">
                    <svg class="w-full h-full p-8 fill-slate-100" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                        <path d="M240.1 4.216C249.1-1.405 262-1.405 271.9 4.216L443.6 102.4L447.1 104V104.9L495.9 132.2C508.5 139.4 514.6 154.2 510.9 168.2C507.2 182.2 494.5 192 479.1 192H31.1C17.49 192 4.795 182.2 1.071 168.2C-2.653 154.2 3.524 139.4 16.12 132.2L63.1 104.9V104L68.37 102.4L240.1 4.216zM64 224H128V416H168V224H232V416H280V224H344V416H384V224H448V420.3C448.6 420.6 449.2 420.1 449.8 421.4L497.8 453.4C509.5 461.2 514.7 475.8 510.6 489.3C506.5 502.8 494.1 512 480 512H32C17.9 512 5.46 502.8 1.373 489.3C-2.713 475.8 2.517 461.2 14.25 453.4L62.25 421.4C62.82 420.1 63.41 420.6 64 420.3V224z" />
                    </svg>
                </div>
                <div class="flex justify-center h-full place-items-center lg:place-content-end lg:pr-4 lg:relative">
                    <div class="text-xl font-semibold lg:text-3xl lg:font-bold lg:absolute lg:bottom-0 lg:text-slate-700">
                        Ruangan
                    </div>
                </div>
                <div class="flex justify-center h-full place-items-center lg:place-content-end lg:pr-4 lg:relative">
                    <div class="text-xl lg:text-5xl lg:font-bold lg:absolute lg:top-0 lg:text-slate-700">
                        10
                    </div>
                </div>
            </div>
        </div>

        <!-- Aset Barang -->
        <div class="w-full rounded-lg shadow-lg bg-slate-50 h-60 lg:h-40">
            <div class="flex flex-col lg:grid lg:grid-cols-2">
                <div class="h-40 rounded-t-lg bg-sky-600 lg:row-span-2 lg:rounded-none lg:rounded-l-lg">
                    <svg class="w-full h-full p-8 fill-slate-100" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                        <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                        <path d="M50.73 58.53C58.86 42.27 75.48 32 93.67 32H208V160H0L50.73 58.53zM240 160V32H354.3C372.5 32 389.1 42.27 397.3 58.53L448 160H240zM448 416C448 451.3 419.3 480 384 480H64C28.65 480 0 451.3 0 416V192H448V416z" />
                    </svg>
                </div>
                <div class="flex justify-center h-full place-items-center lg:place-content-end lg:pr-4 lg:relative">
                    <div class="text-xl font-semibold lg:text-3xl lg:font-bold lg:absolute lg:bottom-0 lg:text-slate-700">
                        Barang
                    </div>
                </div>
                <div class="flex justify-center h-full place-items-center lg:place-content-end lg:pr-4 lg:relative">
                    <div class="text-xl lg:text-5xl lg:font-bold lg:absolute lg:top-0 lg:text-slate-700">
                        10
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endslot
</x-app-layout>
