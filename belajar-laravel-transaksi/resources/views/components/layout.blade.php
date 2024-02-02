<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SIK</title>
    <!-- Tailwind is included -->
    <link rel="stylesheet" href="{{ URL::asset('css/main.css'); }} ">
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-130795909-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'UA-130795909-1');
    </script>
</head>
<body>
    <x-sidebar />
    {{ $slot }}
    <script type="text/javascript" src="{{ URL::asset('js/main.min.js'); }} "></script>
    <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.9.95/css/materialdesignicons.min.css">
</body>
</html>