<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class BarangController extends Controller
{
    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            if(Auth::check()) {
                return $next($request);
            } else {
                return redirect('/');
            }
        });
    }

    public function index() : view
    {
        $barangs = Barang::latest()->paginate(5);
        return view('pages.barang', compact('barangs'));
    }

    public function create(): view 
    {
        return view('commons.forms.insertformbarang');
    }

    public function store(Request $request): RedirectResponse
    {
        $this->validate($request, [
            'image' => 'required|image|mimes:jpeg,jpg,png|max:2048',
            'nama_produk' => 'required|min:2',
            'merk' => 'required|min:3',
            'harga' => 'required|min:3'
        ]);

        $image = $request->file('image');
        $image->storeAs('public/product', $image->hashName());

        Barang::create([
            'image' => $image->hashName(),
            'nama_produk'=> $request->nama_produk,
            'merk' => $request->merk,
            'harga' => $request->harga
        ]);

        return redirect()->route('barang.index')->with(['success', 'Data berhasil disimpan!']);
    }

    public function edit(string $id_barang): view 
    {
        $barang = Barang::findOrFail($id_barang);
        return view('commons.forms.updateformbarang', compact('barang'));
    }

    public function update(Request $request, $id_barang): RedirectResponse
    {
        $this->validate($request, [
            'image' => 'image|mimes:jpeg,jpg,png',
            'nama_produk' => 'required|min:2',
            'merk' => 'required|min:3',
            'harga' => 'required|min:3'
        ]);

        $barang = Barang::findOrFail($id_barang);

        if($request->hasFile('image')) {
            $image = $request->file('image');
            $image->storeAs('public/product/'.$image->hashName());

            // delete old image
            Storage::delete('public/product/'.$barang->image);

            $barang->update([
                'image' => $image->hashName(),
                'nama_produk' => $request->nama_produk,
                'merk' => $request->merk,
                'harga' => $request->harga
            ]);
        } else {
            $barang->update([
                'nama_produk' => $request->nama_produk,
                'merk' => $request->merk,
                'harga' => $request->harga
            ]);
        }

        return redirect()->route('barang.index');
    }

    public function destroy($id_barang): RedirectResponse 
    {
        $barangs = Barang::findOrFail($id_barang);
        $barangs->delete();

        return redirect()->route('barang.index');
    }
}
