@vite('resources/css/app.css')
<title>Kopline | Login</title>

<div class="flex justify-center mt-16">
    <div class="bg-stone-950 w-1/4 py-10 rounded-lg shadow-lg">
        <h1 class="text-4xl mb-10 text-white font-bold text-center"><span class="text-rose-700">KOP</span>line</h1>

        @if(session('error'))
            <div class="bg-rose-100/50 mx-4 mb-10 py-2 px-2 text-sm text-rose-800 text-center rounded-md">
                <b>Opps!</b> {{ session('error') }}
            </div>
        @endif

        @if (session('success'))     
            <div class="bg-green-100/50 mx-4 mb-10 p-2 text-sm text-green-800 text-center rounded-md">
                <b>Berhasil daftar.</b> {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('actionlogin') }}" class="flex flex-col mx-4" method="post">
            @csrf
            <div class="space-y-6">
                <input type="text" name="name" placeholder="username" class="py-2 px-3 rounded-lg w-full" required/>
                <input type="password" name="password" placeholder="password" class="py-2 px-3 rounded-lg w-full" required/>
            </div>
            <button type="submit" class="mt-8 bg-rose-700 text-white rounded-full py-2">Login</button>
            <p class="text-white text-sm text-center mt-6">Belum punya akun? <a href="{{ route('register') }}" class="text-rose-700">register</a> sekarang.</p>
        </form>
    </div>
</div>