@vite('resources/css/app.css')
<title>Kopline | Register</title>

<div class="flex justify-center mt-16 mx-20">
    <div class="bg-stone-950 w-1/4 py-10 rounded-lg shadow-lg">
        <h1 class="text-4xl mb-10 text-white font-bold text-center"><span class="text-rose-700">KOP</span>line</h1>

        <form action="{{ route('actionregister') }}" class="flex flex-col mx-4" method="post">
            @csrf
            <div class="space-y-6">
                <input type="text" name="name" placeholder="username" class="py-2 px-3 rounded-lg w-full" required/>
                <input type="email" name="email" placeholder="email" class="py-2 px-3 rounded-lg w-full" required/>
                <input type="password" name="password" placeholder="password" class="py-2 px-3 rounded-lg w-full" required/>
            </div>
            <button type="submit" class="mt-8 bg-rose-700 text-white rounded-full py-2">Register</button>
            <p class="text-white text-sm text-center mt-6">Sudah punya akun? <a href="{{ route('login') }}" class="text-rose-700">login</a> sekarang.</p>
        </form>
    </div>
</div>