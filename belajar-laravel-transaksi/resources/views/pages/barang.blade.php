<x-layout>
    <section class="is-title-bar">
        <div class="flex flex-col md:flex-row items-center justify-between space-y-6 md:space-y-0">
            <ul>
                <li>Admin</li>
                <li>Dashboard</li>
            </ul>
        </div>
    </section>

    <section class="is-hero-bar">
        <div class="flex flex-col md:flex-row items-center justify-between space-y-6 md:space-y-0">
            <h1 class="title">
            Data Barang
            </h1>
            <a href="{{route('barang.create')}}" class="button light">Tambah Barang</a>
        </div>
    </section>

    <section class="section main-section">
        <div class="card has-table">
            <header class="card-header">
                <p class="card-header-title">
                <span class="icon"><i class="mdi mdi-account-multiple"></i></span>
                Barang
                </p>
            </header>
            <div class="card-content">
                <table>
                    <thead>
                        <th>ID Barang</th>
                        <th>Foto</th>
                        <th>Nama Produk</th>
                        <th>Merk</th>
                        <th>Harga</th>
                        <th>Opsi</th>
                    </thead>
                    <tbody>
                    @forelse ($barangs as $barang)
                        <tr>
                            <td >{{$barang->id_barang }}</td>
                            <td > <img src="{{ asset('/storage/product/'.$barang->image) }}" class="rounded"
                            style="width: 150px"></td>
                            <td >{{$barang->nama_produk}}</td>
                            <td >{{$barang->merk}}</td>
                            <td >{{$barang->harga }}</td>
                            <td>
                                <form onsubmit="return confirm('Apakah anda yakin?')" action="{{ route('barang.destroy', $barang->id_barang) }}" method="post">
                                    <a href="{{ route('barang.edit', $barang->id_barang) }}" class="button small
                                    green --jb-modal" type="button">
                                    <span class="icon"><i class="mdi mdi-pencil"></i></span>
                                    </a>
                                    @csrf
                                    @method('DELETE')
                                    <button class="button small red --jb-modal" data-target="sample-modal"
                                    type="submit">
                                        <span class="icon"><i class="mdi mdi-trash-can"></i></span>
                                    </button>
                                </form>
                            </td>                            
                        </tr>
                    @empty
                        <tr>
                            <div class="card empty">
                                <div class="card-content">
                                    <div>
                                        <span class="icon large"><i class="mdi mdi-emoticon-sad mdi-48px"></i></span>
                                    </div>
                                    <p>Nothing's here…</p>
                                </div>
                            </div>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </section>        
</x-layout>