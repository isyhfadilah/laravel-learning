<script src="https://cdn.tailwindcss.com"></script>
<div class="flex flex-col justify-center items-center space-y-2 mt-10">
    <h1 class="font-bold capitalize">laporan data transaksi</h1>
    <table class="border-separate border-spacing-2 border border-slate-400">
        <thead class="space-x-10">
            <th class="border-r">ID Transaksi</th>
            <th class="border-r">Nama Barang</th>
            <th class="border-r">Total Item</th>
            <th class="border-r">Total Harga</th>
            <th class="border-r">Status Pembayaran</th>
            <th>tgl_transaksi</th>
        </thead>
        <tbody>
        @forelse ($transaksis as $transaksi)
            <tr>
                <td data-label="id_transaksi">{{ $transaksi->id_transaksi }}</td>
                <td data-label="nama_item">{{ $transaksi->barang->nama_produk}}</td>
                <td data-label="total_item">{{ $transaksi->total_item }}</td>
                <td data-label="total_harga">{{ $transaksi->total_harga }}</td>
                <td data-label="status_pembayaran">{{ $transaksi->status_pembayaran }}</td>
                <td data-label="Created">
                    <small class="text-gray-500" title="Oct 25, 2021">Feb 07, 2024</small>
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

<script type="text/javascript">
    window.print();
</script>