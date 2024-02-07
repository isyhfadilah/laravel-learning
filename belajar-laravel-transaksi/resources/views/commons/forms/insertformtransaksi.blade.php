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
                    {{-- <div class="field">
                        <div class="control icons-left">
                            <input class="input" type="number" placeholder="Id Transaksi" name="id_transaksi">
                            <span class="icon left"><i class="mdi mdi-rename-box"></i></span>
                        </div>
                    </div> --}}
                    <select class="w-full control outline py-2 rounded-md px-2 mb-3" name="barang" id="barang" class="input" 
                    onchange='updateInput(document.getElementById("barang").value)'>
                        <option value="">-- Barang --</option> 
                            @foreach ($transaksi as $item)
                                <option value="{{ $item->id_barang }}">{{ $item->nama_produk }}</option>
                            @endforeach
                    </select>
                    <div class="field"> 
                        <div class="control icons-left"> 
                          <input class="input" type="number" placeholder="Harga" name="harga" id="harga" readonly> 
                          <span class="icon left"><i class="mdi mdi-coins"></i></span> 
                        </div> 
                      </div> 
                    <div class="field">
                        <div class="control icons-left">
                            <input class="input" type="number"
                            name="total_item" id='qty' 
                            onchange='updatetHarga(document.getElementById("harga").value)' type="number" 
                            placeholder="Qty" value='1'>
                            <span class="icon left"><i class="mdi mdi-coins"></i></span>
                        </div>
                    </div>
                    <div class="field">
                        <div class="control icons-left">
                            <input class="input" type="readonly" placeholder="Total Harga" name="total_harga" id='tharga' value='' readonly>
                            <span class="icon left"><i class="mdi mdi-coins"></i></span>
                        </div>
                    </div>
                    <select name="status_pembayaran" class="input"> 
                        <option value="">-- Status Pembayaran --</option> 
                        <option value="selesai">Selesai</option> 
                        <option value="belum selesai">Belum Selesai</option>  
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

<script type="text/javascript" src="{{ URL::asset('js/main.min.js'); }} 
"></script> 
  <script> 
        function updatetHarga(input){ 
            document.getElementById("tharga").value=input*document.getElementById("qty").value; 
        } 
        function updateInput(input){ 
            var barang = @json($transaksi); 
            for (let i = 0; i< barang.length;i++){ 
                if (barang[i].id_barang == input) { 
                    document.getElementById("harga").value=barang[i].harga; 
                    updatetHarga(document.getElementById("harga").value=barang
 [i].harga); 
                } 
            } 
        } 
    </script> 