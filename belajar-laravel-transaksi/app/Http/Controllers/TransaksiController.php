<?php

namespace App\Http\Controllers;
use App\Models\Transaksi;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    public function index() 
    {
        $transaksis = Transaksi::all(); // Mendapatkan semua transaksi dari model Transaksi
        return view('dashboard', ['transaksis' => $transaksis]);
    }
}
