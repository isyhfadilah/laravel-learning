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

    public function update(Request $request, $id_film): RedirectResponse 
    {
        $this->validate($request, [
            'judul_film' => 'required|string',
            'image' => 'required|image|mimes:jpeg,jpg,png',
            'harga' => 'required|integer',
            'date' => 'required',
            'time' => 'required'
        ]);

        $film = Film::findOrFail($id_film);

        if($request->hasFile('image')) {
            $image = $request->file('image');
            $image->storeAs('public/film/'.$image->hashName());

            // delete old img
            Storage::delete('public/film/'.$film->image);

            $film->update([
                'judul_film' => $request->judul_film,
                'image' => $image->hashName(),
                'harga' => $request->harga,
                'time' => $request->time,
                'date' => $request->date
            ]);
        } else {
            $film->update([
                'judul_film' => $request->judul_film,
                'harga' => $request->harga,
                'time' => $request->time,
                'date' => $request->date  
            ]);
        }

        return redirect()->route('film')->with(['success' => 'Data berhasil di update!']);
    }

    public function destroy($id_film): RedirectResponse 
    {
        $films = Film::findOrFail($id_film);
        $films->delete();

        return redirect()->route('film')->with(['success' => 'Data berhasil dihapus!']);
    }

    public function show($id_film)
    {
        $film = Film::findOrFail($id_film);

        return view('pages.dashboard.detail', compact('film'));
    }
}
