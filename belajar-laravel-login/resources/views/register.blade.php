<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register - Aplikasi Absensi</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex justify-center items-center py-3">
    <div class="bg-sky-900 py-10 w-1/4 rounded-md flex flex-col items-center">
        <h1 class="font-semibold text-white text-3xl">Register</h1>

        <form class="py-5 w-full" action="{{ route('actionregister') }}" method="post">
        @csrf
        <div class="space-y-2 px-5">
            <div class="flex flex-col text-white space-y-1">
                <label class="text-sm text-white/75 font-medium">Name</label>
                <input type="text" name="name" required class="py-2 px-5 rounded-lg text-black/50 font-medium">
            </div>
            <div class="flex flex-col text-white space-y-1">
                <label class="text-sm text-white/75 font-medium">Role</label>
                <input type="text" name="role" required class="py-2 px-5 rounded-lg text-black/50 font-medium">
            </div>
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
            <button type="submit" class="bg-cyan-500 py-2 w-full text-white rounded-full">Daftar</button>
        </div>
        <p class="text-white text-center pt-6 text-sm">Sudah punya akun? <a class="text-cyan-500" href="{{ route('login') }}">Login</a> sekarang!</p>
        </form>
    </div>
</body>
</html>