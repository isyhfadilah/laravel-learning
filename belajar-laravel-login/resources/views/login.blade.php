<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login - Aplikasi Absensi</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex justify-center items-center py-10">
    <div class="bg-sky-900 py-10 w-1/4 rounded-md flex flex-col items-center">
        <h1 class="font-semibold text-white text-3xl">App<span class="text-2xl   text-cyan-500">SEN</span></h1>
        <h1 class="font-medium text-white/90 lowercase">Ab<span class="text-cyan-400">sen</span>si <span class="text-cyan-400">app</span>lication</h1>

        @if(session('error'))
        <div class="text-sm bg-rose-100 text-rose-700 py-2 rounded-md px-5 mt-5">
            <b>Opps!</b> {{session('error')}}
        </div>
        @endif

        @if(session('success'))
        <div class="text-sm bg-green-100 text-green-500 py-2 rounded-md px-5 mt-5">
            <b>Berhasil login.</b> {{session('success')}}
        </div>
        @endif

        <form class="py-5 w-full" action="{{ route('actionlogin') }}" method="post">
        @csrf
        <div class="space-y-3 px-5">
            <div class="flex flex-col text-white space-y-1">
                <label class="text-sm text-white/75 font-medium">Email</label>
                <input type="email" name="email" required class="py-2 px-5 rounded-lg text-black/50 font-medium">
            </div>
            <div class="flex flex-col text-white space-y-1">
                <label class="text-sm text-white/75 font-medium">Password</label>
                <input type="password" name="password" required class="py-2 px-5 rounded-lg text-black/50 font-medium">
            </div>
        </div>
        <div class="px-5 mt-10">
            <button type="submit" class="bg-cyan-500 py-2 w-full text-white rounded-full">Login</button>
        </div>
        <p class="text-white text-center pt-6 text-sm">Belum punya akun? <a class="text-cyan-500" href="{{ route('register') }}">Register</a> sekarang!</p>
        </form>
    </div>
</body>
</html>