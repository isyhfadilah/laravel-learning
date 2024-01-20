<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aplikasi Absensi</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body class="bg-sky-950 text-white">
    <div class="container">
        <nav class="px-10 py-4 flex justify-between items-center">
            <div class="flex items-center space-x-16">
                <a href="{{ route('home') }}" class="font-semibold text-2xl">App<span class="text-cyan-500 text-lg">SEN</span></a>
                <ul class="flex font-medium text-base space-x-6 items-center text-white/90">
                    <li class=""><a href="{{ route('data') }}">Data Master</a></li>
                    <li class=""><a href="#">Laporan</a></li>
                    <li class=""><a href="#">Ga tau</a></li>
                </ul>
            </div>
            <div class="space-x-5 flex">
                <div class="flex items-center space-x-2">
                    <i class="fa-solid fa-user"></i>
                    <a href="#">{{ Auth::User()->email }}</a>
                </div>
                <a class="bg-cyan-600 py-1 px-3 rounded-full" href="{{ route('actionlogout') }}">Logout</a>
            </div>
        </nav>
        <div class="px-10 py-40 space-y-10 flex justify-center items-center flex-col">
            @yield('konten')
        </div>
    </div>
</body>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</html>