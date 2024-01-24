<?php

namespace App\Http\Controllers;

use App\Models\Teacher;

// return type
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    /**
    * index
    *
    * @return View
    */
    public function index(): view
    {
        $teachers = Teacher::latest()->paginate(10);
        return view('teachers.index', compact('teachers'));
    }

    /**
    * create
    *
    * @return View
    */
    public function create(): view
    {
        return view('teachers.create');
    }

    /**
    * store
    *
    * @param mixed $request
    * @return RedirectResponse
    */
    public function store(Request $request): RedirectResponse 
    {
        $this->validate($request, [
            'nip' => 'required|max:6',
            'pengajar' => 'required',
            'mata_pelajaran' => 'required'
        ]);

        Teacher::create([
            'nip' => $request->nip,
            'pengajar' => $request->pengajar,
            'mata_pelajaran' => $request->mata_pelajaran,
        ]);

        return redirect()->route('teachers.index')->with(['success' => 'Data berhasil disimpan!']);
    }

    /**
    * show
    *
    * @param mixed $id
    * @return View
    */
    public function show(string $id): view
    {
        $teachers = Teacher::findOrFail($id);
        return view('teachers.show', compact('teachers'));
    }

    /**
    * edit
    *
    * @param mixed $id
    * @return View
    */
    public function edit(string $id): view 
    {
        $teachers = Teacher::findOrFail($id);
        return view('teachers.edit', compact('teachers'));
    }


    public function update(Request $request, $id): RedirectResponse
    {
        $this->validate($request, [
            'nip' => 'required|max:6',
            'pengajar' => 'required',
            'mata_pelajaran' => 'required'
        ]);

        $teachers = Teacher::findOrFile($id);

        $teachers->update([
            'nip' => $request->nip,
            'pengajar' => $request->pengajar,
            'mata_pelajaran' => $request->mata_pelajaran
        ]);

        return redirect()->route('teachers.index');
    }

}
