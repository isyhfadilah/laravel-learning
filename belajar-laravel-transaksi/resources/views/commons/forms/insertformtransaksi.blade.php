<x-layout>
    <section class="is-title-bar">
        <div class="flex flex-col md:flex-row items-center justify-between space-y-6 md:space-y-0">
            <ul>
                <li>Admin</li>
                <li>Dashboard</li>
            </ul>
        </div>
    </section>

    <section class="section main-section">
        <div class="card has-table">
            <header class="card-header">
                <p class="card-header-title">
                <span class="icon"><i class="mdi mdi-plus-box-outline"></i></span>
                Tambah Data Transaksi
                </p>
            </header>
            <div class="card-content">
                <form action="{{route('transaksi.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                    <div class="field">
                        <div class="control icons-left">
                            <input class="input" type="text" placeholder="Id Transaksi" name="id_transaksi">
                            <span class="icon left"><i class="mdi mdi-rename-box"></i></span>
                        </div>
                    </div>
                    <div class="field">
                        <div class="control icons-left">
                            <input class="input" type="text" placeholder="Id Transaksi" name="id_transaksi">
                            <span class="icon left"><i class="mdi mdi-rename-box"></i></span>
                        </div>
                    </div>
                    <select class="w-full control outline py-2 rounded-md px-2" name="id_barang" id="id_barang">
                        @foreach ($transaksi as $item)
                            <option value="{{ $item->id_barang }}">{{ $item->nama_produk }}</option>
                        @endforeach
                    </select>
                    <div class="field grouped mt-6">
                        <div class="control">
                            <button type="submit" class="button green">
                            Submit
                            </button>
                        </div>
                        <div class="control">
                            <button type="reset" class="button red">
                            Reset
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>       
</x-layout>