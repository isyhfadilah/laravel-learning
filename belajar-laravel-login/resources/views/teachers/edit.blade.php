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
                    <li class=""><a href="{{ route('teachers.index') }}">Data Master</a></li>
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
        <div class="flex justify-center">
            <form action="{{ route('teachers.update', $teachers->id) }}" method="post" class="w-1/2">
                @csrf
                @method('PUT')

                <div class="space-y-3 px-5">
                    <div class="flex flex-col text-white space-y-1">
                        <label class="text-sm text-white/75 font-medium">NIP</label>
                        <input type="number" name="nip" required value="{{ old('nip', $teachers->nip) }}" class="py-2 px-5 rounded-lg text-black/50 font-medium">
                    </div>
                    <div class="flex flex-col text-white space-y-1">
                        <label class="text-sm text-white/75 font-medium">Nama Pengajar</label>
                        <input type="text" name="pengajar" required value="{{ old('pengajar', $teachers->pengajar) }}" class="py-2 px-5 rounded-lg text-black/50 font-medium">
                    </div>
                    <div class="flex flex-col text-white space-y-1">
                        <label class="text-sm text-white/75 font-medium">Mata Pelajaran</label>
                        <input type="text" name="mata_pelajaran" required value="{{ old('mata_pelajaran', $teachers->mata_pelajaran) }}" class="py-2 px-5 rounded-lg text-black/50 font-medium">
                    </div>
                    <button type="submit" class="bg-cyan-500 py-2 w-full text-white rounded-full">Simpan perubahan</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>