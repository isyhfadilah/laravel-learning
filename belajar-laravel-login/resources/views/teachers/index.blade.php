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

        @if(session('error'))
        <div class="flex justify-center mb-6">
            <div class="text-sm w-1/3 bg-green-100 text-green-500 py-2 rounded-md px-5 mt-5">
                <b>Opps!.</b> {{session('error')}}
            </div>
        </div>
        @endif

        @if(session('success'))
        <div class="flex justify-center mb-3">
            <div class="text-sm w-1/3 bg-green-100 text-green-500 py-2 rounded-md px-5 mt-5">
                <b>Berhasil.</b> {{session('success')}}
            </div>
        </div>
        @endif

        <a class="mx-10 px-3 py-1 rounded-full bg-cyan-600 text-white" href="{{ route('teachers.create') }}">Tambah</a>
        <div class="flex flex-col space-y-6">
            <h1 class="text-2xl text-white text-center font-bold">Data Pengajar <span class="text-cyan-300">SMKN 2 Sumedang</span></h1>
            <table class="flex justify-center">
                <tr class="bg-cyan-600 px-10">
                    <th class="py-6 px-10">NIP</th>
                    <th class="py-6 px-6">Nama Pengajar</th>
                    <th class="py-6">Mata Pelajaran</th>
                    <th>Aksi</th>
                </tr>
                @forelse ($teachers as $teacher)
                <tr>
                    <td class="py-1">{{ $teacher->nip }}</td>
                    <td>{{ $teacher->pengajar }}</td>
                    <td class="line-clamp-1">{{ $teacher->mata_pelajaran }}</td>
                    <td class="text-center">
                        <form onsubmit="return confirm('Apakah anda yakin?')" action="{{ route('teachers.destroy', $teacher->id) }}" method="post">
                            <a href="{{ route('teachers.show', $teacher->id) }}" class="bg-blue-400 text-sm px-2">SHOW</a>
                            <a href="{{ route('teachers.edit', $teacher->id) }}" class="bg-green-500 text-sm px-2">EDIT</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-500 text-sm px-2">HAPUS</button>
                        </form>
                    </td>
                </tr> 
                @empty
                        
                @endforelse
            </table>

        </div>
    </div>
</body>
<script>
    @if(session()->has('success'))
        toastr.success('{{ session('success') }}', 'BERHASIL');
    @elseif(session()->has('error'))
        toastrs.error('{{ session('error') }}', 'GAGAL');
    @endif
</script>
</html>