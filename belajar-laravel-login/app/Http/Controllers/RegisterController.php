<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class RegisterController extends Controller
{
    public function register()
    {
        return view('register');
    }


    public function actionregister(Request $request): RedirectResponse
    {
        // validate form
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|min:8',
            'role' => 'required|string|max:5',
        ]);

        // create post
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            'role' => $request->role
        ]);

        // redirect to index
        return redirect()->route('login')->with(['success' => 'Silahkan login kembali.']);
    }
}

