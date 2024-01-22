<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function data()
    {
        $content = User::latest()->get();
        return view('source-data', compact('content'));
    }
}
