<x-app-layout title="Add Aset">
    @slot('main')
    <div class="flex flex-col">
        <div class="flex pb-2 border-b border-slate-300 place-content-between">
            <div class="pt-1 font-semibold text-slate-700 uppercase">Tambah Aset Barang</div>
        </div>
        <div class="mt-2 w-full h-full max-h-max bg-slate-50 rounded-lg shadow-md p-2">
            <form action="" id="form-add-aset" method="POST" enctype="multipart/form-data" class="flex flex-col">
                @csrf
                <div class="mb-6 flex flex-col lg:flex-row lg:mx-4">
                    <label for="name" class="block mb-2 font-medium text-gray-900 lg:w-1/6 lg:my-auto">Kode Barang</label>
                    <input type="text" id="name" name="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:shadow-md block w-full p-2.5 lg:w-2/4 lg:h-8 lg:border-slate-400" required>
                </div>
                <div class="mb-6 flex flex-col lg:flex-row lg:mx-4">
                    <label for="name" class="block mb-2 font-medium text-gray-900 lg:w-1/6 lg:my-auto">Nama Barang</label>
                    <input type="text" id="name" name="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:shadow-md block w-full p-2.5 lg:w-2/4 lg:h-8 lg:border-slate-400" required>
                </div>
                <div class="mb-6 flex flex-col lg:flex-row lg:mx-4">
                    <label for="name" class="block mb-2 font-medium text-gray-900 lg:w-1/6 lg:my-auto">Merek Barang</label>
                    <input type="text" id="name" name="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:shadow-md block w-full p-2.5 lg:w-2/4 lg:h-8 lg:border-slate-400" required>
                </div>
                <div class="mb-6 flex flex-col lg:flex-row lg:mx-4">
                    <label for="name" class="block mb-2 font-medium text-gray-900 lg:w-1/6 lg:my-auto">Satuan Barang</label>
                    <input type="text" id="name" name="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:shadow-md block w-full p-2.5 lg:w-2/4 lg:h-8 lg:border-slate-400" required>
                </div>
                <div class="mb-6 flex flex-col lg:flex-row lg:mx-4">
                    <label for="name" class="block mb-2 font-medium text-gray-900 lg:w-1/6 lg:my-auto">Kategori Barang</label>
                    <input type="text" id="name" name="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:shadow-md block w-full p-2.5 lg:w-2/4 lg:h-8 lg:border-slate-400" required>
                </div>
                <div class="mb-6 flex flex-col lg:flex-row lg:mx-4">
                    <label for="name" class="block mb-2 font-medium text-gray-900 lg:w-1/6 lg:my-auto">File Gambar Barang</label>
                    <input type="file" id="name" name="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:shadow-md block w-full p-2.5 lg:w-2/4 lg:h-8 lg:border-slate-400 cursor-pointer file:rounded-md lg:px-2.5 lg:pt-2 lg:file:hidden" required>
                </div>
                <div class="mb-6 flex flex-col lg:flex-row lg:mx-4">
                    <label for="name" class="block mb-2 font-medium text-gray-900 lg:w-1/6">Keterangan</label>
                    <textarea name="" id="name" name="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:shadow-md block w-full p-2.5 lg:w-2/4 lg:h-36 lg:border-slate-400 resize-none" cols="30" rows="5"></textarea>
                </div>
            </form>
        </div>
    </div>
    @endslot
</x-app-layout>
