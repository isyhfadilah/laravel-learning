<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <title>Laravel</title>
</head>
<body class="bg-stone-950">
    {{-- statis --}}
    {{-- @yield('content') --}}
    <x-navbar />
    {{-- dinamis --}}
    {{ $slot }}
    <x-footer />
</body>
</html>