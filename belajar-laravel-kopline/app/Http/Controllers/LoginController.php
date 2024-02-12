<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;

class LoginController extends Controller
{
    public function index() 
    {
        return view('forms.login');
    }

    public function actionlogin(Request $request)
    {
        $data = [
            'name' => $request->input('name'),
            'password' => $request->input('password')
        ];

        if(Auth::Attempt($data)) {
            return redirect('/');
        } else {
            Session::flash('error', 'Username atau password salah.');
            return redirect('login');
        }
    }
}
