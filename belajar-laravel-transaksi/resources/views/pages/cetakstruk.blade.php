<script src="https://cdn.tailwindcss.com"></script>
<div class="flex flex-col justify-center items-center mt-10">
    <h1 class="text-2xl font-bold uppercase">Struk Transaksi Barang</h1>
    <div class="flex space-x-2">
        <p class="text-sm text-gray-600">{{ $transaksi->created_at }}</p>
        <p class="text-sm text-gray-600">ID : {{ $transaksi->id_transaksi }}</p>
    </div>
    <div class="mt-10 space-y-8 text-gray-500 w-1/2 text-center">
        <div class="flex justify-between">
            <p>Nama Produk :</p>
            {{-- <p>:</p> --}}
            {{ $transaksi->barang->nama_produk }}
        </div>
        <div class="flex justify-between">
            <p>Harga Produk :</p>
            {{-- <p>:</p> --}}
            {{ $transaksi->barang->harga }}
        </div>
        <div class="flex justify-between">
            <p>Total Item :</p>
            {{-- <p>:</p> --}}
            {{ $transaksi->total_item }}
        </div>
        <div class="flex justify-between">
            <p>Total Harga :</p>
            {{-- <p>:</p> --}}
            {{ $transaksi->total_harga }}
        </div>
    </div>
    <div class="text-sm text-gray-400 text-center w-1/3 mt-6">
        <p>Simpanlah struk ini sebagai bukti pembayaran anda.</p>
        <p>Terima kasih</p>
    </div>
</div>

<script type="text/javascript">
    window.print()
</script>