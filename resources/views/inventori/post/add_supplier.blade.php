<x-app-layout title="Add Aset">
    @slot('main')
    <div class="flex flex-col">
        <div class="flex pb-2 border-b border-slate-300 place-content-between">
            <div class="pt-1 font-semibold text-slate-700 uppercase">Tambah Supplier Barang</div>
        </div>
        <div class="mt-2 w-full h-full max-h-max bg-slate-50 rounded-lg shadow-md p-2">
            <div class="w-full h-full lg:mx-auto lg:w-1/2">
                <form action="" id="form-add-aset" method="POST" enctype="multipart/form-data" class="flex flex-col">
                    @csrf
                    <div class="mb-6 flex flex-col lg:flex-row lg:mx-4">
                        <label for="name" class="block mb-2 font-medium text-gray-900 lg:w-2/6 lg:my-auto lg:mr-16">Kode Supplier</label>
                        <input type="text" id="name" name="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:shadow-md block w-full p-2.5 lg:w-3/4 lg:h-8 lg:border-slate-400" required>
                    </div>
                    <div class="mb-6 flex flex-col lg:flex-row lg:mx-4">
                        <label for="name" class="block mb-2 font-medium text-gray-900 lg:w-2/6 lg:my-auto lg:mr-16">Nama Supplier</label>
                        <input type="text" id="name" name="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:shadow-md block w-full p-2.5 lg:w-3/4 lg:h-8 lg:border-slate-400" required>
                    </div>
                    <div class="mb-6 flex flex-col lg:flex-row lg:mx-4">
                        <label for="name" class="block mb-2 font-medium text-gray-900 lg:w-2/6 lg:my-auto lg:mr-16">Nomor Telepon Supplier</label>
                        <input type="text" id="name" name="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:shadow-md block w-full p-2.5 lg:w-3/4 lg:h-8 lg:border-slate-400" required>
                    </div>
                    <div class="mb-6 flex flex-col lg:flex-row lg:mx-4">
                        <label for="name" class="block mb-2 font-medium text-gray-900 lg:w-2/6 lg:mr-16">Alamat Supplier</label>
                        <textarea name="" id="name" name="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:shadow-md block w-full p-2.5 lg:w-3/4 lg:h-36 lg:border-slate-400 resize-none" cols="30" rows="5"></textarea>
                    </div>
                    <div class="mb-6 flex flex-col lg:flex-row lg:mx-4">
                        <label for="name" class="block mb-2 font-medium text-gray-900 lg:w-2/6 lg:mr-16">Keterangan</label>
                        <textarea name="" id="name" name="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:shadow-md block w-full p-2.5 lg:w-3/4 lg:h-36 lg:border-slate-400 resize-none" cols="30" rows="5"></textarea>
                    </div>
                    <div class="mb-6 flex lg:flex-row lg:mx-4 place-content-between">
                        <a href="/inventory/supplier" class="flex group">
                            <div class="h-8 px-2 py-2 bg-red-700 rounded-l group-hover:bg-red-600 group-active:bg-red-800">
                                <svg class="w-4 h-4 fill-slate-50" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                    <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                    <path d="M447.1 256C447.1 273.7 433.7 288 416 288H109.3l105.4 105.4c12.5 12.5 12.5 32.75 0 45.25C208.4 444.9 200.2 448 192 448s-16.38-3.125-22.62-9.375l-160-160c-12.5-12.5-12.5-32.75 0-45.25l160-160c12.5-12.5 32.75-12.5 45.25 0s12.5 32.75 0 45.25L109.3 224H416C433.7 224 447.1 238.3 447.1 256z" /></svg>
                            </div>
                            <div class="px-2 pt-1 bg-red-600 rounded-r group-hover:bg-red-500 group-active:bg-red-700 text-slate-100">Kembali</div>
                        </a>
                        <a href="/post/add_aset" class="flex group">
                            <div class="h-8 px-2 py-2 bg-green-700 rounded-l group-hover:bg-green-600 group-active:bg-green-800">
                                <svg class="w-4 h-4 fill-slate-50" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                    <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                    <path d="M432 256c0 17.69-14.33 32.01-32 32.01H256v144c0 17.69-14.33 31.99-32 31.99s-32-14.3-32-31.99v-144H48c-17.67 0-32-14.32-32-32.01s14.33-31.99 32-31.99H192v-144c0-17.69 14.33-32.01 32-32.01s32 14.32 32 32.01v144h144C417.7 224 432 238.3 432 256z" /></svg>
                            </div>
                            <div class="px-2 pt-1 bg-green-600 rounded-r group-hover:bg-green-500 group-active:bg-green-700 text-slate-100">Tambah</div>
                        </a>
                    </div>
                </form>
            </div>

        </div>
    </div>
    @endslot
</x-app-layout>
