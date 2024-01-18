<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// can handle authentication
use Illuminate\Support\Facades\Auth;

// send message session error
use Session;

class LoginController extends Controller
{
    public function login()
    {
        // apakah user sdh login ?
        if(Auth::check()) {
            return redirect('home');
        } else {
            return view('login');
        }
    }
    
    public function actionlogin(Request $request) 
    {
        $data = [
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ];

        // // cek validasi login langsung ke table users
        if(Auth::Attempt($data)) {
            return redirect('home');
        } else {
            Session::flash('error', 'Email atau Password Salah!');
            return redirect('/');
        }

        // Debugging statement: Log the input data
        // Log::info('Input data:', $data);

        // if(Auth::attempt($data)) {
        //     // Debugging statement: Log a success message
        //     Log::info('Login successful');

        //     return redirect('home');
        // } else {
        //     // Debugging statement: Log a failure message
        //     Log::error('Login failed', ['email' => $data['email']]);

        //     Session::flash('error', 'Email atau Password Salah!');
        //     return redirect('/');
        // }
    }

    public function actionlogout()
    {
        Auth::logout();
        return redirect('/');
    }
}
