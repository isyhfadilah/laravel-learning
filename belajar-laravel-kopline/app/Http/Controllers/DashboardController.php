<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;
use App\Models\Film;

use Session;

class DashboardController extends Controller
{
    public function index()
    {
        return view('pages.dashboard.index');
    }

    public function films() : view
    {
        $films = Film::latest()->paginate(5);
        return view('pages.dashboard.film', compact('films'));
    }

    public function store(Request $request): RedirectResponse
    {
        $this->validate($request, [
            'judul_film' => 'required|string',
            'image' => 'required|image|mimes:jpeg,jpg,png',
            'harga' => 'required|integer',
            'date' => 'required',
            'time' => 'required'
        ]);

        $image = $request->file('image');
        $image->storeAs('public/film', $image->hashName());

        Film::create([
            'judul_film' => $request->judul_film,
            'image' => $image->hashName(),
            'harga' => $request->harga,
            'time' => $request->time,
            'date' => $request->date,
        ]);

        return redirect()->route('film')->with(['success' => 'Data berhasil disimpan!']);
    }

    public function destroy($id_film): RedirectResponse 
    {
        $films = Film::findOrFail($id_film);
        $films->delete();

        return redirect()->route('film')->with(['success' => 'Data berhasil dihapus!']);
    }
}
