<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sistem Informasi Kasir</title>
    <script type="text/javascript" src="{{ URL::asset('js/main.min.js'); }} "></script>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class="flex min-h-full flex-col justify-center p-6 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
            <h2 class="mt-5 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">SIK</h2>
            <h4 class="text-center text-xl leading-9 tracking-tight text-gray-900">Sistem Informasi Kasir</h4>
        </div>

        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
            <form class="space-y-6" action="{{ route('actionregister')}}" method="post">
            @csrf
                <div>
                    <label for="name" class="block text-sm font-medium leading-6 text-gray-900">Username</label>
                    <div class="mt-2">
                        <input id="name" name="name" type="text" required class="block
                        w-full rounded-md border-0 py-1.5 px-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300
                        placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm
                        sm:leading-6">
                    </div>
                </div>
                <div>
                    <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email
                    address</label>
                    <div class="mt-2">
                        <input id="email" name="email" type="email" autocomplete="email" required class="block
                        w-full rounded-md border-0 py-1.5 px-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300
                        placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm
                        sm:leading-6">
                    </div>
                </div>
                <div>
                    <div class="flex items-center justify-between">
                        <label for="password" class="block text-sm font-medium leading-6
                    text-gray-900">Password</label>
                    </div>

                    <div class="mt-2">
                        <input id="password" name="password" type="password" autocomplete="current-password"
                        required class="px-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1
                        ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset
                        focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                </div>
                <div>
                    <div class="flex items-center justify-between">
                        <label for="role" class="block text-sm font-medium leading-6
                    text-gray-900">Role</label>
                    </div>

                    <div class="mt-2">
                        <input id="role" name="role" type="number"
                        required class="px-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1
                        ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset
                        focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                </div>
                <div>
                    <button type="submit" class="flex w-full justify-center rounded-md bg-indigo-600 px-3
                    py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500
                    focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2
                    focus-visible:outline-indigo-600">Register</button>
                </div>
            </form>
            <p class="text-center mt-6">Sudah punya akun? <a class="underline text-[blue] hover:text-black" href="{{ route('login') }}">Login</a> sekarang!</p>          
        </div>
    </div>
</body>
</html>