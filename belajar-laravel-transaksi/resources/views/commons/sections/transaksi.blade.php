<section class="section main-section">
    <div class="card has-table">
        <header class="card-header">
            <p class="card-header-title">
            <span class="icon"><i class="mdi mdi-account-multiple"></i></span>
            Transaksi
            </p>
        </header>
        <div class="card-content">
            <table>
                <thead>
                    <th>ID Transaksi</th>
                    <th>Nama Barang</th>
                    <th>Total Item</th>
                    <th>Total Harga</th>
                    <th>Status Pembayaran</th>
                    <th>Tanggal Transaksi</th>
                    <th>Aksi</th>
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
                            <small class="text-gray-500" title="Oct 25, 2021">{{ $transaksi->created_at }}</small> 
                        </td>
                        <td>  
                            <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('transaksi.destroy', $transaksi->id_transaksi) }}" method="POST"> 
                                <a href="{{ route('cetakstruk', ['id_transaksi' => $transaksi->id_transaksi]) }}" target="_blank" class="button small green --jb-modal" type="button"> 
                                    <span class="icon"><i class="mdi mdi-printer"></i></span> 
                                </a> 
                                @csrf 
                                @method('DELETE') 
                                <button class="button small red --jb-modal" type="submit"> 
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