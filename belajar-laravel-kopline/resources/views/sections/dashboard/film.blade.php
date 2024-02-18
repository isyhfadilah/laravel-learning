<section class="py-10 mx-36">
    <h1 class="text-white text-3xl font-bold">Tabel <span class="bg-rose-700">kategori film</span></h1>
    <div class="flex justify-end mb-6">
        <a href="#" class="outline outline-rose-700 rounded-md px-2 text-red-600 py-1 hover:bg-rose-700 hover:text-white">
            <i class="fa-solid fa-plus"></i>
            Tambah Film
        </a>
    </div>
    <div class="flex justify-center">
        <table class="text-white py-56 w-full">
            <tr class="bg-rose-700">
                <th class="py-2">Kategori Film</th>
                <th class="py-2">Judul Film</th>
                <th>Harga</th>
                <th>Aksi</th>
            </tr>
            <tr>
                <td class="border-r border-white">
                    {{-- <img src="assets/images/agak-lain.png" alt="" width="90" class=" rounded-lg "> --}}
                </td>
                <td class="border-r border-white py-3 px-2">Agak laen</td>
                <td class="border-r border-white px-2 py-3">30000</td>
                <td class="space-x-2 flex justify-center items-center py-3">
                    <a href="#" class="bg-green-500 rounded-md px-2">detail</a>
                    <a href="#" class="bg-blue-500 rounded-md px-2">edit</a>
                    <a href="#" class="bg-red-600 rounded-md px-2">hapus</a>
                </td>
            </tr>
        </table>
    </div>
</section>