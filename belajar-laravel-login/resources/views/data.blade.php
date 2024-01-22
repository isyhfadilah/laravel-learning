{{-- @include('master') --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aplikasi Absensi</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex bg-rose-100 items-center">  
    <table class="table-fixed">
        <tr>
            <th>Nama</th>
            <th>Posisi</th>
        </tr>
        @forelse ($content as $data)
        <tr>
            <td>{{ $data->name; }}</td>
            <td>{{ $data->role; }}</td>
        </tr>
    </table>   
        @empty
        @endforelse
</body>
</html>