<section class="pb-10 pt-5 mx-36">
    @if (session('success'))
    <div class="flex justify-end">
        <div class="py-2 px-4 rounded-bl-lg mb-4 text-center text-sm text-green-500 bg-green-50" role="alert">
            <span class="font-medium"> <b>Mantap.</b> </span> {{session('success')}}
        </div>
    </div>
    @endif
    <h1 class="text-white text-3xl font-bold">Tabel <span class="bg-rose-700">kategori film</span></h1>
    <div class="flex justify-end mb-6">
        <a href="#" data-modal-target="add-modal" data-modal-toggle="add-modal" class="outline outline-rose-700 rounded-md px-2 text-red-600 py-1 hover:bg-rose-700 hover:text-white">
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
            @forelse ($films as $film)
            <tr>
                <td class="flex justify-center">
                    <img src="{{ asset('/storage/film/'. $film->image) }}" alt="" class="rounded"
                    style="width: 150px">
                </td>
                <td>{{ $film->judul_film }}</td>
                <td>{{ $film->harga }}</td>
                <td class="space-x-2">
                    <form onsubmit="return confirm('Apakah anda yakin?')" action="{{ route('film.destroy', $film->id_film) }}" method="post">
                        <a href="{{ route('film.show', $film->id_film) }}" class="bg-green-500 rounded-md px-2">detail</a>
                        <a data-modal-target="edit-modal" data-modal-toggle="edit-modal" href="#" class="bg-blue-500 rounded-md px-2">edit</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="bg-red-600 rounded-md px-2">
                            hapus
                        </button>
                    </form>
                </td>
            </tr>
            @empty
                <h1 class="text-white">Nothing here</h1>
            @endforelse
        </table>
    </div>
    @include('forms.dashboard.add')
    @include('forms.dashboard.edit')
    @include('forms.dashboard.detail')
</section>