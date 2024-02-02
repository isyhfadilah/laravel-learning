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
                Tambah Data Barang
                </p>
            </header>
            <div class="card-content">
                <form action="{{ route('barang.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                    <div class="field">
                        <div class="field-body">
                            <div class="flex">
                                <div class="field">
                                    <div class="control icons-left">
                                        <input class="input" type="text" placeholder="Nama Barang" name="nama_produk">
                                        <span class="icon left"><i class="mdi mdi-rename-box"></i></span>
                                    </div>
                                </div>
                                <div class="field px-2">
                                    <div class="field-body">
                                        <div class="field file">
                                            <label class="upload control">
                                                <a class="button blue">
                                                Upload Foto
                                                </a>
                                                <input type="file" name="image">
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="field">
                                <div class="control icons-left">
                                    <input class="input" type="text" placeholder="Merk" name="merk" >
                                    <span class="icon left"><i class="mdi mdi-label-outline"></i></span>
                                </div>
                            </div>
                            <div class="field">
                                <div class="control icons-left">
                                    <input class="input" type="number" placeholder="Harga" name="harga" >
                                    <span class="icon left"><i class="mdi mdi-coins"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="field grouped">
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