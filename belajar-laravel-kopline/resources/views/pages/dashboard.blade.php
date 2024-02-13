<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kopline | Dashboard</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="{{ URL::asset('css/main.css'); }} ">
</head>
<body class="bg-stone-950">
    @include('components/sidebar')
    @include('ui/dashboard/main')
    <script type="text/javascript" src="{{ URL::asset('js/main.min.js'); }} "></script>
</body>
</html>