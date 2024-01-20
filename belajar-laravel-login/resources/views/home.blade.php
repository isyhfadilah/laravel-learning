@extends('master')

@section('konten')
    <h4 class="w-1/2 text-center text-4xl font-bold">Selamat Datang <span class="text-cyan-500">{{ Auth::user()->name }}</span>, Anda login sebagai <span class="text-cyan-500">{{ Auth::user()->role}}</span></h4>
    <button class="bg-cyan-600 py-2 px-3 rounded-full">Selanjutnya</button>
@endsection