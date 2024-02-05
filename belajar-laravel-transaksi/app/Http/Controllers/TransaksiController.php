<?php

namespace App\Http\Controllers;
use App\Models\Transaksi;
use App\Models\Barang;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class TransaksiController extends Controller
{
    public function index() 
    {
        $transaksis = Transaksi::all(); // Mendapatkan semua transaksi dari model Transaksi
        return view('pages.dashboard', ['transaksis' => $transaksis]);
    }
    
    public function create(): view
    {
        $transaksi = Barang::all();
        return view('commons.forms.insertformtransaksi', ['transaksi' => $transaksi]);
    }

    public function store(Request $request): RedirectResponse
    {
        $barang = Barang::findOrFail($request->id_barang);

        Transaksi::create([
            'id_transaksi' => $request->id_transaksi,
            'id_barang' => $barang->id,
            'total_item' => $request->total_item,
            'total_harga' => $request->total_harga
        ]);

        return redirect()->route('transaksi.index');
    }
}